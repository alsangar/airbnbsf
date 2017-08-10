<?php 
namespace Symfony\Component\EventDispatcher
{
interface EventSubscriberInterface
{
public static function getSubscribedEvents();
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
abstract class SessionListener implements EventSubscriberInterface
{
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$request = $event->getRequest();
$session = $this->getSession();
if (null === $session || $request->hasSession()) {
return;
}
$request->setSession($session);
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 128),
);
}
abstract protected function getSession();
}
}
namespace Symfony\Bundle\FrameworkBundle\EventListener
{
use Symfony\Component\HttpKernel\EventListener\SessionListener as BaseSessionListener;
use Symfony\Component\DependencyInjection\ContainerInterface;
class SessionListener extends BaseSessionListener
{
private $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
protected function getSession()
{
if (!$this->container->has('session')) {
return;
}
return $this->container->get('session');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
interface SessionStorageInterface
{
public function start();
public function isStarted();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function regenerate($destroy = false, $lifetime = null);
public function save();
public function clear();
public function getBag($name);
public function registerBag(SessionBagInterface $bag);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\NativeProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\SessionHandlerProxy;
class NativeSessionStorage implements SessionStorageInterface
{
protected $bags;
protected $started = false;
protected $closed = false;
protected $saveHandler;
protected $metadataBag;
public function __construct(array $options = array(), $handler = null, MetadataBag $metaBag = null)
{
session_cache_limiter(''); ini_set('session.use_cookies', 1);
session_register_shutdown();
$this->setMetadataBag($metaBag);
$this->setOptions($options);
$this->setSaveHandler($handler);
}
public function getSaveHandler()
{
return $this->saveHandler;
}
public function start()
{
if ($this->started) {
return true;
}
if (\PHP_VERSION_ID >= 50400 && \PHP_SESSION_ACTIVE === session_status()) {
throw new \RuntimeException('Failed to start the session: already started by PHP.');
}
if (\PHP_VERSION_ID < 50400 && !$this->closed && isset($_SESSION) && session_id()) {
throw new \RuntimeException('Failed to start the session: already started by PHP ($_SESSION is set).');
}
if (ini_get('session.use_cookies') && headers_sent($file, $line)) {
throw new \RuntimeException(sprintf('Failed to start the session because headers have already been sent by "%s" at line %d.', $file, $line));
}
if (!session_start()) {
throw new \RuntimeException('Failed to start the session');
}
$this->loadSession();
if (!$this->saveHandler->isWrapper() && !$this->saveHandler->isSessionHandlerInterface()) {
$this->saveHandler->setActive(true);
}
return true;
}
public function getId()
{
return $this->saveHandler->getId();
}
public function setId($id)
{
$this->saveHandler->setId($id);
}
public function getName()
{
return $this->saveHandler->getName();
}
public function setName($name)
{
$this->saveHandler->setName($name);
}
public function regenerate($destroy = false, $lifetime = null)
{
if (\PHP_VERSION_ID >= 50400 && \PHP_SESSION_ACTIVE !== session_status()) {
return false;
}
if (\PHP_VERSION_ID < 50400 &&''=== session_id()) {
return false;
}
if (null !== $lifetime) {
ini_set('session.cookie_lifetime', $lifetime);
}
if ($destroy) {
$this->metadataBag->stampNew();
}
$isRegenerated = session_regenerate_id($destroy);
$this->loadSession();
return $isRegenerated;
}
public function save()
{
session_write_close();
if (!$this->saveHandler->isWrapper() && !$this->saveHandler->isSessionHandlerInterface()) {
$this->saveHandler->setActive(false);
}
$this->closed = true;
$this->started = false;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$_SESSION = array();
$this->loadSession();
}
public function registerBag(SessionBagInterface $bag)
{
if ($this->started) {
throw new \LogicException('Cannot register a bag when the session is already started.');
}
$this->bags[$bag->getName()] = $bag;
}
public function getBag($name)
{
if (!isset($this->bags[$name])) {
throw new \InvalidArgumentException(sprintf('The SessionBagInterface %s is not registered.', $name));
}
if ($this->saveHandler->isActive() && !$this->started) {
$this->loadSession();
} elseif (!$this->started) {
$this->start();
}
return $this->bags[$name];
}
public function setMetadataBag(MetadataBag $metaBag = null)
{
if (null === $metaBag) {
$metaBag = new MetadataBag();
}
$this->metadataBag = $metaBag;
}
public function getMetadataBag()
{
return $this->metadataBag;
}
public function isStarted()
{
return $this->started;
}
public function setOptions(array $options)
{
$validOptions = array_flip(array('cache_limiter','cookie_domain','cookie_httponly','cookie_lifetime','cookie_path','cookie_secure','entropy_file','entropy_length','gc_divisor','gc_maxlifetime','gc_probability','hash_bits_per_character','hash_function','name','referer_check','serialize_handler','use_strict_mode','use_cookies','use_only_cookies','use_trans_sid','upload_progress.enabled','upload_progress.cleanup','upload_progress.prefix','upload_progress.name','upload_progress.freq','upload_progress.min-freq','url_rewriter.tags','sid_length','sid_bits_per_character','trans_sid_hosts','trans_sid_tags',
));
foreach ($options as $key => $value) {
if (isset($validOptions[$key])) {
ini_set('session.'.$key, $value);
}
}
}
public function setSaveHandler($saveHandler = null)
{
if (!$saveHandler instanceof AbstractProxy &&
!$saveHandler instanceof NativeSessionHandler &&
!$saveHandler instanceof \SessionHandlerInterface &&
null !== $saveHandler) {
throw new \InvalidArgumentException('Must be instance of AbstractProxy or NativeSessionHandler; implement \SessionHandlerInterface; or be null.');
}
if (!$saveHandler instanceof AbstractProxy && $saveHandler instanceof \SessionHandlerInterface) {
$saveHandler = new SessionHandlerProxy($saveHandler);
} elseif (!$saveHandler instanceof AbstractProxy) {
$saveHandler = \PHP_VERSION_ID >= 50400 ?
new SessionHandlerProxy(new \SessionHandler()) : new NativeProxy();
}
$this->saveHandler = $saveHandler;
if ($this->saveHandler instanceof \SessionHandlerInterface) {
if (\PHP_VERSION_ID >= 50400) {
session_set_save_handler($this->saveHandler, false);
} else {
session_set_save_handler(
array($this->saveHandler,'open'),
array($this->saveHandler,'close'),
array($this->saveHandler,'read'),
array($this->saveHandler,'write'),
array($this->saveHandler,'destroy'),
array($this->saveHandler,'gc')
);
}
}
}
protected function loadSession(array &$session = null)
{
if (null === $session) {
$session = &$_SESSION;
}
$bags = array_merge($this->bags, array($this->metadataBag));
foreach ($bags as $bag) {
$key = $bag->getStorageKey();
$session[$key] = isset($session[$key]) ? $session[$key] : array();
$bag->initialize($session[$key]);
}
$this->started = true;
$this->closed = false;
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage
{
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;
class PhpBridgeSessionStorage extends NativeSessionStorage
{
public function __construct($handler = null, MetadataBag $metaBag = null)
{
$this->setMetadataBag($metaBag);
$this->setSaveHandler($handler);
}
public function start()
{
if ($this->started) {
return true;
}
$this->loadSession();
if (!$this->saveHandler->isWrapper() && !$this->saveHandler->isSessionHandlerInterface()) {
$this->saveHandler->setActive(true);
}
return true;
}
public function clear()
{
foreach ($this->bags as $bag) {
$bag->clear();
}
$this->loadSession();
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
if (\PHP_VERSION_ID >= 50400) {
class NativeSessionHandler extends \SessionHandler
{
}
} else {
class NativeSessionHandler
{
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler
{
class NativeFileSessionHandler extends NativeSessionHandler
{
public function __construct($savePath = null)
{
if (null === $savePath) {
$savePath = ini_get('session.save_path');
}
$baseDir = $savePath;
if ($count = substr_count($savePath,';')) {
if ($count > 2) {
throw new \InvalidArgumentException(sprintf('Invalid argument $savePath \'%s\'', $savePath));
}
$baseDir = ltrim(strrchr($savePath,';'),';');
}
if ($baseDir && !is_dir($baseDir) && !@mkdir($baseDir, 0777, true) && !is_dir($baseDir)) {
throw new \RuntimeException(sprintf('Session Storage was not able to create directory "%s"', $baseDir));
}
ini_set('session.save_path', $savePath);
ini_set('session.save_handler','files');
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
abstract class AbstractProxy
{
protected $wrapper = false;
protected $active = false;
protected $saveHandlerName;
public function getSaveHandlerName()
{
return $this->saveHandlerName;
}
public function isSessionHandlerInterface()
{
return $this instanceof \SessionHandlerInterface;
}
public function isWrapper()
{
return $this->wrapper;
}
public function isActive()
{
if (\PHP_VERSION_ID >= 50400) {
return $this->active = \PHP_SESSION_ACTIVE === session_status();
}
return $this->active;
}
public function setActive($flag)
{
if (\PHP_VERSION_ID >= 50400) {
throw new \LogicException('This method is disabled in PHP 5.4.0+');
}
$this->active = (bool) $flag;
}
public function getId()
{
return session_id();
}
public function setId($id)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the ID of an active session');
}
session_id($id);
}
public function getName()
{
return session_name();
}
public function setName($name)
{
if ($this->isActive()) {
throw new \LogicException('Cannot change the name of an active session');
}
session_name($name);
}
}
}
namespace Symfony\Component\HttpFoundation\Session\Storage\Proxy
{
class SessionHandlerProxy extends AbstractProxy implements \SessionHandlerInterface
{
protected $handler;
public function __construct(\SessionHandlerInterface $handler)
{
$this->handler = $handler;
$this->wrapper = ($handler instanceof \SessionHandler);
$this->saveHandlerName = $this->wrapper ? ini_get('session.save_handler') :'user';
}
public function open($savePath, $sessionName)
{
$return = (bool) $this->handler->open($savePath, $sessionName);
if (true === $return) {
$this->active = true;
}
return $return;
}
public function close()
{
$this->active = false;
return (bool) $this->handler->close();
}
public function read($sessionId)
{
return (string) $this->handler->read($sessionId);
}
public function write($sessionId, $data)
{
return (bool) $this->handler->write($sessionId, $data);
}
public function destroy($sessionId)
{
return (bool) $this->handler->destroy($sessionId);
}
public function gc($maxlifetime)
{
return (bool) $this->handler->gc($maxlifetime);
}
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
interface SessionInterface
{
public function start();
public function getId();
public function setId($id);
public function getName();
public function setName($name);
public function invalidate($lifetime = null);
public function migrate($destroy = false, $lifetime = null);
public function save();
public function has($name);
public function get($name, $default = null);
public function set($name, $value);
public function all();
public function replace(array $attributes);
public function remove($name);
public function clear();
public function isStarted();
public function registerBag(SessionBagInterface $bag);
public function getBag($name);
public function getMetadataBag();
}
}
namespace Symfony\Component\HttpFoundation\Session
{
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageInterface;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
class Session implements SessionInterface, \IteratorAggregate, \Countable
{
protected $storage;
private $flashName;
private $attributeName;
public function __construct(SessionStorageInterface $storage = null, AttributeBagInterface $attributes = null, FlashBagInterface $flashes = null)
{
$this->storage = $storage ?: new NativeSessionStorage();
$attributes = $attributes ?: new AttributeBag();
$this->attributeName = $attributes->getName();
$this->registerBag($attributes);
$flashes = $flashes ?: new FlashBag();
$this->flashName = $flashes->getName();
$this->registerBag($flashes);
}
public function start()
{
return $this->storage->start();
}
public function has($name)
{
return $this->storage->getBag($this->attributeName)->has($name);
}
public function get($name, $default = null)
{
return $this->storage->getBag($this->attributeName)->get($name, $default);
}
public function set($name, $value)
{
$this->storage->getBag($this->attributeName)->set($name, $value);
}
public function all()
{
return $this->storage->getBag($this->attributeName)->all();
}
public function replace(array $attributes)
{
$this->storage->getBag($this->attributeName)->replace($attributes);
}
public function remove($name)
{
return $this->storage->getBag($this->attributeName)->remove($name);
}
public function clear()
{
$this->storage->getBag($this->attributeName)->clear();
}
public function isStarted()
{
return $this->storage->isStarted();
}
public function getIterator()
{
return new \ArrayIterator($this->storage->getBag($this->attributeName)->all());
}
public function count()
{
return count($this->storage->getBag($this->attributeName)->all());
}
public function invalidate($lifetime = null)
{
$this->storage->clear();
return $this->migrate(true, $lifetime);
}
public function migrate($destroy = false, $lifetime = null)
{
return $this->storage->regenerate($destroy, $lifetime);
}
public function save()
{
$this->storage->save();
}
public function getId()
{
return $this->storage->getId();
}
public function setId($id)
{
$this->storage->setId($id);
}
public function getName()
{
return $this->storage->getName();
}
public function setName($name)
{
$this->storage->setName($name);
}
public function getMetadataBag()
{
return $this->storage->getMetadataBag();
}
public function registerBag(SessionBagInterface $bag)
{
$this->storage->registerBag($bag);
}
public function getBag($name)
{
return $this->storage->getBag($name);
}
public function getFlashBag()
{
return $this->getBag($this->flashName);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\SecurityContext;
class GlobalVariables
{
protected $container;
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function getSecurity()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);
if ($this->container->has('security.context')) {
return $this->container->get('security.context');
}
}
public function getUser()
{
if (!$this->container->has('security.token_storage')) {
return;
}
$tokenStorage = $this->container->get('security.token_storage');
if (!$token = $tokenStorage->getToken()) {
return;
}
$user = $token->getUser();
if (!is_object($user)) {
return;
}
return $user;
}
public function getRequest()
{
if ($this->container->has('request_stack')) {
return $this->container->get('request_stack')->getCurrentRequest();
}
}
public function getSession()
{
if ($request = $this->getRequest()) {
return $request->getSession();
}
}
public function getEnvironment()
{
return $this->container->getParameter('kernel.environment');
}
public function getDebug()
{
return (bool) $this->container->getParameter('kernel.debug');
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateReferenceInterface
{
public function all();
public function set($name, $value);
public function get($name);
public function getPath();
public function getLogicalName();
public function __toString();
}
}
namespace Symfony\Component\Templating
{
class TemplateReference implements TemplateReferenceInterface
{
protected $parameters;
public function __construct($name = null, $engine = null)
{
$this->parameters = array('name'=> $name,'engine'=> $engine,
);
}
public function __toString()
{
return $this->getLogicalName();
}
public function set($name, $value)
{
if (array_key_exists($name, $this->parameters)) {
$this->parameters[$name] = $value;
} else {
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
return $this;
}
public function get($name)
{
if (array_key_exists($name, $this->parameters)) {
return $this->parameters[$name];
}
throw new \InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
public function all()
{
return $this->parameters;
}
public function getPath()
{
return $this->parameters['name'];
}
public function getLogicalName()
{
return $this->parameters['name'];
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReference as BaseTemplateReference;
class TemplateReference extends BaseTemplateReference
{
public function __construct($bundle = null, $controller = null, $name = null, $format = null, $engine = null)
{
$this->parameters = array('bundle'=> $bundle,'controller'=> $controller,'name'=> $name,'format'=> $format,'engine'=> $engine,
);
}
public function getPath()
{
$controller = str_replace('\\','/', $this->get('controller'));
$path = (empty($controller) ?'': $controller.'/').$this->get('name').'.'.$this->get('format').'.'.$this->get('engine');
return empty($this->parameters['bundle']) ?'views/'.$path :'@'.$this->get('bundle').'/Resources/views/'.$path;
}
public function getLogicalName()
{
return sprintf('%s:%s:%s.%s.%s', $this->parameters['bundle'], $this->parameters['controller'], $this->parameters['name'], $this->parameters['format'], $this->parameters['engine']);
}
}
}
namespace Symfony\Component\Templating
{
interface TemplateNameParserInterface
{
public function parse($name);
}
}
namespace Symfony\Component\Templating
{
class TemplateNameParser implements TemplateNameParserInterface
{
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
}
$engine = null;
if (false !== $pos = strrpos($name,'.')) {
$engine = substr($name, $pos + 1);
}
return new TemplateReference($name, $engine);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating
{
use Symfony\Component\Templating\TemplateReferenceInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Templating\TemplateNameParser as BaseTemplateNameParser;
class TemplateNameParser extends BaseTemplateNameParser
{
protected $kernel;
protected $cache = array();
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($name)
{
if ($name instanceof TemplateReferenceInterface) {
return $name;
} elseif (isset($this->cache[$name])) {
return $this->cache[$name];
}
$name = str_replace(':/',':', preg_replace('#/{2,}#','/', str_replace('\\','/', $name)));
if (false !== strpos($name,'..')) {
throw new \RuntimeException(sprintf('Template name "%s" contains invalid characters.', $name));
}
if (!preg_match('/^(?:([^:]*):([^:]*):)?(.+)\.([^\.]+)\.([^\.]+)$/', $name, $matches) || $this->isAbsolutePath($name) || 0 === strpos($name,'@')) {
return parent::parse($name);
}
$template = new TemplateReference($matches[1], $matches[2], $matches[3], $matches[4], $matches[5]);
if ($template->get('bundle')) {
try {
$this->kernel->getBundle($template->get('bundle'));
} catch (\Exception $e) {
throw new \InvalidArgumentException(sprintf('Template name "%s" is not valid.', $name), 0, $e);
}
}
return $this->cache[$name] = $template;
}
private function isAbsolutePath($file)
{
return (bool) preg_match('#^(?:/|[a-zA-Z]:)#', $file);
}
}
}
namespace Symfony\Component\Config
{
interface FileLocatorInterface
{
public function locate($name, $currentPath = null, $first = true);
}
}
namespace Symfony\Bundle\FrameworkBundle\Templating\Loader
{
use Symfony\Component\Config\FileLocatorInterface;
use Symfony\Component\Templating\TemplateReferenceInterface;
class TemplateLocator implements FileLocatorInterface
{
protected $locator;
protected $cache;
private $cacheHits = array();
public function __construct(FileLocatorInterface $locator, $cacheDir = null)
{
if (null !== $cacheDir && is_file($cache = $cacheDir.'/templates.php')) {
$this->cache = require $cache;
}
$this->locator = $locator;
}
protected function getCacheKey($template)
{
return $template->getLogicalName();
}
public function locate($template, $currentPath = null, $first = true)
{
if (!$template instanceof TemplateReferenceInterface) {
throw new \InvalidArgumentException('The template must be an instance of TemplateReferenceInterface.');
}
$key = $this->getCacheKey($template);
if (isset($this->cacheHits[$key])) {
return $this->cacheHits[$key];
}
if (isset($this->cache[$key])) {
return $this->cacheHits[$key] = realpath($this->cache[$key]) ?: $this->cache[$key];
}
try {
return $this->cacheHits[$key] = $this->locator->locate($template->getPath(), $currentPath);
} catch (\InvalidArgumentException $e) {
throw new \InvalidArgumentException(sprintf('Unable to find template "%s" : "%s".', $template, $e->getMessage()), 0, $e);
}
}
}
}
namespace Symfony\Component\Routing
{
interface RequestContextAwareInterface
{
public function setContext(RequestContext $context);
public function getContext();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\RequestContextAwareInterface;
interface UrlGeneratorInterface extends RequestContextAwareInterface
{
const ABSOLUTE_URL = 0;
const ABSOLUTE_PATH = 1;
const RELATIVE_PATH = 2;
const NETWORK_PATH = 3;
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH);
}
}
namespace Symfony\Component\Routing\Generator
{
interface ConfigurableRequirementsInterface
{
public function setStrictRequirements($enabled);
public function isStrictRequirements();
}
}
namespace Symfony\Component\Routing\Generator
{
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use Psr\Log\LoggerInterface;
class UrlGenerator implements UrlGeneratorInterface, ConfigurableRequirementsInterface
{
protected $routes;
protected $context;
protected $strictRequirements = true;
protected $logger;
protected $decodedChars = array('%2F'=>'/','%40'=>'@','%3A'=>':','%3B'=>';','%2C'=>',','%3D'=>'=','%2B'=>'+','%21'=>'!','%2A'=>'*','%7C'=>'|',
);
public function __construct(RouteCollection $routes, RequestContext $context, LoggerInterface $logger = null)
{
$this->routes = $routes;
$this->context = $context;
$this->logger = $logger;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function setStrictRequirements($enabled)
{
$this->strictRequirements = null === $enabled ? null : (bool) $enabled;
}
public function isStrictRequirements()
{
return $this->strictRequirements;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
if (null === $route = $this->routes->get($name)) {
throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
}
$compiledRoute = $route->compile();
return $this->doGenerate($compiledRoute->getVariables(), $route->getDefaults(), $route->getRequirements(), $compiledRoute->getTokens(), $parameters, $name, $referenceType, $compiledRoute->getHostTokens(), $route->getSchemes());
}
protected function doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, array $requiredSchemes = array())
{
if (is_bool($referenceType) || is_string($referenceType)) {
@trigger_error('The hardcoded value you are using for the $referenceType argument of the '.__CLASS__.'::generate method is deprecated since version 2.8 and will not be supported anymore in 3.0. Use the constants defined in the UrlGeneratorInterface instead.', E_USER_DEPRECATED);
if (true === $referenceType) {
$referenceType = self::ABSOLUTE_URL;
} elseif (false === $referenceType) {
$referenceType = self::ABSOLUTE_PATH;
} elseif ('relative'=== $referenceType) {
$referenceType = self::RELATIVE_PATH;
} elseif ('network'=== $referenceType) {
$referenceType = self::NETWORK_PATH;
}
}
$variables = array_flip($variables);
$mergedParams = array_replace($defaults, $this->context->getParameters(), $parameters);
if ($diff = array_diff_key($variables, $mergedParams)) {
throw new MissingMandatoryParametersException(sprintf('Some mandatory parameters are missing ("%s") to generate a URL for route "%s".', implode('", "', array_keys($diff)), $name));
}
$url ='';
$optional = true;
foreach ($tokens as $token) {
if ('variable'=== $token[0]) {
if (!$optional || !array_key_exists($token[3], $defaults) || null !== $mergedParams[$token[3]] && (string) $mergedParams[$token[3]] !== (string) $defaults[$token[3]]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#', $mergedParams[$token[3]])) {
$message = sprintf('Parameter "%s" for route "%s" must match "%s" ("%s" given) to generate a corresponding URL.', $token[3], $name, $token[2], $mergedParams[$token[3]]);
if ($this->strictRequirements) {
throw new InvalidParameterException($message);
}
if ($this->logger) {
$this->logger->error($message);
}
return;
}
$url = $token[1].$mergedParams[$token[3]].$url;
$optional = false;
}
} else {
$url = $token[1].$url;
$optional = false;
}
}
if (''=== $url) {
$url ='/';
}
$url = strtr(rawurlencode($url), $this->decodedChars);
$url = strtr($url, array('/../'=>'/%2E%2E/','/./'=>'/%2E/'));
if ('/..'=== substr($url, -3)) {
$url = substr($url, 0, -2).'%2E%2E';
} elseif ('/.'=== substr($url, -2)) {
$url = substr($url, 0, -1).'%2E';
}
$schemeAuthority ='';
if ($host = $this->context->getHost()) {
$scheme = $this->context->getScheme();
if ($requiredSchemes) {
if (!in_array($scheme, $requiredSchemes, true)) {
$referenceType = self::ABSOLUTE_URL;
$scheme = current($requiredSchemes);
}
} elseif (isset($requirements['_scheme']) && ($req = strtolower($requirements['_scheme'])) && $scheme !== $req) {
$referenceType = self::ABSOLUTE_URL;
$scheme = $req;
}
if ($hostTokens) {
$routeHost ='';
foreach ($hostTokens as $token) {
if ('variable'=== $token[0]) {
if (null !== $this->strictRequirements && !preg_match('#^'.$token[2].'$#i', $mergedParams[$token[3]])) {
$message = sprintf('Parameter "%s" for route "%s" must match "%s" ("%s" given) to generate a corresponding URL.', $token[3], $name, $token[2], $mergedParams[$token[3]]);
if ($this->strictRequirements) {
throw new InvalidParameterException($message);
}
if ($this->logger) {
$this->logger->error($message);
}
return;
}
$routeHost = $token[1].$mergedParams[$token[3]].$routeHost;
} else {
$routeHost = $token[1].$routeHost;
}
}
if ($routeHost !== $host) {
$host = $routeHost;
if (self::ABSOLUTE_URL !== $referenceType) {
$referenceType = self::NETWORK_PATH;
}
}
}
if (self::ABSOLUTE_URL === $referenceType || self::NETWORK_PATH === $referenceType) {
$port ='';
if ('http'=== $scheme && 80 != $this->context->getHttpPort()) {
$port =':'.$this->context->getHttpPort();
} elseif ('https'=== $scheme && 443 != $this->context->getHttpsPort()) {
$port =':'.$this->context->getHttpsPort();
}
$schemeAuthority = self::NETWORK_PATH === $referenceType ?'//': "$scheme://";
$schemeAuthority .= $host.$port;
}
}
if (self::RELATIVE_PATH === $referenceType) {
$url = self::getRelativePath($this->context->getPathInfo(), $url);
} else {
$url = $schemeAuthority.$this->context->getBaseUrl().$url;
}
$extra = array_udiff_assoc(array_diff_key($parameters, $variables), $defaults, function ($a, $b) {
return $a == $b ? 0 : 1;
});
if ($extra && $query = http_build_query($extra,'','&')) {
$url .='?'.strtr($query, array('%2F'=>'/'));
}
return $url;
}
public static function getRelativePath($basePath, $targetPath)
{
if ($basePath === $targetPath) {
return'';
}
$sourceDirs = explode('/', isset($basePath[0]) &&'/'=== $basePath[0] ? substr($basePath, 1) : $basePath);
$targetDirs = explode('/', isset($targetPath[0]) &&'/'=== $targetPath[0] ? substr($targetPath, 1) : $targetPath);
array_pop($sourceDirs);
$targetFile = array_pop($targetDirs);
foreach ($sourceDirs as $i => $dir) {
if (isset($targetDirs[$i]) && $dir === $targetDirs[$i]) {
unset($sourceDirs[$i], $targetDirs[$i]);
} else {
break;
}
}
$targetDirs[] = $targetFile;
$path = str_repeat('../', count($sourceDirs)).implode('/', $targetDirs);
return''=== $path ||'/'=== $path[0]
|| false !== ($colonPos = strpos($path,':')) && ($colonPos < ($slashPos = strpos($path,'/')) || false === $slashPos)
? "./$path" : $path;
}
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\HttpFoundation\Request;
class RequestContext
{
private $baseUrl;
private $pathInfo;
private $method;
private $host;
private $scheme;
private $httpPort;
private $httpsPort;
private $queryString;
private $parameters = array();
public function __construct($baseUrl ='', $method ='GET', $host ='localhost', $scheme ='http', $httpPort = 80, $httpsPort = 443, $path ='/', $queryString ='')
{
$this->setBaseUrl($baseUrl);
$this->setMethod($method);
$this->setHost($host);
$this->setScheme($scheme);
$this->setHttpPort($httpPort);
$this->setHttpsPort($httpsPort);
$this->setPathInfo($path);
$this->setQueryString($queryString);
}
public function fromRequest(Request $request)
{
$this->setBaseUrl($request->getBaseUrl());
$this->setPathInfo($request->getPathInfo());
$this->setMethod($request->getMethod());
$this->setHost($request->getHost());
$this->setScheme($request->getScheme());
$this->setHttpPort($request->isSecure() ? $this->httpPort : $request->getPort());
$this->setHttpsPort($request->isSecure() ? $request->getPort() : $this->httpsPort);
$this->setQueryString($request->server->get('QUERY_STRING',''));
return $this;
}
public function getBaseUrl()
{
return $this->baseUrl;
}
public function setBaseUrl($baseUrl)
{
$this->baseUrl = $baseUrl;
return $this;
}
public function getPathInfo()
{
return $this->pathInfo;
}
public function setPathInfo($pathInfo)
{
$this->pathInfo = $pathInfo;
return $this;
}
public function getMethod()
{
return $this->method;
}
public function setMethod($method)
{
$this->method = strtoupper($method);
return $this;
}
public function getHost()
{
return $this->host;
}
public function setHost($host)
{
$this->host = strtolower($host);
return $this;
}
public function getScheme()
{
return $this->scheme;
}
public function setScheme($scheme)
{
$this->scheme = strtolower($scheme);
return $this;
}
public function getHttpPort()
{
return $this->httpPort;
}
public function setHttpPort($httpPort)
{
$this->httpPort = (int) $httpPort;
return $this;
}
public function getHttpsPort()
{
return $this->httpsPort;
}
public function setHttpsPort($httpsPort)
{
$this->httpsPort = (int) $httpsPort;
return $this;
}
public function getQueryString()
{
return $this->queryString;
}
public function setQueryString($queryString)
{
$this->queryString = (string) $queryString;
return $this;
}
public function getParameters()
{
return $this->parameters;
}
public function setParameters(array $parameters)
{
$this->parameters = $parameters;
return $this;
}
public function getParameter($name)
{
return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
}
public function hasParameter($name)
{
return array_key_exists($name, $this->parameters);
}
public function setParameter($name, $parameter)
{
$this->parameters[$name] = $parameter;
return $this;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface UrlMatcherInterface extends RequestContextAwareInterface
{
public function match($pathinfo);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
interface RouterInterface extends UrlMatcherInterface, UrlGeneratorInterface
{
public function getRouteCollection();
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
interface RequestMatcherInterface
{
public function matchRequest(Request $request);
}
}
namespace Symfony\Component\Routing
{
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\ConfigCacheInterface;
use Symfony\Component\Config\ConfigCacheFactoryInterface;
use Symfony\Component\Config\ConfigCacheFactory;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\ConfigurableRequirementsInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumperInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\Dumper\MatcherDumperInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class Router implements RouterInterface, RequestMatcherInterface
{
protected $matcher;
protected $generator;
protected $context;
protected $loader;
protected $collection;
protected $resource;
protected $options = array();
protected $logger;
private $configCacheFactory;
private $expressionLanguageProviders = array();
public function __construct(LoaderInterface $loader, $resource, array $options = array(), RequestContext $context = null, LoggerInterface $logger = null)
{
$this->loader = $loader;
$this->resource = $resource;
$this->logger = $logger;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function setOptions(array $options)
{
$this->options = array('cache_dir'=> null,'debug'=> false,'generator_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_base_class'=>'Symfony\\Component\\Routing\\Generator\\UrlGenerator','generator_dumper_class'=>'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper','generator_cache_class'=>'ProjectUrlGenerator','matcher_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_base_class'=>'Symfony\\Component\\Routing\\Matcher\\UrlMatcher','matcher_dumper_class'=>'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper','matcher_cache_class'=>'ProjectUrlMatcher','resource_type'=> null,'strict_requirements'=> true,
);
$invalid = array();
foreach ($options as $key => $value) {
if (array_key_exists($key, $this->options)) {
$this->options[$key] = $value;
} else {
$invalid[] = $key;
}
}
if ($invalid) {
throw new \InvalidArgumentException(sprintf('The Router does not support the following options: "%s".', implode('", "', $invalid)));
}
}
public function setOption($key, $value)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
$this->options[$key] = $value;
}
public function getOption($key)
{
if (!array_key_exists($key, $this->options)) {
throw new \InvalidArgumentException(sprintf('The Router does not support the "%s" option.', $key));
}
return $this->options[$key];
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->loader->load($this->resource, $this->options['resource_type']);
}
return $this->collection;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
if (null !== $this->matcher) {
$this->getMatcher()->setContext($context);
}
if (null !== $this->generator) {
$this->getGenerator()->setContext($context);
}
}
public function getContext()
{
return $this->context;
}
public function setConfigCacheFactory(ConfigCacheFactoryInterface $configCacheFactory)
{
$this->configCacheFactory = $configCacheFactory;
}
public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
{
return $this->getGenerator()->generate($name, $parameters, $referenceType);
}
public function match($pathinfo)
{
return $this->getMatcher()->match($pathinfo);
}
public function matchRequest(Request $request)
{
$matcher = $this->getMatcher();
if (!$matcher instanceof RequestMatcherInterface) {
return $matcher->match($request->getPathInfo());
}
return $matcher->matchRequest($request);
}
public function getMatcher()
{
if (null !== $this->matcher) {
return $this->matcher;
}
if (null === $this->options['cache_dir'] || null === $this->options['matcher_cache_class']) {
$this->matcher = new $this->options['matcher_class']($this->getRouteCollection(), $this->context);
if (method_exists($this->matcher,'addExpressionLanguageProvider')) {
foreach ($this->expressionLanguageProviders as $provider) {
$this->matcher->addExpressionLanguageProvider($provider);
}
}
return $this->matcher;
}
$class = $this->options['matcher_cache_class'];
$baseClass = $this->options['matcher_base_class'];
$expressionLanguageProviders = $this->expressionLanguageProviders;
$that = $this;
$cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$class.'.php',
function (ConfigCacheInterface $cache) use ($that, $class, $baseClass, $expressionLanguageProviders) {
$dumper = $that->getMatcherDumperInstance();
if (method_exists($dumper,'addExpressionLanguageProvider')) {
foreach ($expressionLanguageProviders as $provider) {
$dumper->addExpressionLanguageProvider($provider);
}
}
$options = array('class'=> $class,'base_class'=> $baseClass,
);
$cache->write($dumper->dump($options), $that->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
return $this->matcher = new $class($this->context);
}
public function getGenerator()
{
if (null !== $this->generator) {
return $this->generator;
}
if (null === $this->options['cache_dir'] || null === $this->options['generator_cache_class']) {
$this->generator = new $this->options['generator_class']($this->getRouteCollection(), $this->context, $this->logger);
} else {
$class = $this->options['generator_cache_class'];
$baseClass = $this->options['generator_base_class'];
$that = $this; $cache = $this->getConfigCacheFactory()->cache($this->options['cache_dir'].'/'.$class.'.php',
function (ConfigCacheInterface $cache) use ($that, $class, $baseClass) {
$dumper = $that->getGeneratorDumperInstance();
$options = array('class'=> $class,'base_class'=> $baseClass,
);
$cache->write($dumper->dump($options), $that->getRouteCollection()->getResources());
}
);
require_once $cache->getPath();
$this->generator = new $class($this->context, $this->logger);
}
if ($this->generator instanceof ConfigurableRequirementsInterface) {
$this->generator->setStrictRequirements($this->options['strict_requirements']);
}
return $this->generator;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
public function getGeneratorDumperInstance()
{
return new $this->options['generator_dumper_class']($this->getRouteCollection());
}
public function getMatcherDumperInstance()
{
return new $this->options['matcher_dumper_class']($this->getRouteCollection());
}
private function getConfigCacheFactory()
{
if (null === $this->configCacheFactory) {
$this->configCacheFactory = new ConfigCacheFactory($this->options['debug']);
}
return $this->configCacheFactory;
}
}
}
namespace Symfony\Component\Routing\Matcher
{
interface RedirectableUrlMatcherInterface
{
public function redirect($path, $route, $scheme = null);
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;
class UrlMatcher implements UrlMatcherInterface, RequestMatcherInterface
{
const REQUIREMENT_MATCH = 0;
const REQUIREMENT_MISMATCH = 1;
const ROUTE_MATCH = 2;
protected $context;
protected $allow = array();
protected $routes;
protected $request;
protected $expressionLanguage;
protected $expressionLanguageProviders = array();
public function __construct(RouteCollection $routes, RequestContext $context)
{
$this->routes = $routes;
$this->context = $context;
}
public function setContext(RequestContext $context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function match($pathinfo)
{
$this->allow = array();
if ($ret = $this->matchCollection(rawurldecode($pathinfo), $this->routes)) {
return $ret;
}
throw 0 < count($this->allow)
? new MethodNotAllowedException(array_unique($this->allow))
: new ResourceNotFoundException(sprintf('No routes found for "%s".', $pathinfo));
}
public function matchRequest(Request $request)
{
$this->request = $request;
$ret = $this->match($request->getPathInfo());
$this->request = null;
return $ret;
}
public function addExpressionLanguageProvider(ExpressionFunctionProviderInterface $provider)
{
$this->expressionLanguageProviders[] = $provider;
}
protected function matchCollection($pathinfo, RouteCollection $routes)
{
foreach ($routes as $name => $route) {
$compiledRoute = $route->compile();
if (''!== $compiledRoute->getStaticPrefix() && 0 !== strpos($pathinfo, $compiledRoute->getStaticPrefix())) {
continue;
}
if (!preg_match($compiledRoute->getRegex(), $pathinfo, $matches)) {
continue;
}
$hostMatches = array();
if ($compiledRoute->getHostRegex() && !preg_match($compiledRoute->getHostRegex(), $this->context->getHost(), $hostMatches)) {
continue;
}
if ($requiredMethods = $route->getMethods()) {
if ('HEAD'=== $method = $this->context->getMethod()) {
$method ='GET';
}
if (!in_array($method, $requiredMethods)) {
$this->allow = array_merge($this->allow, $requiredMethods);
continue;
}
}
$status = $this->handleRouteRequirements($pathinfo, $name, $route);
if (self::ROUTE_MATCH === $status[0]) {
return $status[1];
}
if (self::REQUIREMENT_MISMATCH === $status[0]) {
continue;
}
return $this->getAttributes($route, $name, array_replace($matches, $hostMatches));
}
}
protected function getAttributes(Route $route, $name, array $attributes)
{
$attributes['_route'] = $name;
return $this->mergeDefaults($attributes, $route->getDefaults());
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request ?: $this->createRequest($pathinfo)))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$status = $route->getSchemes() && !$route->hasScheme($scheme) ? self::REQUIREMENT_MISMATCH : self::REQUIREMENT_MATCH;
return array($status, null);
}
protected function mergeDefaults($params, $defaults)
{
foreach ($params as $key => $value) {
if (!is_int($key)) {
$defaults[$key] = $value;
}
}
return $defaults;
}
protected function getExpressionLanguage()
{
if (null === $this->expressionLanguage) {
if (!class_exists('Symfony\Component\ExpressionLanguage\ExpressionLanguage')) {
throw new \RuntimeException('Unable to use expressions as the Symfony ExpressionLanguage component is not installed.');
}
$this->expressionLanguage = new ExpressionLanguage(null, $this->expressionLanguageProviders);
}
return $this->expressionLanguage;
}
protected function createRequest($pathinfo)
{
if (!class_exists('Symfony\Component\HttpFoundation\Request')) {
return null;
}
return Request::create($this->context->getScheme().'://'.$this->context->getHost().$this->context->getBaseUrl().$pathinfo, $this->context->getMethod(), $this->context->getParameters(), array(), array(), array('SCRIPT_FILENAME'=> $this->context->getBaseUrl(),'SCRIPT_NAME'=> $this->context->getBaseUrl(),
));
}
}
}
namespace Symfony\Component\Routing\Matcher
{
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Route;
abstract class RedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
public function match($pathinfo)
{
try {
$parameters = parent::match($pathinfo);
} catch (ResourceNotFoundException $e) {
if ('/'=== substr($pathinfo, -1) || !in_array($this->context->getMethod(), array('HEAD','GET'))) {
throw $e;
}
try {
parent::match($pathinfo.'/');
return $this->redirect($pathinfo.'/', null);
} catch (ResourceNotFoundException $e2) {
throw $e;
}
}
return $parameters;
}
protected function handleRouteRequirements($pathinfo, $name, Route $route)
{
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request ?: $this->createRequest($pathinfo)))) {
return array(self::REQUIREMENT_MISMATCH, null);
}
$scheme = $this->context->getScheme();
$schemes = $route->getSchemes();
if ($schemes && !$route->hasScheme($scheme)) {
return array(self::ROUTE_MATCH, $this->redirect($pathinfo, $name, current($schemes)));
}
return array(self::REQUIREMENT_MATCH, null);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher as BaseMatcher;
class RedirectableUrlMatcher extends BaseMatcher
{
public function redirect($path, $route, $scheme = null)
{
return array('_controller'=>'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction','path'=> $path,'permanent'=> true,'scheme'=> $scheme,'httpPort'=> $this->context->getHttpPort(),'httpsPort'=> $this->context->getHttpsPort(),'_route'=> $route,
);
}
}
}
namespace Symfony\Component\HttpKernel\CacheWarmer
{
interface WarmableInterface
{
public function warmUp($cacheDir);
}
}
namespace Symfony\Bundle\FrameworkBundle\Routing
{
use Symfony\Component\Routing\Router as BaseRouter;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
class Router extends BaseRouter implements WarmableInterface
{
private $container;
public function __construct(ContainerInterface $container, $resource, array $options = array(), RequestContext $context = null)
{
$this->container = $container;
$this->resource = $resource;
$this->context = $context ?: new RequestContext();
$this->setOptions($options);
}
public function getRouteCollection()
{
if (null === $this->collection) {
$this->collection = $this->container->get('routing.loader')->load($this->resource, $this->options['resource_type']);
$this->resolveParameters($this->collection);
}
return $this->collection;
}
public function warmUp($cacheDir)
{
$currentDir = $this->getOption('cache_dir');
$this->setOption('cache_dir', $cacheDir);
$this->getMatcher();
$this->getGenerator();
$this->setOption('cache_dir', $currentDir);
}
private function resolveParameters(RouteCollection $collection)
{
foreach ($collection as $route) {
foreach ($route->getDefaults() as $name => $value) {
$route->setDefault($name, $this->resolve($value));
}
foreach ($route->getRequirements() as $name => $value) {
if ('_scheme'=== $name ||'_method'=== $name) {
continue; }
$route->setRequirement($name, $this->resolve($value));
}
$route->setPath($this->resolve($route->getPath()));
$route->setHost($this->resolve($route->getHost()));
$schemes = array();
foreach ($route->getSchemes() as $scheme) {
$schemes = array_merge($schemes, explode('|', $this->resolve($scheme)));
}
$route->setSchemes($schemes);
$methods = array();
foreach ($route->getMethods() as $method) {
$methods = array_merge($methods, explode('|', $this->resolve($method)));
}
$route->setMethods($methods);
$route->setCondition($this->resolve($route->getCondition()));
}
}
private function resolve($value)
{
if (is_array($value)) {
foreach ($value as $key => $val) {
$value[$key] = $this->resolve($val);
}
return $value;
}
if (!is_string($value)) {
return $value;
}
$container = $this->container;
$escapedValue = preg_replace_callback('/%%|%([^%\s]++)%/', function ($match) use ($container, $value) {
if (!isset($match[1])) {
return'%%';
}
$resolved = $container->getParameter($match[1]);
if (is_string($resolved) || is_numeric($resolved)) {
return (string) $resolved;
}
throw new RuntimeException(sprintf('The container parameter "%s", used in the route configuration value "%s", '.'must be a string or numeric, but it is of type %s.',
$match[1],
$value,
gettype($resolved)
)
);
}, $value);
return str_replace('%%','%', $escapedValue);
}
}
}
namespace Symfony\Component\Config
{
class FileLocator implements FileLocatorInterface
{
protected $paths;
public function __construct($paths = array())
{
$this->paths = (array) $paths;
}
public function locate($name, $currentPath = null, $first = true)
{
if (''== $name) {
throw new \InvalidArgumentException('An empty file name is not valid to be located.');
}
if ($this->isAbsolutePath($name)) {
if (!file_exists($name)) {
throw new \InvalidArgumentException(sprintf('The file "%s" does not exist.', $name));
}
return $name;
}
$paths = $this->paths;
if (null !== $currentPath) {
array_unshift($paths, $currentPath);
}
$paths = array_unique($paths);
$filepaths = array();
foreach ($paths as $path) {
if (@file_exists($file = $path.DIRECTORY_SEPARATOR.$name)) {
if (true === $first) {
return $file;
}
$filepaths[] = $file;
}
}
if (!$filepaths) {
throw new \InvalidArgumentException(sprintf('The file "%s" does not exist (in: %s).', $name, implode(', ', $paths)));
}
return $filepaths;
}
private function isAbsolutePath($file)
{
if ($file[0] ==='/'|| $file[0] ==='\\'|| (strlen($file) > 3 && ctype_alpha($file[0])
&& $file[1] ===':'&& ($file[2] ==='\\'|| $file[2] ==='/')
)
|| null !== parse_url($file, PHP_URL_SCHEME)
) {
return true;
}
return false;
}
}
}
namespace Symfony\Component\EventDispatcher
{
class Event
{
private $propagationStopped = false;
private $dispatcher;
private $name;
public function isPropagationStopped()
{
return $this->propagationStopped;
}
public function stopPropagation()
{
$this->propagationStopped = true;
}
public function setDispatcher(EventDispatcherInterface $dispatcher)
{
$this->dispatcher = $dispatcher;
}
public function getDispatcher()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 2.4 and will be removed in 3.0. The event dispatcher instance can be received in the listener call instead.', E_USER_DEPRECATED);
return $this->dispatcher;
}
public function getName()
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 2.4 and will be removed in 3.0. The event name can be received in the listener call instead.', E_USER_DEPRECATED);
return $this->name;
}
public function setName($name)
{
$this->name = $name;
}
}
}
namespace Symfony\Component\EventDispatcher
{
interface EventDispatcherInterface
{
public function dispatch($eventName, Event $event = null);
public function addListener($eventName, $listener, $priority = 0);
public function addSubscriber(EventSubscriberInterface $subscriber);
public function removeListener($eventName, $listener);
public function removeSubscriber(EventSubscriberInterface $subscriber);
public function getListeners($eventName = null);
public function hasListeners($eventName = null);
}
}
namespace Symfony\Component\EventDispatcher
{
class EventDispatcher implements EventDispatcherInterface
{
private $listeners = array();
private $sorted = array();
public function dispatch($eventName, Event $event = null)
{
if (null === $event) {
$event = new Event();
}
$event->setDispatcher($this);
$event->setName($eventName);
if ($listeners = $this->getListeners($eventName)) {
$this->doDispatch($listeners, $eventName, $event);
}
return $event;
}
public function getListeners($eventName = null)
{
if (null !== $eventName) {
if (!isset($this->listeners[$eventName])) {
return array();
}
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
return $this->sorted[$eventName];
}
foreach ($this->listeners as $eventName => $eventListeners) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
}
return array_filter($this->sorted);
}
public function getListenerPriority($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== in_array($listener, $listeners, true)) {
return $priority;
}
}
}
public function hasListeners($eventName = null)
{
return (bool) $this->getListeners($eventName);
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->listeners[$eventName][$priority][] = $listener;
unset($this->sorted[$eventName]);
}
public function removeListener($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== ($key = array_search($listener, $listeners, true))) {
unset($this->listeners[$eventName][$priority][$key], $this->sorted[$eventName]);
}
}
}
public function addSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->addListener($eventName, array($subscriber, $params));
} elseif (is_string($params[0])) {
$this->addListener($eventName, array($subscriber, $params[0]), isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->addListener($eventName, array($subscriber, $listener[0]), isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function removeSubscriber(EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_array($params) && is_array($params[0])) {
foreach ($params as $listener) {
$this->removeListener($eventName, array($subscriber, $listener[0]));
}
} else {
$this->removeListener($eventName, array($subscriber, is_string($params) ? $params : $params[0]));
}
}
}
protected function doDispatch($listeners, $eventName, Event $event)
{
foreach ($listeners as $listener) {
if ($event->isPropagationStopped()) {
break;
}
call_user_func($listener, $event, $eventName, $this);
}
}
private function sortListeners($eventName)
{
krsort($this->listeners[$eventName]);
$this->sorted[$eventName] = call_user_func_array('array_merge', $this->listeners[$eventName]);
}
}
}
namespace Symfony\Component\EventDispatcher
{
use Symfony\Component\DependencyInjection\ContainerInterface;
class ContainerAwareEventDispatcher extends EventDispatcher
{
private $container;
private $listenerIds = array();
private $listeners = array();
public function __construct(ContainerInterface $container)
{
$this->container = $container;
}
public function addListenerService($eventName, $callback, $priority = 0)
{
if (!is_array($callback) || 2 !== count($callback)) {
throw new \InvalidArgumentException('Expected an array("service", "method") argument');
}
$this->listenerIds[$eventName][] = array($callback[0], $callback[1], $priority);
}
public function removeListener($eventName, $listener)
{
$this->lazyLoad($eventName);
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $i => $args) {
list($serviceId, $method, $priority) = $args;
$key = $serviceId.'.'.$method;
if (isset($this->listeners[$eventName][$key]) && $listener === array($this->listeners[$eventName][$key], $method)) {
unset($this->listeners[$eventName][$key]);
if (empty($this->listeners[$eventName])) {
unset($this->listeners[$eventName]);
}
unset($this->listenerIds[$eventName][$i]);
if (empty($this->listenerIds[$eventName])) {
unset($this->listenerIds[$eventName]);
}
}
}
}
parent::removeListener($eventName, $listener);
}
public function hasListeners($eventName = null)
{
if (null === $eventName) {
return $this->listenerIds || $this->listeners || parent::hasListeners();
}
if (isset($this->listenerIds[$eventName])) {
return true;
}
return parent::hasListeners($eventName);
}
public function getListeners($eventName = null)
{
if (null === $eventName) {
foreach ($this->listenerIds as $serviceEventName => $args) {
$this->lazyLoad($serviceEventName);
}
} else {
$this->lazyLoad($eventName);
}
return parent::getListeners($eventName);
}
public function getListenerPriority($eventName, $listener)
{
$this->lazyLoad($eventName);
return parent::getListenerPriority($eventName, $listener);
}
public function addSubscriberService($serviceId, $class)
{
foreach ($class::getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->listenerIds[$eventName][] = array($serviceId, $params, 0);
} elseif (is_string($params[0])) {
$this->listenerIds[$eventName][] = array($serviceId, $params[0], isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->listenerIds[$eventName][] = array($serviceId, $listener[0], isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function getContainer()
{
return $this->container;
}
protected function lazyLoad($eventName)
{
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $args) {
list($serviceId, $method, $priority) = $args;
$listener = $this->container->get($serviceId);
$key = $serviceId.'.'.$method;
if (!isset($this->listeners[$eventName][$key])) {
$this->addListener($eventName, array($listener, $method), $priority);
} elseif ($listener !== $this->listeners[$eventName][$key]) {
parent::removeListener($eventName, array($this->listeners[$eventName][$key], $method));
$this->addListener($eventName, array($listener, $method), $priority);
}
$this->listeners[$eventName][$key] = $listener;
}
}
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class ResponseListener implements EventSubscriberInterface
{
private $charset;
public function __construct($charset)
{
$this->charset = $charset;
}
public function onKernelResponse(FilterResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
$response = $event->getResponse();
if (null === $response->getCharset()) {
$response->setCharset($this->charset);
}
$response->prepare($event->getRequest());
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::RESPONSE =>'onKernelResponse',
);
}
}
}
namespace Symfony\Component\HttpKernel\EventListener
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\Routing\Matcher\RequestMatcherInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RequestContextAwareInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
class RouterListener implements EventSubscriberInterface
{
private $matcher;
private $context;
private $logger;
private $request;
private $requestStack;
public function __construct($matcher, $requestStack = null, $context = null, $logger = null)
{
if ($requestStack instanceof RequestContext || $context instanceof LoggerInterface || $logger instanceof RequestStack) {
$tmp = $requestStack;
$requestStack = $logger;
$logger = $context;
$context = $tmp;
@trigger_error('The '.__METHOD__.' method now requires a RequestStack to be given as second argument as '.__CLASS__.'::setRequest method will not be supported anymore in 3.0.', E_USER_DEPRECATED);
} elseif (!$requestStack instanceof RequestStack) {
@trigger_error('The '.__METHOD__.' method now requires a RequestStack instance as '.__CLASS__.'::setRequest method will not be supported anymore in 3.0.', E_USER_DEPRECATED);
}
if (null !== $requestStack && !$requestStack instanceof RequestStack) {
throw new \InvalidArgumentException('RequestStack instance expected.');
}
if (null !== $context && !$context instanceof RequestContext) {
throw new \InvalidArgumentException('RequestContext instance expected.');
}
if (null !== $logger && !$logger instanceof LoggerInterface) {
throw new \InvalidArgumentException('Logger must implement LoggerInterface.');
}
if (!$matcher instanceof UrlMatcherInterface && !$matcher instanceof RequestMatcherInterface) {
throw new \InvalidArgumentException('Matcher must either implement UrlMatcherInterface or RequestMatcherInterface.');
}
if (null === $context && !$matcher instanceof RequestContextAwareInterface) {
throw new \InvalidArgumentException('You must either pass a RequestContext or the matcher must implement RequestContextAwareInterface.');
}
$this->matcher = $matcher;
$this->context = $context ?: $matcher->getContext();
$this->requestStack = $requestStack;
$this->logger = $logger;
}
public function setRequest(Request $request = null)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 2.4 and will be made private in 3.0.', E_USER_DEPRECATED);
$this->setCurrentRequest($request);
}
private function setCurrentRequest(Request $request = null)
{
if (null !== $request && $this->request !== $request) {
$this->context->fromRequest($request);
}
$this->request = $request;
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
if (null === $this->requestStack) {
return; }
$this->setCurrentRequest($this->requestStack->getParentRequest());
}
public function onKernelRequest(GetResponseEvent $event)
{
$request = $event->getRequest();
if (null !== $this->requestStack) {
$this->setCurrentRequest($request);
}
if ($request->attributes->has('_controller')) {
return;
}
try {
if ($this->matcher instanceof RequestMatcherInterface) {
$parameters = $this->matcher->matchRequest($request);
} else {
$parameters = $this->matcher->match($request->getPathInfo());
}
if (null !== $this->logger) {
$this->logger->info(sprintf('Matched route "%s".', isset($parameters['_route']) ? $parameters['_route'] :'n/a'), array('route_parameters'=> $parameters,'request_uri'=> $request->getUri(),
));
}
$request->attributes->add($parameters);
unset($parameters['_route'], $parameters['_controller']);
$request->attributes->set('_route_params', $parameters);
} catch (ResourceNotFoundException $e) {
$message = sprintf('No route found for "%s %s"', $request->getMethod(), $request->getPathInfo());
if ($referer = $request->headers->get('referer')) {
$message .= sprintf(' (from "%s")', $referer);
}
throw new NotFoundHttpException($message, $e);
} catch (MethodNotAllowedException $e) {
$message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getPathInfo(), implode(', ', $e->getAllowedMethods()));
throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array(array('onKernelRequest', 32)),
KernelEvents::FINISH_REQUEST => array(array('onKernelFinishRequest', 0)),
);
}
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Symfony\Component\HttpFoundation\Request;
interface ControllerResolverInterface
{
public function getController(Request $request);
public function getArguments(Request $request, $controller);
}
}
namespace Symfony\Component\HttpKernel\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
class ControllerResolver implements ControllerResolverInterface
{
private $logger;
private $supportsVariadic;
private $supportsScalarTypes;
public function __construct(LoggerInterface $logger = null)
{
$this->logger = $logger;
$this->supportsVariadic = method_exists('ReflectionParameter','isVariadic');
$this->supportsScalarTypes = method_exists('ReflectionParameter','getType');
}
public function getController(Request $request)
{
if (!$controller = $request->attributes->get('_controller')) {
if (null !== $this->logger) {
$this->logger->warning('Unable to look for the controller as the "_controller" parameter is missing.');
}
return false;
}
if (is_array($controller)) {
return $controller;
}
if (is_object($controller)) {
if (method_exists($controller,'__invoke')) {
return $controller;
}
throw new \InvalidArgumentException(sprintf('Controller "%s" for URI "%s" is not callable.', get_class($controller), $request->getPathInfo()));
}
if (false === strpos($controller,':')) {
if (method_exists($controller,'__invoke')) {
return $this->instantiateController($controller);
} elseif (function_exists($controller)) {
return $controller;
}
}
$callable = $this->createController($controller);
if (!is_callable($callable)) {
throw new \InvalidArgumentException(sprintf('Controller "%s" for URI "%s" is not callable.', $controller, $request->getPathInfo()));
}
return $callable;
}
public function getArguments(Request $request, $controller)
{
if (is_array($controller)) {
$r = new \ReflectionMethod($controller[0], $controller[1]);
} elseif (is_object($controller) && !$controller instanceof \Closure) {
$r = new \ReflectionObject($controller);
$r = $r->getMethod('__invoke');
} else {
$r = new \ReflectionFunction($controller);
}
return $this->doGetArguments($request, $controller, $r->getParameters());
}
protected function doGetArguments(Request $request, $controller, array $parameters)
{
$attributes = $request->attributes->all();
$arguments = array();
foreach ($parameters as $param) {
if (array_key_exists($param->name, $attributes)) {
if ($this->supportsVariadic && $param->isVariadic() && is_array($attributes[$param->name])) {
$arguments = array_merge($arguments, array_values($attributes[$param->name]));
} else {
$arguments[] = $attributes[$param->name];
}
} elseif ($param->getClass() && $param->getClass()->isInstance($request)) {
$arguments[] = $request;
} elseif ($param->isDefaultValueAvailable()) {
$arguments[] = $param->getDefaultValue();
} elseif ($this->supportsScalarTypes && $param->hasType() && $param->allowsNull()) {
$arguments[] = null;
} else {
if (is_array($controller)) {
$repr = sprintf('%s::%s()', get_class($controller[0]), $controller[1]);
} elseif (is_object($controller)) {
$repr = get_class($controller);
} else {
$repr = $controller;
}
throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument (because there is no default value or because there is a non optional argument after this one).', $repr, $param->name));
}
}
return $arguments;
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
throw new \InvalidArgumentException(sprintf('Unable to find controller "%s".', $controller));
}
list($class, $method) = explode('::', $controller, 2);
if (!class_exists($class)) {
throw new \InvalidArgumentException(sprintf('Class "%s" does not exist.', $class));
}
return array($this->instantiateController($class), $method);
}
protected function instantiateController($class)
{
return new $class();
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;
class KernelEvent extends Event
{
private $kernel;
private $request;
private $requestType;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType)
{
$this->kernel = $kernel;
$this->request = $request;
$this->requestType = $requestType;
}
public function getKernel()
{
return $this->kernel;
}
public function getRequest()
{
return $this->request;
}
public function getRequestType()
{
return $this->requestType;
}
public function isMasterRequest()
{
return HttpKernelInterface::MASTER_REQUEST === $this->requestType;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class FilterControllerEvent extends KernelEvent
{
private $controller;
public function __construct(HttpKernelInterface $kernel, $controller, Request $request, $requestType)
{
parent::__construct($kernel, $request, $requestType);
$this->setController($controller);
}
public function getController()
{
return $this->controller;
}
public function setController($controller)
{
if (!is_callable($controller)) {
throw new \LogicException(sprintf('The controller must be a callable (%s given).', $this->varToString($controller)));
}
$this->controller = $controller;
}
private function varToString($var)
{
if (is_object($var)) {
return sprintf('Object(%s)', get_class($var));
}
if (is_array($var)) {
$a = array();
foreach ($var as $k => $v) {
$a[] = sprintf('%s => %s', $k, $this->varToString($v));
}
return sprintf('Array(%s)', implode(', ', $a));
}
if (is_resource($var)) {
return sprintf('Resource(%s)', get_resource_type($var));
}
if (null === $var) {
return'null';
}
if (false === $var) {
return'false';
}
if (true === $var) {
return'true';
}
return (string) $var;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class FilterResponseEvent extends KernelEvent
{
private $response;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, Response $response)
{
parent::__construct($kernel, $request, $requestType);
$this->setResponse($response);
}
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpFoundation\Response;
class GetResponseEvent extends KernelEvent
{
private $response;
public function getResponse()
{
return $this->response;
}
public function setResponse(Response $response)
{
$this->response = $response;
$this->stopPropagation();
}
public function hasResponse()
{
return null !== $this->response;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForControllerResultEvent extends GetResponseEvent
{
private $controllerResult;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, $controllerResult)
{
parent::__construct($kernel, $request, $requestType);
$this->controllerResult = $controllerResult;
}
public function getControllerResult()
{
return $this->controllerResult;
}
public function setControllerResult($controllerResult)
{
$this->controllerResult = $controllerResult;
}
}
}
namespace Symfony\Component\HttpKernel\Event
{
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request;
class GetResponseForExceptionEvent extends GetResponseEvent
{
private $exception;
public function __construct(HttpKernelInterface $kernel, Request $request, $requestType, \Exception $e)
{
parent::__construct($kernel, $request, $requestType);
$this->setException($e);
}
public function getException()
{
return $this->exception;
}
public function setException(\Exception $exception)
{
$this->exception = $exception;
}
}
}
namespace Symfony\Component\HttpKernel
{
final class KernelEvents
{
const REQUEST ='kernel.request';
const EXCEPTION ='kernel.exception';
const VIEW ='kernel.view';
const CONTROLLER ='kernel.controller';
const RESPONSE ='kernel.response';
const TERMINATE ='kernel.terminate';
const FINISH_REQUEST ='kernel.finish_request';
}
}
namespace Symfony\Component\HttpKernel\Config
{
use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;
class FileLocator extends BaseFileLocator
{
private $kernel;
private $path;
public function __construct(KernelInterface $kernel, $path = null, array $paths = array())
{
$this->kernel = $kernel;
if (null !== $path) {
$this->path = $path;
$paths[] = $path;
}
parent::__construct($paths);
}
public function locate($file, $currentPath = null, $first = true)
{
if (isset($file[0]) &&'@'=== $file[0]) {
return $this->kernel->locateResource($file, $this->path, $first);
}
return parent::locate($file, $currentPath, $first);
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Symfony\Component\HttpKernel\KernelInterface;
class ControllerNameParser
{
protected $kernel;
public function __construct(KernelInterface $kernel)
{
$this->kernel = $kernel;
}
public function parse($controller)
{
$parts = explode(':', $controller);
if (3 !== count($parts) || in_array('', $parts, true)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "a:b:c" controller string.', $controller));
}
$originalController = $controller;
list($bundle, $controller, $action) = $parts;
$controller = str_replace('/','\\', $controller);
$bundles = array();
try {
$allBundles = $this->kernel->getBundle($bundle, false);
} catch (\InvalidArgumentException $e) {
$message = sprintf('The "%s" (from the _controller value "%s") does not exist or is not enabled in your kernel!',
$bundle,
$originalController
);
if ($alternative = $this->findAlternative($bundle)) {
$message .= sprintf(' Did you mean "%s:%s:%s"?', $alternative, $controller, $action);
}
throw new \InvalidArgumentException($message, 0, $e);
}
foreach ($allBundles as $b) {
$try = $b->getNamespace().'\\Controller\\'.$controller.'Controller';
if (class_exists($try)) {
return $try.'::'.$action.'Action';
}
$bundles[] = $b->getName();
$msg = sprintf('The _controller value "%s:%s:%s" maps to a "%s" class, but this class was not found. Create this class or check the spelling of the class and its namespace.', $bundle, $controller, $action, $try);
}
if (count($bundles) > 1) {
$msg = sprintf('Unable to find controller "%s:%s" in bundles %s.', $bundle, $controller, implode(', ', $bundles));
}
throw new \InvalidArgumentException($msg);
}
public function build($controller)
{
if (0 === preg_match('#^(.*?\\\\Controller\\\\(.+)Controller)::(.+)Action$#', $controller, $match)) {
throw new \InvalidArgumentException(sprintf('The "%s" controller is not a valid "class::method" string.', $controller));
}
$className = $match[1];
$controllerName = $match[2];
$actionName = $match[3];
foreach ($this->kernel->getBundles() as $name => $bundle) {
if (0 !== strpos($className, $bundle->getNamespace())) {
continue;
}
return sprintf('%s:%s:%s', $name, $controllerName, $actionName);
}
throw new \InvalidArgumentException(sprintf('Unable to find a bundle that defines controller "%s".', $controller));
}
private function findAlternative($nonExistentBundleName)
{
$bundleNames = array_map(function ($b) {
return $b->getName();
}, $this->kernel->getBundles());
$alternative = null;
$shortest = null;
foreach ($bundleNames as $bundleName) {
if (false !== strpos($bundleName, $nonExistentBundleName)) {
return $bundleName;
}
$lev = levenshtein($nonExistentBundleName, $bundleName);
if ($lev <= strlen($nonExistentBundleName) / 3 && ($alternative === null || $lev < $shortest)) {
$alternative = $bundleName;
$shortest = $lev;
}
}
return $alternative;
}
}
}
namespace Symfony\Bundle\FrameworkBundle\Controller
{
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolver as BaseControllerResolver;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
class ControllerResolver extends BaseControllerResolver
{
protected $container;
protected $parser;
public function __construct(ContainerInterface $container, ControllerNameParser $parser, LoggerInterface $logger = null)
{
$this->container = $container;
$this->parser = $parser;
parent::__construct($logger);
}
protected function createController($controller)
{
if (false === strpos($controller,'::')) {
$count = substr_count($controller,':');
if (2 == $count) {
$controller = $this->parser->parse($controller);
} elseif (1 == $count) {
list($service, $method) = explode(':', $controller, 2);
return array($this->container->get($service), $method);
} elseif ($this->container->has($controller) && method_exists($service = $this->container->get($controller),'__invoke')) {
return $service;
} else {
throw new \LogicException(sprintf('Unable to parse the controller name "%s".', $controller));
}
}
return parent::createController($controller);
}
protected function instantiateController($class)
{
if ($this->container->has($class)) {
return $this->container->get($class);
}
$controller = parent::instantiateController($class);
if ($controller instanceof ContainerAwareInterface) {
$controller->setContainer($this->container);
}
return $controller;
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface AccessMapInterface
{
public function getPatterns(Request $request);
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\RequestMatcherInterface;
use Symfony\Component\HttpFoundation\Request;
class AccessMap implements AccessMapInterface
{
private $map = array();
public function add(RequestMatcherInterface $requestMatcher, array $attributes = array(), $channel = null)
{
$this->map[] = array($requestMatcher, $attributes, $channel);
}
public function getPatterns(Request $request)
{
foreach ($this->map as $elements) {
if (null === $elements[0] || $elements[0]->matches($request)) {
return array($elements[1], $elements[2]);
}
}
return array(null, null);
}
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class Firewall implements EventSubscriberInterface
{
private $map;
private $dispatcher;
private $exceptionListeners;
public function __construct(FirewallMapInterface $map, EventDispatcherInterface $dispatcher)
{
$this->map = $map;
$this->dispatcher = $dispatcher;
$this->exceptionListeners = new \SplObjectStorage();
}
public function onKernelRequest(GetResponseEvent $event)
{
if (!$event->isMasterRequest()) {
return;
}
list($listeners, $exceptionListener) = $this->map->getListeners($event->getRequest());
if (null !== $exceptionListener) {
$this->exceptionListeners[$event->getRequest()] = $exceptionListener;
$exceptionListener->register($this->dispatcher);
}
foreach ($listeners as $listener) {
$listener->handle($event);
if ($event->hasResponse()) {
break;
}
}
}
public function onKernelFinishRequest(FinishRequestEvent $event)
{
$request = $event->getRequest();
if (isset($this->exceptionListeners[$request])) {
$this->exceptionListeners[$request]->unregister($this->dispatcher);
unset($this->exceptionListeners[$request]);
}
}
public static function getSubscribedEvents()
{
return array(
KernelEvents::REQUEST => array('onKernelRequest', 8),
KernelEvents::FINISH_REQUEST =>'onKernelFinishRequest',
);
}
}
}
namespace Symfony\Component\Security\Core\User
{
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
interface UserProviderInterface
{
public function loadUserByUsername($username);
public function refreshUser(UserInterface $user);
public function supportsClass($class);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
interface AuthenticationManagerInterface
{
public function authenticate(TokenInterface $token);
}
}
namespace Symfony\Component\Security\Core\Authentication
{
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\ProviderNotFoundException;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AuthenticationProviderManager implements AuthenticationManagerInterface
{
private $providers;
private $eraseCredentials;
private $eventDispatcher;
public function __construct(array $providers, $eraseCredentials = true)
{
if (!$providers) {
throw new \InvalidArgumentException('You must at least add one authentication provider.');
}
foreach ($providers as $provider) {
if (!$provider instanceof AuthenticationProviderInterface) {
throw new \InvalidArgumentException(sprintf('Provider "%s" must implement the AuthenticationProviderInterface.', get_class($provider)));
}
}
$this->providers = $providers;
$this->eraseCredentials = (bool) $eraseCredentials;
}
public function setEventDispatcher(EventDispatcherInterface $dispatcher)
{
$this->eventDispatcher = $dispatcher;
}
public function authenticate(TokenInterface $token)
{
$lastException = null;
$result = null;
foreach ($this->providers as $provider) {
if (!$provider->supports($token)) {
continue;
}
try {
$result = $provider->authenticate($token);
if (null !== $result) {
break;
}
} catch (AccountStatusException $e) {
$lastException = $e;
break;
} catch (AuthenticationException $e) {
$lastException = $e;
}
}
if (null !== $result) {
if (true === $this->eraseCredentials) {
$result->eraseCredentials();
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_SUCCESS, new AuthenticationEvent($result));
}
return $result;
}
if (null === $lastException) {
$lastException = new ProviderNotFoundException(sprintf('No Authentication Provider found for token of class "%s".', get_class($token)));
}
if (null !== $this->eventDispatcher) {
$this->eventDispatcher->dispatch(AuthenticationEvents::AUTHENTICATION_FAILURE, new AuthenticationFailureEvent($token, $lastException));
}
$lastException->setToken($token);
throw $lastException;
}
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface TokenStorageInterface
{
public function getToken();
public function setToken(TokenInterface $token = null);
}
}
namespace Symfony\Component\Security\Core\Authentication\Token\Storage
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class TokenStorage implements TokenStorageInterface
{
private $token;
public function getToken()
{
return $this->token;
}
public function setToken(TokenInterface $token = null)
{
$this->token = $token;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface AccessDecisionManagerInterface
{
public function decide(TokenInterface $token, array $attributes, $object = null);
public function supportsAttribute($attribute);
public function supportsClass($class);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
class AccessDecisionManager implements AccessDecisionManagerInterface
{
const STRATEGY_AFFIRMATIVE ='affirmative';
const STRATEGY_CONSENSUS ='consensus';
const STRATEGY_UNANIMOUS ='unanimous';
private $voters;
private $strategy;
private $allowIfAllAbstainDecisions;
private $allowIfEqualGrantedDeniedDecisions;
public function __construct(array $voters = array(), $strategy = self::STRATEGY_AFFIRMATIVE, $allowIfAllAbstainDecisions = false, $allowIfEqualGrantedDeniedDecisions = true)
{
$strategyMethod ='decide'.ucfirst($strategy);
if (!is_callable(array($this, $strategyMethod))) {
throw new \InvalidArgumentException(sprintf('The strategy "%s" is not supported.', $strategy));
}
$this->voters = $voters;
$this->strategy = $strategyMethod;
$this->allowIfAllAbstainDecisions = (bool) $allowIfAllAbstainDecisions;
$this->allowIfEqualGrantedDeniedDecisions = (bool) $allowIfEqualGrantedDeniedDecisions;
}
public function setVoters(array $voters)
{
$this->voters = $voters;
}
public function decide(TokenInterface $token, array $attributes, $object = null)
{
return $this->{$this->strategy}($token, $attributes, $object);
}
public function supportsAttribute($attribute)
{
@trigger_error('The '.__METHOD__.' is deprecated since version 2.8 and will be removed in version 3.0.', E_USER_DEPRECATED);
foreach ($this->voters as $voter) {
if ($voter->supportsAttribute($attribute)) {
return true;
}
}
return false;
}
public function supportsClass($class)
{
@trigger_error('The '.__METHOD__.' is deprecated since version 2.8 and will be removed in version 3.0.', E_USER_DEPRECATED);
foreach ($this->voters as $voter) {
if ($voter->supportsClass($class)) {
return true;
}
}
return false;
}
private function decideAffirmative(TokenInterface $token, array $attributes, $object = null)
{
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
return true;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
default:
break;
}
}
if ($deny > 0) {
return false;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideConsensus(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
$deny = 0;
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, $attributes);
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
++$deny;
break;
}
}
if ($grant > $deny) {
return true;
}
if ($deny > $grant) {
return false;
}
if ($grant > 0) {
return $this->allowIfEqualGrantedDeniedDecisions;
}
return $this->allowIfAllAbstainDecisions;
}
private function decideUnanimous(TokenInterface $token, array $attributes, $object = null)
{
$grant = 0;
foreach ($attributes as $attribute) {
foreach ($this->voters as $voter) {
$result = $voter->vote($token, $object, array($attribute));
switch ($result) {
case VoterInterface::ACCESS_GRANTED:
++$grant;
break;
case VoterInterface::ACCESS_DENIED:
return false;
default:
break;
}
}
}
if ($grant > 0) {
return true;
}
return $this->allowIfAllAbstainDecisions;
}
}
}
namespace Symfony\Component\Security\Core\Authorization
{
interface AuthorizationCheckerInterface
{
public function isGranted($attributes, $object = null);
}
}
namespace Symfony\Component\Security\Core\Authorization
{
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
class AuthorizationChecker implements AuthorizationCheckerInterface
{
private $tokenStorage;
private $accessDecisionManager;
private $authenticationManager;
private $alwaysAuthenticate;
public function __construct(TokenStorageInterface $tokenStorage, AuthenticationManagerInterface $authenticationManager, AccessDecisionManagerInterface $accessDecisionManager, $alwaysAuthenticate = false)
{
$this->tokenStorage = $tokenStorage;
$this->authenticationManager = $authenticationManager;
$this->accessDecisionManager = $accessDecisionManager;
$this->alwaysAuthenticate = $alwaysAuthenticate;
}
final public function isGranted($attributes, $object = null)
{
if (null === ($token = $this->tokenStorage->getToken())) {
throw new AuthenticationCredentialsNotFoundException('The token storage contains no authentication token. One possible reason may be that there is no firewall configured for this URL.');
}
if ($this->alwaysAuthenticate || !$token->isAuthenticated()) {
$this->tokenStorage->setToken($token = $this->authenticationManager->authenticate($token));
}
if (!is_array($attributes)) {
$attributes = array($attributes);
}
return $this->accessDecisionManager->decide($token, $attributes, $object);
}
}
}
namespace Symfony\Component\Security\Core\Authorization\Voter
{
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
interface VoterInterface
{
const ACCESS_GRANTED = 1;
const ACCESS_ABSTAIN = 0;
const ACCESS_DENIED = -1;
public function supportsAttribute($attribute);
public function supportsClass($class);
public function vote(TokenInterface $token, $object, array $attributes);
}
}
namespace Symfony\Component\Security\Http
{
use Symfony\Component\HttpFoundation\Request;
interface FirewallMapInterface
{
public function getListeners(Request $request);
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
class FirewallMap implements FirewallMapInterface
{
protected $container;
protected $map;
public function __construct(ContainerInterface $container, array $map)
{
$this->container = $container;
$this->map = $map;
}
public function getListeners(Request $request)
{
foreach ($this->map as $contextId => $requestMatcher) {
if (null === $requestMatcher || $requestMatcher->matches($request)) {
return $this->container->get($contextId)->getContext();
}
}
return array(array(), null);
}
}
}
namespace Symfony\Bundle\SecurityBundle\Security
{
use Symfony\Component\Security\Http\Firewall\ExceptionListener;
class FirewallContext
{
private $listeners;
private $exceptionListener;
public function __construct(array $listeners, ExceptionListener $exceptionListener = null)
{
$this->listeners = $listeners;
$this->exceptionListener = $exceptionListener;
}
public function getContext()
{
return array($this->listeners, $this->exceptionListener);
}
}
}
namespace Symfony\Component\HttpFoundation
{
interface RequestMatcherInterface
{
public function matches(Request $request);
}
}
namespace Symfony\Component\HttpFoundation
{
class RequestMatcher implements RequestMatcherInterface
{
private $path;
private $host;
private $methods = array();
private $ips = array();
private $attributes = array();
private $schemes = array();
public function __construct($path = null, $host = null, $methods = null, $ips = null, array $attributes = array(), $schemes = null)
{
$this->matchPath($path);
$this->matchHost($host);
$this->matchMethod($methods);
$this->matchIps($ips);
$this->matchScheme($schemes);
foreach ($attributes as $k => $v) {
$this->matchAttribute($k, $v);
}
}
public function matchScheme($scheme)
{
$this->schemes = null !== $scheme ? array_map('strtolower', (array) $scheme) : array();
}
public function matchHost($regexp)
{
$this->host = $regexp;
}
public function matchPath($regexp)
{
$this->path = $regexp;
}
public function matchIp($ip)
{
$this->matchIps($ip);
}
public function matchIps($ips)
{
$this->ips = null !== $ips ? (array) $ips : array();
}
public function matchMethod($method)
{
$this->methods = null !== $method ? array_map('strtoupper', (array) $method) : array();
}
public function matchAttribute($key, $regexp)
{
$this->attributes[$key] = $regexp;
}
public function matches(Request $request)
{
if ($this->schemes && !in_array($request->getScheme(), $this->schemes, true)) {
return false;
}
if ($this->methods && !in_array($request->getMethod(), $this->methods, true)) {
return false;
}
foreach ($this->attributes as $key => $pattern) {
if (!preg_match('{'.$pattern.'}', $request->attributes->get($key))) {
return false;
}
}
if (null !== $this->path && !preg_match('{'.$this->path.'}', rawurldecode($request->getPathInfo()))) {
return false;
}
if (null !== $this->host && !preg_match('{'.$this->host.'}i', $request->getHost())) {
return false;
}
if (IpUtils::checkIp($request->getClientIp(), $this->ips)) {
return true;
}
return count($this->ips) === 0;
}
}
}
namespace
{
class Twig_Environment
{
const VERSION ='2.4.3';
const VERSION_ID = 20403;
const MAJOR_VERSION = 2;
const MINOR_VERSION = 4;
const RELEASE_VERSION = 3;
const EXTRA_VERSION ='';
private $charset;
private $loader;
private $debug;
private $autoReload;
private $cache;
private $lexer;
private $parser;
private $compiler;
private $baseTemplateClass;
private $globals = array();
private $resolvedGlobals;
private $loadedTemplates;
private $strictVariables;
private $templateClassPrefix ='__TwigTemplate_';
private $originalCache;
private $extensionSet;
private $runtimeLoaders = array();
private $runtimes = array();
private $optionsHash;
public function __construct(Twig_LoaderInterface $loader, $options = array())
{
$this->setLoader($loader);
$options = array_merge(array('debug'=> false,'charset'=>'UTF-8','base_template_class'=>'Twig_Template','strict_variables'=> false,'autoescape'=>'html','cache'=> false,'auto_reload'=> null,'optimizations'=> -1,
), $options);
$this->debug = (bool) $options['debug'];
$this->setCharset($options['charset']);
$this->baseTemplateClass = $options['base_template_class'];
$this->autoReload = null === $options['auto_reload'] ? $this->debug : (bool) $options['auto_reload'];
$this->strictVariables = (bool) $options['strict_variables'];
$this->setCache($options['cache']);
$this->extensionSet = new Twig_ExtensionSet();
$this->addExtension(new Twig_Extension_Core());
$this->addExtension(new Twig_Extension_Escaper($options['autoescape']));
$this->addExtension(new Twig_Extension_Optimizer($options['optimizations']));
}
public function getBaseTemplateClass()
{
return $this->baseTemplateClass;
}
public function setBaseTemplateClass($class)
{
$this->baseTemplateClass = $class;
$this->updateOptionsHash();
}
public function enableDebug()
{
$this->debug = true;
$this->updateOptionsHash();
}
public function disableDebug()
{
$this->debug = false;
$this->updateOptionsHash();
}
public function isDebug()
{
return $this->debug;
}
public function enableAutoReload()
{
$this->autoReload = true;
}
public function disableAutoReload()
{
$this->autoReload = false;
}
public function isAutoReload()
{
return $this->autoReload;
}
public function enableStrictVariables()
{
$this->strictVariables = true;
$this->updateOptionsHash();
}
public function disableStrictVariables()
{
$this->strictVariables = false;
$this->updateOptionsHash();
}
public function isStrictVariables()
{
return $this->strictVariables;
}
public function getCache($original = true)
{
return $original ? $this->originalCache : $this->cache;
}
public function setCache($cache)
{
if (is_string($cache)) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Filesystem($cache);
} elseif (false === $cache) {
$this->originalCache = $cache;
$this->cache = new Twig_Cache_Null();
} elseif ($cache instanceof Twig_CacheInterface) {
$this->originalCache = $this->cache = $cache;
} else {
throw new LogicException(sprintf('Cache can only be a string, false, or a Twig_CacheInterface implementation.'));
}
}
public function getTemplateClass($name, $index = null)
{
$key = $this->getLoader()->getCacheKey($name).$this->optionsHash;
return $this->templateClassPrefix.hash('sha256', $key).(null === $index ?'':'_'.$index);
}
public function render($name, array $context = array())
{
return $this->loadTemplate($name)->render($context);
}
public function display($name, array $context = array())
{
$this->loadTemplate($name)->display($context);
}
public function load($name)
{
if ($name instanceof Twig_TemplateWrapper) {
return $name;
}
if ($name instanceof Twig_Template) {
return new Twig_TemplateWrapper($this, $name);
}
return new Twig_TemplateWrapper($this, $this->loadTemplate($name));
}
public function loadTemplate($name, $index = null)
{
$cls = $mainCls = $this->getTemplateClass($name);
if (null !== $index) {
$cls .='_'.$index;
}
if (isset($this->loadedTemplates[$cls])) {
return $this->loadedTemplates[$cls];
}
if (!class_exists($cls, false)) {
$key = $this->cache->generateKey($name, $mainCls);
if (!$this->isAutoReload() || $this->isTemplateFresh($name, $this->cache->getTimestamp($key))) {
$this->cache->load($key);
}
if (!class_exists($cls, false)) {
$source = $this->getLoader()->getSourceContext($name);
$content = $this->compileSource($source);
$this->cache->write($key, $content);
$this->cache->load($key);
if (!class_exists($mainCls, false)) {
eval('?>'.$content);
}
if (!class_exists($cls, false)) {
throw new Twig_Error_Runtime(sprintf('Failed to load Twig template "%s", index "%s": cache is corrupted.', $name, $index), -1, $source);
}
}
}
$this->extensionSet->initRuntime($this);
return $this->loadedTemplates[$cls] = new $cls($this);
}
public function createTemplate($template)
{
$name = sprintf('__string_template__%s', hash('sha256', $template, false));
$loader = new Twig_Loader_Chain(array(
new Twig_Loader_Array(array($name => $template)),
$current = $this->getLoader(),
));
$this->setLoader($loader);
try {
$template = $this->loadTemplate($name);
} finally {
$this->setLoader($current);
}
return $template;
}
public function isTemplateFresh($name, $time)
{
return $this->extensionSet->getLastModified() <= $time && $this->getLoader()->isFresh($name, $time);
}
public function resolveTemplate($names)
{
if (!is_array($names)) {
$names = array($names);
}
foreach ($names as $name) {
if ($name instanceof Twig_Template) {
return $name;
}
try {
return $this->loadTemplate($name);
} catch (Twig_Error_Loader $e) {
}
}
if (1 === count($names)) {
throw $e;
}
throw new Twig_Error_Loader(sprintf('Unable to find one of the following templates: "%s".', implode('", "', $names)));
}
public function setLexer(Twig_Lexer $lexer)
{
$this->lexer = $lexer;
}
public function tokenize(Twig_Source $source)
{
if (null === $this->lexer) {
$this->lexer = new Twig_Lexer($this);
}
return $this->lexer->tokenize($source);
}
public function setParser(Twig_Parser $parser)
{
$this->parser = $parser;
}
public function parse(Twig_TokenStream $stream)
{
if (null === $this->parser) {
$this->parser = new Twig_Parser($this);
}
return $this->parser->parse($stream);
}
public function setCompiler(Twig_Compiler $compiler)
{
$this->compiler = $compiler;
}
public function compile(Twig_Node $node)
{
if (null === $this->compiler) {
$this->compiler = new Twig_Compiler($this);
}
return $this->compiler->compile($node)->getSource();
}
public function compileSource(Twig_Source $source)
{
try {
return $this->compile($this->parse($this->tokenize($source)));
} catch (Twig_Error $e) {
$e->setSourceContext($source);
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Syntax(sprintf('An exception has been thrown during the compilation of a template ("%s").', $e->getMessage()), -1, $source, $e);
}
}
public function setLoader(Twig_LoaderInterface $loader)
{
$this->loader = $loader;
}
public function getLoader()
{
return $this->loader;
}
public function setCharset($charset)
{
if ('UTF8'=== $charset = strtoupper($charset)) {
$charset ='UTF-8';
}
$this->charset = $charset;
}
public function getCharset()
{
return $this->charset;
}
public function hasExtension($class)
{
return $this->extensionSet->hasExtension($class);
}
public function addRuntimeLoader(Twig_RuntimeLoaderInterface $loader)
{
$this->runtimeLoaders[] = $loader;
}
public function getExtension($class)
{
return $this->extensionSet->getExtension($class);
}
public function getRuntime($class)
{
if (isset($this->runtimes[$class])) {
return $this->runtimes[$class];
}
foreach ($this->runtimeLoaders as $loader) {
if (null !== $runtime = $loader->load($class)) {
return $this->runtimes[$class] = $runtime;
}
}
throw new Twig_Error_Runtime(sprintf('Unable to load the "%s" runtime.', $class));
}
public function addExtension(Twig_ExtensionInterface $extension)
{
$this->extensionSet->addExtension($extension);
$this->updateOptionsHash();
}
public function setExtensions(array $extensions)
{
$this->extensionSet->setExtensions($extensions);
}
public function getExtensions()
{
return $this->extensionSet->getExtensions();
}
public function addTokenParser(Twig_TokenParserInterface $parser)
{
$this->extensionSet->addTokenParser($parser);
}
public function getTokenParsers()
{
return $this->extensionSet->getTokenParsers();
}
public function getTags()
{
$tags = array();
foreach ($this->getTokenParsers() as $parser) {
$tags[$parser->getTag()] = $parser;
}
return $tags;
}
public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
{
$this->extensionSet->addNodeVisitor($visitor);
}
public function getNodeVisitors()
{
return $this->extensionSet->getNodeVisitors();
}
public function addFilter(Twig_Filter $filter)
{
$this->extensionSet->addFilter($filter);
}
public function getFilter($name)
{
return $this->extensionSet->getFilter($name);
}
public function registerUndefinedFilterCallback(callable $callable)
{
$this->extensionSet->registerUndefinedFilterCallback($callable);
}
public function getFilters()
{
return $this->extensionSet->getFilters();
}
public function addTest(Twig_Test $test)
{
$this->extensionSet->addTest($test);
}
public function getTests()
{
return $this->extensionSet->getTests();
}
public function getTest($name)
{
return $this->extensionSet->getTest($name);
}
public function addFunction(Twig_Function $function)
{
$this->extensionSet->addFunction($function);
}
public function getFunction($name)
{
return $this->extensionSet->getFunction($name);
}
public function registerUndefinedFunctionCallback(callable $callable)
{
$this->extensionSet->registerUndefinedFunctionCallback($callable);
}
public function getFunctions()
{
return $this->extensionSet->getFunctions();
}
public function addGlobal($name, $value)
{
if ($this->extensionSet->isInitialized() && !array_key_exists($name, $this->getGlobals())) {
throw new LogicException(sprintf('Unable to add global "%s" as the runtime or the extensions have already been initialized.', $name));
}
if (null !== $this->resolvedGlobals) {
$this->resolvedGlobals[$name] = $value;
} else {
$this->globals[$name] = $value;
}
}
public function getGlobals()
{
if ($this->extensionSet->isInitialized()) {
if (null === $this->resolvedGlobals) {
$this->resolvedGlobals = array_merge($this->extensionSet->getGlobals(), $this->globals);
}
return $this->resolvedGlobals;
}
return array_merge($this->extensionSet->getGlobals(), $this->globals);
}
public function mergeGlobals(array $context)
{
foreach ($this->getGlobals() as $key => $value) {
if (!array_key_exists($key, $context)) {
$context[$key] = $value;
}
}
return $context;
}
public function getUnaryOperators()
{
return $this->extensionSet->getUnaryOperators();
}
public function getBinaryOperators()
{
return $this->extensionSet->getBinaryOperators();
}
private function updateOptionsHash()
{
$this->optionsHash = implode(':', array(
$this->extensionSet->getSignature(),
PHP_MAJOR_VERSION,
PHP_MINOR_VERSION,
self::VERSION,
(int) $this->debug,
$this->baseTemplateClass,
(int) $this->strictVariables,
));
}
}
class_alias('Twig_Environment','Twig\Environment', false);
}
namespace
{
interface Twig_ExtensionInterface
{
public function getTokenParsers();
public function getNodeVisitors();
public function getFilters();
public function getTests();
public function getFunctions();
public function getOperators();
}
class_alias('Twig_ExtensionInterface','Twig\Extension\ExtensionInterface', false);
class_exists('Twig_Environment');
}
namespace
{
abstract class Twig_Extension implements Twig_ExtensionInterface
{
public function getTokenParsers()
{
return array();
}
public function getNodeVisitors()
{
return array();
}
public function getFilters()
{
return array();
}
public function getTests()
{
return array();
}
public function getFunctions()
{
return array();
}
public function getOperators()
{
return array();
}
}
class_alias('Twig_Extension','Twig\Extension\AbstractExtension', false);
class_exists('Twig_Environment');
}
namespace
{
final class Twig_Extension_Core extends Twig_Extension
{
private $dateFormats = array('F j, Y H:i','%d days');
private $numberFormat = array(0,'.',',');
private $timezone = null;
private $escapers = array();
public function setEscaper($strategy, callable $callable)
{
$this->escapers[$strategy] = $callable;
}
public function getEscapers()
{
return $this->escapers;
}
public function setDateFormat($format = null, $dateIntervalFormat = null)
{
if (null !== $format) {
$this->dateFormats[0] = $format;
}
if (null !== $dateIntervalFormat) {
$this->dateFormats[1] = $dateIntervalFormat;
}
}
public function getDateFormat()
{
return $this->dateFormats;
}
public function setTimezone($timezone)
{
$this->timezone = $timezone instanceof DateTimeZone ? $timezone : new DateTimeZone($timezone);
}
public function getTimezone()
{
if (null === $this->timezone) {
$this->timezone = new DateTimeZone(date_default_timezone_get());
}
return $this->timezone;
}
public function setNumberFormat($decimal, $decimalPoint, $thousandSep)
{
$this->numberFormat = array($decimal, $decimalPoint, $thousandSep);
}
public function getNumberFormat()
{
return $this->numberFormat;
}
public function getTokenParsers()
{
return array(
new Twig_TokenParser_For(),
new Twig_TokenParser_If(),
new Twig_TokenParser_Extends(),
new Twig_TokenParser_Include(),
new Twig_TokenParser_Block(),
new Twig_TokenParser_Use(),
new Twig_TokenParser_Filter(),
new Twig_TokenParser_Macro(),
new Twig_TokenParser_Import(),
new Twig_TokenParser_From(),
new Twig_TokenParser_Set(),
new Twig_TokenParser_Spaceless(),
new Twig_TokenParser_Flush(),
new Twig_TokenParser_Do(),
new Twig_TokenParser_Embed(),
new Twig_TokenParser_With(),
);
}
public function getFilters()
{
return array(
new Twig_Filter('date','twig_date_format_filter', array('needs_environment'=> true)),
new Twig_Filter('date_modify','twig_date_modify_filter', array('needs_environment'=> true)),
new Twig_Filter('format','sprintf'),
new Twig_Filter('replace','twig_replace_filter'),
new Twig_Filter('number_format','twig_number_format_filter', array('needs_environment'=> true)),
new Twig_Filter('abs','abs'),
new Twig_Filter('round','twig_round'),
new Twig_Filter('url_encode','twig_urlencode_filter'),
new Twig_Filter('json_encode','json_encode'),
new Twig_Filter('convert_encoding','twig_convert_encoding'),
new Twig_Filter('title','twig_title_string_filter', array('needs_environment'=> true)),
new Twig_Filter('capitalize','twig_capitalize_string_filter', array('needs_environment'=> true)),
new Twig_Filter('upper','twig_upper_filter', array('needs_environment'=> true)),
new Twig_Filter('lower','twig_lower_filter', array('needs_environment'=> true)),
new Twig_Filter('striptags','strip_tags'),
new Twig_Filter('trim','twig_trim_filter'),
new Twig_Filter('nl2br','nl2br', array('pre_escape'=>'html','is_safe'=> array('html'))),
new Twig_Filter('join','twig_join_filter'),
new Twig_Filter('split','twig_split_filter', array('needs_environment'=> true)),
new Twig_Filter('sort','twig_sort_filter'),
new Twig_Filter('merge','twig_array_merge'),
new Twig_Filter('batch','twig_array_batch'),
new Twig_Filter('reverse','twig_reverse_filter', array('needs_environment'=> true)),
new Twig_Filter('length','twig_length_filter', array('needs_environment'=> true)),
new Twig_Filter('slice','twig_slice', array('needs_environment'=> true)),
new Twig_Filter('first','twig_first', array('needs_environment'=> true)),
new Twig_Filter('last','twig_last', array('needs_environment'=> true)),
new Twig_Filter('default','_twig_default_filter', array('node_class'=>'Twig_Node_Expression_Filter_Default')),
new Twig_Filter('keys','twig_get_array_keys_filter'),
new Twig_Filter('escape','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
new Twig_Filter('e','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
);
}
public function getFunctions()
{
return array(
new Twig_Function('max','max'),
new Twig_Function('min','min'),
new Twig_Function('range','range'),
new Twig_Function('constant','twig_constant'),
new Twig_Function('cycle','twig_cycle'),
new Twig_Function('random','twig_random', array('needs_environment'=> true)),
new Twig_Function('date','twig_date_converter', array('needs_environment'=> true)),
new Twig_Function('include','twig_include', array('needs_environment'=> true,'needs_context'=> true,'is_safe'=> array('all'))),
new Twig_Function('source','twig_source', array('needs_environment'=> true,'is_safe'=> array('all'))),
);
}
public function getTests()
{
return array(
new Twig_Test('even', null, array('node_class'=>'Twig_Node_Expression_Test_Even')),
new Twig_Test('odd', null, array('node_class'=>'Twig_Node_Expression_Test_Odd')),
new Twig_Test('defined', null, array('node_class'=>'Twig_Node_Expression_Test_Defined')),
new Twig_Test('same as', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas')),
new Twig_Test('none', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_Test('null', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_Test('divisible by', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby')),
new Twig_Test('constant', null, array('node_class'=>'Twig_Node_Expression_Test_Constant')),
new Twig_Test('empty','twig_test_empty'),
new Twig_Test('iterable','twig_test_iterable'),
);
}
public function getOperators()
{
return array(
array('not'=> array('precedence'=> 50,'class'=>'Twig_Node_Expression_Unary_Not'),'-'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Neg'),'+'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Pos'),
),
array('or'=> array('precedence'=> 10,'class'=>'Twig_Node_Expression_Binary_Or','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'and'=> array('precedence'=> 15,'class'=>'Twig_Node_Expression_Binary_And','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-or'=> array('precedence'=> 16,'class'=>'Twig_Node_Expression_Binary_BitwiseOr','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-xor'=> array('precedence'=> 17,'class'=>'Twig_Node_Expression_Binary_BitwiseXor','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-and'=> array('precedence'=> 18,'class'=>'Twig_Node_Expression_Binary_BitwiseAnd','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'=='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Equal','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'!='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Less','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Greater','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_GreaterEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_LessEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'not in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotIn','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_In','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'matches'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Matches','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'starts with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_StartsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'ends with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_EndsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'..'=> array('precedence'=> 25,'class'=>'Twig_Node_Expression_Binary_Range','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'+'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Add','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'-'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Sub','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'~'=> array('precedence'=> 40,'class'=>'Twig_Node_Expression_Binary_Concat','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'*'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mul','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'/'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Div','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'//'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_FloorDiv','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'%'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mod','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is not'=> array('precedence'=> 100,'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'**'=> array('precedence'=> 200,'class'=>'Twig_Node_Expression_Binary_Power','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),'??'=> array('precedence'=> 300,'class'=>'Twig_Node_Expression_NullCoalesce','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),
),
);
}
}
function twig_cycle($values, $position)
{
if (!is_array($values) && !$values instanceof ArrayAccess) {
return $values;
}
return $values[$position % count($values)];
}
function twig_random(Twig_Environment $env, $values = null)
{
if (null === $values) {
return mt_rand();
}
if (is_int($values) || is_float($values)) {
return $values < 0 ? mt_rand($values, 0) : mt_rand(0, $values);
}
if ($values instanceof Traversable) {
$values = iterator_to_array($values);
} elseif (is_string($values)) {
if (''=== $values) {
return'';
}
$charset = $env->getCharset();
if ('UTF-8'!== $charset) {
$values = iconv($charset,'UTF-8', $values);
}
$values = preg_split('/(?<!^)(?!$)/u', $values);
if ('UTF-8'!== $charset) {
foreach ($values as $i => $value) {
$values[$i] = iconv('UTF-8', $charset, $value);
}
}
}
if (!is_array($values)) {
return $values;
}
if (0 === count($values)) {
throw new Twig_Error_Runtime('The random function cannot pick from an empty array.');
}
return $values[array_rand($values, 1)];
}
function twig_date_format_filter(Twig_Environment $env, $date, $format = null, $timezone = null)
{
if (null === $format) {
$formats = $env->getExtension('Twig_Extension_Core')->getDateFormat();
$format = $date instanceof DateInterval ? $formats[1] : $formats[0];
}
if ($date instanceof DateInterval) {
return $date->format($format);
}
return twig_date_converter($env, $date, $timezone)->format($format);
}
function twig_date_modify_filter(Twig_Environment $env, $date, $modifier)
{
$date = twig_date_converter($env, $date, false);
return $date->modify($modifier);
}
function twig_date_converter(Twig_Environment $env, $date = null, $timezone = null)
{
if (false !== $timezone) {
if (null === $timezone) {
$timezone = $env->getExtension('Twig_Extension_Core')->getTimezone();
} elseif (!$timezone instanceof DateTimeZone) {
$timezone = new DateTimeZone($timezone);
}
}
if ($date instanceof DateTimeImmutable) {
return false !== $timezone ? $date->setTimezone($timezone) : $date;
}
if ($date instanceof DateTimeInterface) {
$date = clone $date;
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
if (null === $date ||'now'=== $date) {
return new DateTime($date, false !== $timezone ? $timezone : $env->getExtension('Twig_Extension_Core')->getTimezone());
}
$asString = (string) $date;
if (ctype_digit($asString) || (!empty($asString) &&'-'=== $asString[0] && ctype_digit(substr($asString, 1)))) {
$date = new DateTime('@'.$date);
} else {
$date = new DateTime($date, $env->getExtension('Twig_Extension_Core')->getTimezone());
}
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
function twig_replace_filter($str, $from)
{
if ($from instanceof Traversable) {
$from = iterator_to_array($from);
} elseif (!is_array($from)) {
throw new Twig_Error_Runtime(sprintf('The "replace" filter expects an array or "Traversable" as replace values, got "%s".', is_object($from) ? get_class($from) : gettype($from)));
}
return strtr($str, $from);
}
function twig_round($value, $precision = 0, $method ='common')
{
if ('common'== $method) {
return round($value, $precision);
}
if ('ceil'!= $method &&'floor'!= $method) {
throw new Twig_Error_Runtime('The round filter only supports the "common", "ceil", and "floor" methods.');
}
return $method($value * pow(10, $precision)) / pow(10, $precision);
}
function twig_number_format_filter(Twig_Environment $env, $number, $decimal = null, $decimalPoint = null, $thousandSep = null)
{
$defaults = $env->getExtension('Twig_Extension_Core')->getNumberFormat();
if (null === $decimal) {
$decimal = $defaults[0];
}
if (null === $decimalPoint) {
$decimalPoint = $defaults[1];
}
if (null === $thousandSep) {
$thousandSep = $defaults[2];
}
return number_format((float) $number, $decimal, $decimalPoint, $thousandSep);
}
function twig_urlencode_filter($url)
{
if (is_array($url)) {
return http_build_query($url,'','&', PHP_QUERY_RFC3986);
}
return rawurlencode($url);
}
function twig_array_merge($arr1, $arr2)
{
if ($arr1 instanceof Traversable) {
$arr1 = iterator_to_array($arr1);
} elseif (!is_array($arr1)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as first argument.', gettype($arr1)));
}
if ($arr2 instanceof Traversable) {
$arr2 = iterator_to_array($arr2);
} elseif (!is_array($arr2)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or "Traversable", got "%s" as second argument.', gettype($arr2)));
}
return array_merge($arr1, $arr2);
}
function twig_slice(Twig_Environment $env, $item, $start, $length = null, $preserveKeys = false)
{
if ($item instanceof Traversable) {
while ($item instanceof IteratorAggregate) {
$item = $item->getIterator();
}
if ($start >= 0 && $length >= 0 && $item instanceof Iterator) {
try {
return iterator_to_array(new LimitIterator($item, $start, $length === null ? -1 : $length), $preserveKeys);
} catch (OutOfBoundsException $exception) {
return array();
}
}
$item = iterator_to_array($item, $preserveKeys);
}
if (is_array($item)) {
return array_slice($item, $start, $length, $preserveKeys);
}
$item = (string) $item;
return (string) mb_substr($item, $start, $length, $env->getCharset());
}
function twig_first(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, 0, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_last(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, -1, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_join_filter($value, $glue ='')
{
if ($value instanceof Traversable) {
$value = iterator_to_array($value, false);
}
return implode($glue, (array) $value);
}
function twig_split_filter(Twig_Environment $env, $value, $delimiter, $limit = null)
{
if (!empty($delimiter)) {
return null === $limit ? explode($delimiter, $value) : explode($delimiter, $value, $limit);
}
if ($limit <= 1) {
return preg_split('/(?<!^)(?!$)/u', $value);
}
$length = mb_strlen($value, $env->getCharset());
if ($length < $limit) {
return array($value);
}
$r = array();
for ($i = 0; $i < $length; $i += $limit) {
$r[] = mb_substr($value, $i, $limit, $env->getCharset());
}
return $r;
}
function _twig_default_filter($value, $default ='')
{
if (twig_test_empty($value)) {
return $default;
}
return $value;
}
function twig_get_array_keys_filter($array)
{
if ($array instanceof Traversable) {
while ($array instanceof IteratorAggregate) {
$array = $array->getIterator();
}
if ($array instanceof Iterator) {
$keys = array();
$array->rewind();
while ($array->valid()) {
$keys[] = $array->key();
$array->next();
}
return $keys;
}
$keys = array();
foreach ($array as $key => $item) {
$keys[] = $key;
}
return $keys;
}
if (!is_array($array)) {
return array();
}
return array_keys($array);
}
function twig_reverse_filter(Twig_Environment $env, $item, $preserveKeys = false)
{
if ($item instanceof Traversable) {
return array_reverse(iterator_to_array($item), $preserveKeys);
}
if (is_array($item)) {
return array_reverse($item, $preserveKeys);
}
$string = (string) $item;
$charset = $env->getCharset();
if ('UTF-8'!== $charset) {
$item = iconv($charset,'UTF-8', $string);
}
preg_match_all('/./us', $item, $matches);
$string = implode('', array_reverse($matches[0]));
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
}
function twig_sort_filter($array)
{
if ($array instanceof Traversable) {
$array = iterator_to_array($array);
} elseif (!is_array($array)) {
throw new Twig_Error_Runtime(sprintf('The sort filter only works with arrays or "Traversable", got "%s".', gettype($array)));
}
asort($array);
return $array;
}
function twig_in_filter($value, $compare)
{
if (is_array($compare)) {
return in_array($value, $compare, is_object($value) || is_resource($value));
} elseif (is_string($compare) && (is_string($value) || is_int($value) || is_float($value))) {
return''=== $value || false !== strpos($compare, (string) $value);
} elseif ($compare instanceof Traversable) {
if (is_object($value) || is_resource($value)) {
foreach ($compare as $item) {
if ($item === $value) {
return true;
}
}
} else {
foreach ($compare as $item) {
if ($item == $value) {
return true;
}
}
}
return false;
}
return false;
}
function twig_trim_filter($string, $characterMask = null, $side ='both')
{
if (null === $characterMask) {
$characterMask =" \t\n\r\0\x0B";
}
switch ($side) {
case'both':
return trim($string, $characterMask);
case'left':
return ltrim($string, $characterMask);
case'right':
return rtrim($string, $characterMask);
default:
throw new Twig_Error_Runtime('Trimming side must be "left", "right" or "both".');
}
}
function twig_escape_filter(Twig_Environment $env, $string, $strategy ='html', $charset = null, $autoescape = false)
{
if ($autoescape && $string instanceof Twig_Markup) {
return $string;
}
if (!is_string($string)) {
if (is_object($string) && method_exists($string,'__toString')) {
$string = (string) $string;
} elseif (in_array($strategy, array('html','js','css','html_attr','url'))) {
return $string;
}
}
if (null === $charset) {
$charset = $env->getCharset();
}
switch ($strategy) {
case'html':
static $htmlspecialcharsCharsets = array('ISO-8859-1'=> true,'ISO8859-1'=> true,'ISO-8859-15'=> true,'ISO8859-15'=> true,'utf-8'=> true,'UTF-8'=> true,'CP866'=> true,'IBM866'=> true,'866'=> true,'CP1251'=> true,'WINDOWS-1251'=> true,'WIN-1251'=> true,'1251'=> true,'CP1252'=> true,'WINDOWS-1252'=> true,'1252'=> true,'KOI8-R'=> true,'KOI8-RU'=> true,'KOI8R'=> true,'BIG5'=> true,'950'=> true,'GB2312'=> true,'936'=> true,'BIG5-HKSCS'=> true,'SHIFT_JIS'=> true,'SJIS'=> true,'932'=> true,'EUC-JP'=> true,'EUCJP'=> true,'ISO8859-5'=> true,'ISO-8859-5'=> true,'MACROMAN'=> true,
);
if (isset($htmlspecialcharsCharsets[$charset])) {
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
if (isset($htmlspecialcharsCharsets[strtoupper($charset)])) {
$htmlspecialcharsCharsets[$charset] = true;
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
$string = iconv($charset,'UTF-8', $string);
$string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8');
return iconv('UTF-8', $charset, $string);
case'js':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\._]#Su', function ($matches) {
$char = $matches[0];
if (!isset($char[1])) {
return'\\x'.strtoupper(substr('00'.bin2hex($char), -2));
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
$char = strtoupper(bin2hex($char));
if (4 >= strlen($char)) {
return sprintf('\u%04s', $char);
}
return sprintf('\u%04s\u%04s', substr($char, 0, -4), substr($char, -4));
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'css':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9]#Su', function ($matches) {
$char = $matches[0];
if (!isset($char[1])) {
$hex = ltrim(strtoupper(bin2hex($char)),'0');
if (0 === strlen($hex)) {
$hex ='0';
}
return'\\'.$hex.' ';
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\'.ltrim(strtoupper(bin2hex($char)),'0').' ';
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'html_attr':
if ('UTF-8'!== $charset) {
$string = iconv($charset,'UTF-8', $string);
}
if (0 == strlen($string) ? false : 1 !== preg_match('/^./su', $string)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\.\-_]#Su', function ($matches) {
static $entityMap = array(
34 =>'quot',
38 =>'amp',
60 =>'lt',
62 =>'gt',
);
$chr = $matches[0];
$ord = ord($chr);
if (($ord <= 0x1f && $chr !="\t"&& $chr !="\n"&& $chr !="\r") || ($ord >= 0x7f && $ord <= 0x9f)) {
return'&#xFFFD;';
}
if (strlen($chr) == 1) {
$hex = strtoupper(substr('00'.bin2hex($chr), -2));
} else {
$chr = twig_convert_encoding($chr,'UTF-16BE','UTF-8');
$hex = strtoupper(substr('0000'.bin2hex($chr), -4));
}
$int = hexdec($hex);
if (array_key_exists($int, $entityMap)) {
return sprintf('&%s;', $entityMap[$int]);
}
return sprintf('&#x%s;', $hex);
}, $string);
if ('UTF-8'!== $charset) {
$string = iconv('UTF-8', $charset, $string);
}
return $string;
case'url':
return rawurlencode($string);
default:
static $escapers;
if (null === $escapers) {
$escapers = $env->getExtension('Twig_Extension_Core')->getEscapers();
}
if (isset($escapers[$strategy])) {
return $escapers[$strategy]($env, $string, $charset);
}
$validStrategies = implode(', ', array_merge(array('html','js','url','css','html_attr'), array_keys($escapers)));
throw new Twig_Error_Runtime(sprintf('Invalid escaping strategy "%s" (valid ones: %s).', $strategy, $validStrategies));
}
}
function twig_escape_filter_is_safe(Twig_Node $filterArgs)
{
foreach ($filterArgs as $arg) {
if ($arg instanceof Twig_Node_Expression_Constant) {
return array($arg->getAttribute('value'));
}
return array();
}
return array('html');
}
function twig_convert_encoding($string, $to, $from)
{
return iconv($from, $to, $string);
}
function twig_length_filter(Twig_Environment $env, $thing)
{
if (null === $thing) {
return 0;
}
if (is_scalar($thing)) {
return mb_strlen($thing, $env->getCharset());
}
if (method_exists($thing,'__toString') && !$thing instanceof \Countable) {
return mb_strlen((string) $thing, $env->getCharset());
}
if ($thing instanceof \Countable || is_array($thing)) {
return count($thing);
}
return 1;
}
function twig_upper_filter(Twig_Environment $env, $string)
{
return mb_strtoupper($string, $env->getCharset());
}
function twig_lower_filter(Twig_Environment $env, $string)
{
return mb_strtolower($string, $env->getCharset());
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
if (null !== $charset = $env->getCharset()) {
return mb_convert_case($string, MB_CASE_TITLE, $charset);
}
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
$charset = $env->getCharset();
return mb_strtoupper(mb_substr($string, 0, 1, $charset), $charset).mb_strtolower(mb_substr($string, 1, null, $charset), $charset);
}
function twig_ensure_traversable($seq)
{
if ($seq instanceof Traversable || is_array($seq)) {
return $seq;
}
return array();
}
function twig_test_empty($value)
{
if ($value instanceof Countable) {
return 0 == count($value);
}
if (is_object($value) && method_exists($value,'__toString')) {
return''=== (string) $value;
}
return''=== $value || false === $value || null === $value || array() === $value;
}
function twig_test_iterable($value)
{
return $value instanceof Traversable || is_array($value);
}
function twig_include(Twig_Environment $env, $context, $template, $variables = array(), $withContext = true, $ignoreMissing = false, $sandboxed = false)
{
$alreadySandboxed = false;
$sandbox = null;
if ($withContext) {
$variables = array_merge($context, $variables);
}
if ($isSandboxed = $sandboxed && $env->hasExtension('Twig_Extension_Sandbox')) {
$sandbox = $env->getExtension('Twig_Extension_Sandbox');
if (!$alreadySandboxed = $sandbox->isSandboxed()) {
$sandbox->enableSandbox();
}
}
$result = null;
try {
$result = $env->resolveTemplate($template)->render($variables);
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
} catch (Throwable $e) {
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
throw $e;
}
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
return $result;
}
function twig_source(Twig_Environment $env, $name, $ignoreMissing = false)
{
$loader = $env->getLoader();
try {
return $loader->getSourceContext($name)->getCode();
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
throw $e;
}
}
}
function twig_constant($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return constant($constant);
}
function twig_constant_is_defined($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return defined($constant);
}
function twig_array_batch($items, $size, $fill = null)
{
if ($items instanceof Traversable) {
$items = iterator_to_array($items, false);
}
$size = ceil($size);
$result = array_chunk($items, $size, true);
if (null !== $fill && !empty($result)) {
$last = count($result) - 1;
if ($fillCount = $size - count($result[$last])) {
$result[$last] = array_merge(
$result[$last],
array_fill(0, $fillCount, $fill)
);
}
}
return $result;
}
function twig_get_attribute(Twig_Environment $env, Twig_Source $source, $object, $item, array $arguments = array(), $type = Twig_Template::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
{
static $cache = array();
if (Twig_Template::METHOD_CALL !== $type) {
$arrayItem = is_bool($item) || is_float($item) ? (int) $item : $item;
if ((is_array($object) && (isset($object[$arrayItem]) || array_key_exists($arrayItem, $object)))
|| ($object instanceof ArrayAccess && isset($object[$arrayItem]))
) {
if ($isDefinedTest) {
return true;
}
return $object[$arrayItem];
}
if (Twig_Template::ARRAY_CALL === $type || !is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
if ($object instanceof ArrayAccess) {
$message = sprintf('Key "%s" in object with ArrayAccess of class "%s" does not exist.', $arrayItem, get_class($object));
} elseif (is_object($object)) {
$message = sprintf('Impossible to access a key "%s" on an object of class "%s" that does not implement ArrayAccess interface.', $item, get_class($object));
} elseif (is_array($object)) {
if (empty($object)) {
$message = sprintf('Key "%s" does not exist as the array is empty.', $arrayItem);
} else {
$message = sprintf('Key "%s" for array with keys "%s" does not exist.', $arrayItem, implode(', ', array_keys($object)));
}
} elseif (Twig_Template::ARRAY_CALL === $type) {
if (null === $object) {
$message = sprintf('Impossible to access a key ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access a key ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
} elseif (null === $object) {
$message = sprintf('Impossible to access an attribute ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to access an attribute ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $source);
}
}
if (!is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
if (null === $object) {
$message = sprintf('Impossible to invoke a method ("%s") on a null variable.', $item);
} else {
$message = sprintf('Impossible to invoke a method ("%s") on a %s variable ("%s").', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $source);
}
if ($object instanceof Twig_Template) {
throw new Twig_Error_Runtime('Accessing Twig_Template attributes is forbidden.');
}
if (Twig_Template::METHOD_CALL !== $type) {
if (isset($object->$item) || array_key_exists((string) $item, $object)) {
if ($isDefinedTest) {
return true;
}
if ($env->hasExtension('Twig_Extension_Sandbox')) {
$env->getExtension('Twig_Extension_Sandbox')->checkPropertyAllowed($object, $item);
}
return $object->$item;
}
}
$class = get_class($object);
if (!isset($cache[$class])) {
$methods = get_class_methods($object);
sort($methods);
$lcMethods = array_map('strtolower', $methods);
$classCache = array();
foreach ($methods as $i => $method) {
$classCache[$method] = $method;
$classCache[$lcName = $lcMethods[$i]] = $method;
if ('g'=== $lcName[0] && 0 === strpos($lcName,'get')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
} elseif ('i'=== $lcName[0] && 0 === strpos($lcName,'is')) {
$name = substr($method, 2);
$lcName = substr($lcName, 2);
} elseif ('h'=== $lcName[0] && 0 === strpos($lcName,'has')) {
$name = substr($method, 3);
$lcName = substr($lcName, 3);
if (in_array('is'.$lcName, $lcMethods)) {
continue;
}
} else {
continue;
}
if ($name) {
if (!isset($classCache[$name])) {
$classCache[$name] = $method;
}
if (!isset($classCache[$lcName])) {
$classCache[$lcName] = $method;
}
}
}
$cache[$class] = $classCache;
}
$call = false;
if (isset($cache[$class][$item])) {
$method = $cache[$class][$item];
} elseif (isset($cache[$class][$lcItem = strtolower($item)])) {
$method = $cache[$class][$lcItem];
} elseif (isset($cache[$class]['__call'])) {
$method = $item;
$call = true;
} else {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Neither the property "%1$s" nor one of the methods "%1$s()", "get%1$s()"/"is%1$s()"/"has%1$s()" or "__call()" exist and have public access in class "%2$s".', $item, $class), -1, $source);
}
if ($isDefinedTest) {
return true;
}
if ($env->hasExtension('Twig_Extension_Sandbox')) {
$env->getExtension('Twig_Extension_Sandbox')->checkMethodAllowed($object, $method);
}
try {
$ret = $object->$method(...$arguments);
} catch (BadMethodCallException $e) {
if ($call && ($ignoreStrictCheck || !$env->isStrictVariables())) {
return;
}
throw $e;
}
return $ret;
}
class_alias('Twig_Extension_Core','Twig\Extension\CoreExtension', false);
}
namespace
{
final class Twig_Extension_Escaper extends Twig_Extension
{
private $defaultStrategy;
public function __construct($defaultStrategy ='html')
{
$this->setDefaultStrategy($defaultStrategy);
}
public function getTokenParsers()
{
return array(new Twig_TokenParser_AutoEscape());
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Escaper());
}
public function getFilters()
{
return array(
new Twig_Filter('raw','twig_raw_filter', array('is_safe'=> array('all'))),
);
}
public function setDefaultStrategy($defaultStrategy)
{
if ('name'=== $defaultStrategy) {
$defaultStrategy = array('Twig_FileExtensionEscapingStrategy','guess');
}
$this->defaultStrategy = $defaultStrategy;
}
public function getDefaultStrategy($name)
{
if (!is_string($this->defaultStrategy) && false !== $this->defaultStrategy) {
return call_user_func($this->defaultStrategy, $name);
}
return $this->defaultStrategy;
}
}
function twig_raw_filter($string)
{
return $string;
}
class_alias('Twig_Extension_Escaper','Twig\Extension\EscaperExtension', false);
}
namespace
{
final class Twig_Extension_Optimizer extends Twig_Extension
{
private $optimizers;
public function __construct($optimizers = -1)
{
$this->optimizers = $optimizers;
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Optimizer($this->optimizers));
}
}
class_alias('Twig_Extension_Optimizer','Twig\Extension\OptimizerExtension', false);
}
namespace
{
interface Twig_LoaderInterface
{
public function getSourceContext($name);
public function getCacheKey($name);
public function isFresh($name, $time);
public function exists($name);
}
class_alias('Twig_LoaderInterface','Twig\Loader\LoaderInterface', false);
}
namespace
{
class Twig_Markup implements Countable, JsonSerializable
{
private $content;
private $charset;
public function __construct($content, $charset)
{
$this->content = (string) $content;
$this->charset = $charset;
}
public function __toString()
{
return $this->content;
}
public function count()
{
return mb_strlen($this->content, $this->charset);
}
public function jsonSerialize()
{
return $this->content;
}
}
class_alias('Twig_Markup','Twig\Markup', false);
}
namespace
{
abstract class Twig_Template
{
const ANY_CALL ='any';
const ARRAY_CALL ='array';
const METHOD_CALL ='method';
protected static $cache = array();
protected $parent;
protected $parents = array();
protected $env;
protected $blocks = array();
protected $traits = array();
public function __construct(Twig_Environment $env)
{
$this->env = $env;
}
public function __toString()
{
return $this->getTemplateName();
}
abstract public function getTemplateName();
abstract public function getDebugInfo();
public function getSourceContext()
{
return new Twig_Source('', $this->getTemplateName());
}
public function getParent(array $context)
{
if (null !== $this->parent) {
return $this->parent;
}
try {
$parent = $this->doGetParent($context);
if (false === $parent) {
return false;
}
if ($parent instanceof self) {
return $this->parents[$parent->getTemplateName()] = $parent;
}
if (!isset($this->parents[$parent])) {
$this->parents[$parent] = $this->loadTemplate($parent);
}
} catch (Twig_Error_Loader $e) {
$e->setSourceContext(null);
$e->guess();
throw $e;
}
return $this->parents[$parent];
}
protected function doGetParent(array $context)
{
return false;
}
public function isTraitable()
{
return true;
}
public function displayParentBlock($name, array $context, array $blocks = array())
{
if (isset($this->traits[$name])) {
$this->traits[$name][0]->displayBlock($name, $context, $blocks, false);
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, $blocks, false);
} else {
throw new Twig_Error_Runtime(sprintf('The template has no parent and no traits defining the "%s" block.', $name), -1, $this->getSourceContext());
}
}
public function displayBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
if ($useBlocks && isset($blocks[$name])) {
$template = $blocks[$name][0];
$block = $blocks[$name][1];
} elseif (isset($this->blocks[$name])) {
$template = $this->blocks[$name][0];
$block = $this->blocks[$name][1];
} else {
$template = null;
$block = null;
}
if (null !== $template && !$template instanceof self) {
throw new LogicException('A block must be a method on a Twig_Template instance.');
}
if (null !== $template) {
try {
$template->$block($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($template->getSourceContext());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $template->getSourceContext(), $e);
}
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, array_merge($this->blocks, $blocks), false);
} elseif (isset($blocks[$name])) {
throw new Twig_Error_Runtime(sprintf('Block "%s" should not call parent() in "%s" as the block does not exist in the parent template "%s".', $name, $blocks[$name][0]->getTemplateName(), $this->getTemplateName()), -1, $blocks[$name][0]->getTemplateName());
} else {
throw new Twig_Error_Runtime(sprintf('Block "%s" on template "%s" does not exist.', $name, $this->getTemplateName()), -1, $this->getTemplateName());
}
}
public function renderParentBlock($name, array $context, array $blocks = array())
{
ob_start();
$this->displayParentBlock($name, $context, $blocks);
return ob_get_clean();
}
public function renderBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
ob_start();
$this->displayBlock($name, $context, $blocks, $useBlocks);
return ob_get_clean();
}
public function hasBlock($name, array $context, array $blocks = array())
{
if (isset($blocks[$name])) {
return $blocks[$name][0] instanceof self;
}
if (isset($this->blocks[$name])) {
return true;
}
if (false !== $parent = $this->getParent($context)) {
return $parent->hasBlock($name, $context);
}
return false;
}
public function getBlockNames(array $context, array $blocks = array())
{
$names = array_merge(array_keys($blocks), array_keys($this->blocks));
if (false !== $parent = $this->getParent($context)) {
$names = array_merge($names, $parent->getBlockNames($context));
}
return array_unique($names);
}
protected function loadTemplate($template, $templateName = null, $line = null, $index = null)
{
try {
if (is_array($template)) {
return $this->env->resolveTemplate($template);
}
if ($template instanceof self) {
return $template;
}
if ($template instanceof Twig_TemplateWrapper) {
return $template;
}
return $this->env->loadTemplate($template, $index);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($templateName ? new Twig_Source('', $templateName) : $this->getSourceContext());
}
if ($e->getTemplateLine()) {
throw $e;
}
if (!$line) {
$e->guess();
} else {
$e->setTemplateLine($line);
}
throw $e;
}
}
public function getBlocks()
{
return $this->blocks;
}
public function display(array $context, array $blocks = array())
{
$this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
}
public function render(array $context)
{
$level = ob_get_level();
ob_start();
try {
$this->display($context);
} catch (Throwable $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
}
return ob_get_clean();
}
protected function displayWithErrorHandling(array $context, array $blocks = array())
{
try {
$this->doDisplay($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getSourceContext()) {
$e->setSourceContext($this->getSourceContext());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $this->getSourceContext(), $e);
}
}
abstract protected function doDisplay(array $context, array $blocks = array());
}
class_alias('Twig_Template','Twig\Template', false);
}
namespace Symfony\Component\Form
{
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
interface FormTypeInterface
{
public function buildForm(FormBuilderInterface $builder, array $options);
public function buildView(FormView $view, FormInterface $form, array $options);
public function finishView(FormView $view, FormInterface $form, array $options);
public function setDefaultOptions(OptionsResolverInterface $resolver);
public function getParent();
public function getName();
}
}
namespace Symfony\Component\Form
{
use Symfony\Component\Form\Util\StringUtil;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
abstract class AbstractType implements FormTypeInterface
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
}
public function finishView(FormView $view, FormInterface $form, array $options)
{
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
if (!$resolver instanceof OptionsResolver) {
throw new \InvalidArgumentException(sprintf('Custom resolver "%s" must extend "Symfony\Component\OptionsResolver\OptionsResolver".', get_class($resolver)));
}
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
}
public function getName()
{
return get_class($this);
}
public function getBlockPrefix()
{
$fqcn = get_class($this);
$name = $this->getName();
return $name !== $fqcn ? $name : StringUtil::fqcnToBlockPrefix($fqcn);
}
public function getParent()
{
return'Symfony\Component\Form\Extension\Core\Type\FormType';
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Sonata\CoreBundle\Form\DataTransformer\BooleanTypeToBooleanTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class BooleanType extends AbstractType
{
const TYPE_YES = 1;
const TYPE_NO = 2;
public function buildForm(FormBuilderInterface $builder, array $options)
{
if ($options['transform']) {
$builder->addModelTransformer(new BooleanTypeToBooleanTransformer());
}
if ($options['catalogue'] !=='SonataCoreBundle') {
@trigger_error('Option "catalogue" is deprecated since SonataCoreBundle 2.3.10 and will be removed in 4.0.'.' Use option "translation_domain" instead.',
E_USER_DEPRECATED
);
}
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$choices = array(
self::TYPE_YES =>'label_type_yes',
self::TYPE_NO =>'label_type_no',
);
$defaultOptions = array('transform'=> false,'catalogue'=>'SonataCoreBundle','translation_domain'=> function (Options $options) {
if ($options['catalogue']) {
return $options['catalogue'];
}
return $options['translation_domain'];
},
);
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
$defaultOptions['choice_translation_domain'] ='SonataCoreBundle';
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$defaultOptions['choices_as_values'] = true;
}
}
$defaultOptions['choices'] = $choices;
$resolver->setDefaults($defaultOptions);
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getBlockPrefix()
{
return'sonata_type_boolean';
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Sonata\CoreBundle\Form\EventListener\ResizeFormListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class CollectionType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$listener = new ResizeFormListener(
$options['type'],
$options['type_options'],
$options['modifiable'],
$options['pre_bind_data_callback']
);
$builder->addEventSubscriber($listener);
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['btn_add'] = $options['btn_add'];
$view->vars['btn_catalogue'] = $options['btn_catalogue'];
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('modifiable'=> false,'type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text','type_options'=> array(),'pre_bind_data_callback'=> null,'btn_add'=>'link_add','btn_catalogue'=>'SonataCoreBundle',
));
}
public function getBlockPrefix()
{
return'sonata_type_collection';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateRangeType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class() && get_class($this) !=='Sonata\CoreBundle\Form\Type\DateRangePickerType') {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$options['field_options_start'] = array_merge(
array('label'=>'date_range_start','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_start']
);
$options['field_options_end'] = array_merge(
array('label'=>'date_range_end','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_end']
);
$builder->add('start', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_start']));
$builder->add('end', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_end']));
}
public function getBlockPrefix()
{
return'sonata_type_date_range';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_options'=> array(),'field_options_start'=> array(),'field_options_end'=> array(),'field_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\DateType':'date',
));
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class DateTimeRangeType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class() && get_class($this) !=='Sonata\CoreBundle\Form\Type\DateTimeRangePickerType') {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function buildForm(FormBuilderInterface $builder, array $options)
{
$options['field_options_start'] = array_merge(
array('label'=>'date_range_start','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_start']
);
$options['field_options_end'] = array_merge(
array('label'=>'date_range_end','translation_domain'=>'SonataCoreBundle',
),
$options['field_options_end']
);
$builder->add('start', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_start']));
$builder->add('end', $options['field_type'], array_merge(array('required'=> false), $options['field_options'], $options['field_options_end']));
}
public function getBlockPrefix()
{
return'sonata_type_datetime_range';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('field_options'=> array(),'field_options_start'=> array(),'field_options_end'=> array(),'field_type'=> method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\DateTimeType':'datetime',
));
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class EqualType extends AbstractType
{
const TYPE_IS_EQUAL = 1;
const TYPE_IS_NOT_EQUAL = 2;
protected $translator;
public function __construct(TranslatorInterface $translator = null)
{
if ($translator !== null && get_class($this) !== get_class()) {
@trigger_error('The translator dependency in '.__CLASS__.' is deprecated since 3.1 and will be removed in 4.0. '.'Please prepare your dependencies for this change.',
E_USER_DEPRECATED
);
}
$this->translator = $translator;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$choices = array(
self::TYPE_IS_EQUAL =>'label_type_equals',
self::TYPE_IS_NOT_EQUAL =>'label_type_not_equals',
);
$defaultOptions = array('choice_translation_domain'=>'SonataCoreBundle',
);
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$defaultOptions['choices_as_values'] = true;
}
}
$defaultOptions['choices'] = $choices;
$resolver->setDefaults($defaultOptions);
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getBlockPrefix()
{
return'sonata_type_equal';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ImmutableArrayType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
foreach ($options['keys'] as $infos) {
if ($infos instanceof FormBuilderInterface) {
$builder->add($infos);
} else {
list($name, $type, $options) = $infos;
if (is_callable($options)) {
$extra = array_slice($infos, 3);
$options = $options($builder, $name, $type, $extra);
if ($options === null) {
$options = array();
} elseif (!is_array($options)) {
throw new \RuntimeException('the closure must return null or an array');
}
}
$builder->add($name, $type, $options);
}
}
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('keys'=> array(),
));
if (!method_exists('Symfony\Component\OptionsResolver\OptionsResolver','setDefault')) {
return;
}
$resolver->setAllowedValues('keys', function ($value) {
foreach ($value as $subValue) {
if (!$subValue instanceof FormBuilderInterface && (!is_array($subValue) || count($subValue) !== 3)) {
return false;
}
}
return true;
});
}
public function getBlockPrefix()
{
return'sonata_type_immutable_array';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\CoreBundle\Form\Type
{
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
class TranslatableChoiceType extends AbstractType
{
protected $translator;
public function __construct(TranslatorInterface $translator)
{
@trigger_error('Form type "sonata_type_translatable_choice" is deprecated since SonataCoreBundle 2.2.0 and will be'.' removed in 4.0. Use form type "choice" with "translation_domain" option instead.',
E_USER_DEPRECATED
);
$this->translator = $translator;
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('catalogue'=>'messages',
));
}
public function buildView(FormView $view, FormInterface $form, array $options)
{
$view->vars['translation_domain'] = $options['catalogue'];
}
public function getParent()
{
return method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix') ?'Symfony\Component\Form\Extension\Core\Type\ChoiceType':'choice';
}
public function getBlockPrefix()
{
return'sonata_type_translatable_choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Exception\BlockNotFoundException;
interface BlockLoaderInterface
{
public function load($name);
public function support($name);
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Exception\BlockNotFoundException;
class BlockLoaderChain implements BlockLoaderInterface
{
protected $loaders;
public function __construct(array $loaders)
{
$this->loaders = $loaders;
}
public function exists($type)
{
foreach ($this->loaders as $loader) {
if ($loader->exists($type)) {
return true;
}
}
return false;
}
public function load($block)
{
foreach ($this->loaders as $loader) {
if ($loader->support($block)) {
return $loader->load($block);
}
}
throw new BlockNotFoundException();
}
public function support($name)
{
return true;
}
}
}
namespace Sonata\BlockBundle\Block
{
use Symfony\Component\HttpFoundation\Response;
interface BlockRendererInterface
{
public function render(BlockContextInterface $name, Response $response = null);
}
}
namespace Sonata\BlockBundle\Block
{
use Psr\Log\LoggerInterface;
use Sonata\BlockBundle\Exception\Strategy\StrategyManagerInterface;
use Symfony\Component\HttpFoundation\Response;
class BlockRenderer implements BlockRendererInterface
{
protected $blockServiceManager;
protected $exceptionStrategyManager;
protected $logger;
protected $debug;
private $lastResponse;
public function __construct(BlockServiceManagerInterface $blockServiceManager, StrategyManagerInterface $exceptionStrategyManager, LoggerInterface $logger = null, $debug = false)
{
$this->blockServiceManager = $blockServiceManager;
$this->exceptionStrategyManager = $exceptionStrategyManager;
$this->logger = $logger;
$this->debug = $debug;
}
public function render(BlockContextInterface $blockContext, Response $response = null)
{
$block = $blockContext->getBlock();
if ($this->logger) {
$this->logger->info(sprintf('[cms::renderBlock] block.id=%d, block.type=%s ', $block->getId(), $block->getType()));
}
try {
$service = $this->blockServiceManager->get($block);
$service->load($block);
$response = $service->execute($blockContext, $this->createResponse($blockContext, $response));
if (!$response instanceof Response) {
$response = null;
throw new \RuntimeException('A block service must return a Response object');
}
$response = $this->addMetaInformation($response, $blockContext, $service);
} catch (\Exception $exception) {
if ($this->logger) {
$this->logger->error(sprintf('[cms::renderBlock] block.id=%d - error while rendering block - %s',
$block->getId(),
$exception->getMessage()
), compact('exception'));
}
$this->lastResponse = null;
$response = $this->exceptionStrategyManager->handleException($exception, $blockContext->getBlock(), $response);
}
return $response;
}
protected function createResponse(BlockContextInterface $blockContext, Response $response = null)
{
if (null === $response) {
$response = new Response();
}
if (($ttl = $blockContext->getBlock()->getTtl()) > 0) {
$response->setTtl($ttl);
}
return $response;
}
protected function addMetaInformation(Response $response, BlockContextInterface $blockContext, BlockServiceInterface $service)
{
if ($this->lastResponse && $this->lastResponse->isCacheable()) {
$response->setTtl($this->lastResponse->getTtl());
$response->setPublic();
} elseif ($this->lastResponse) { $response->setPrivate();
$response->setTtl(0);
$response->headers->removeCacheControlDirective('s-maxage');
$response->headers->removeCacheControlDirective('maxage');
}
if (!$blockContext->getBlock()->hasParent()) {
$this->lastResponse = null;
} else { $this->lastResponse = $response;
}
return $response;
}
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
interface BlockServiceInterface
{
public function execute(BlockContextInterface $blockContext, Response $response = null);
public function getName();
public function setDefaultSettings(OptionsResolverInterface $resolver);
public function load(BlockInterface $block);
public function getJavascripts($media);
public function getStylesheets($media);
public function getCacheKeys(BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Block
{
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
interface BlockServiceManagerInterface
{
public function add($name, $service, $contexts = array());
public function get(BlockInterface $block);
public function setServices(array $blockServices);
public function getServices();
public function getServicesByContext($name, $includeContainers = true);
public function has($name);
public function getService($name);
public function getLoadedServices();
public function validate(ErrorElement $errorElement, BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Block
{
use Psr\Log\LoggerInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\DependencyInjection\ContainerInterface;
class BlockServiceManager implements BlockServiceManagerInterface
{
protected $services;
protected $container;
protected $inValidate;
protected $contexts;
public function __construct(ContainerInterface $container, $debug, LoggerInterface $logger = null)
{
$this->services = array();
$this->contexts = array();
$this->container = $container;
}
public function get(BlockInterface $block)
{
$this->load($block->getType());
return $this->services[$block->getType()];
}
public function getService($id)
{
return $this->load($id);
}
public function has($id)
{
return isset($this->services[$id]) ? true : false;
}
public function add($name, $service, $contexts = array())
{
$this->services[$name] = $service;
foreach ($contexts as $context) {
if (!array_key_exists($context, $this->contexts)) {
$this->contexts[$context] = array();
}
$this->contexts[$context][] = $name;
}
}
public function setServices(array $blockServices)
{
foreach ($blockServices as $name => $service) {
$this->add($name, $service);
}
}
public function getServices()
{
foreach ($this->services as $name => $id) {
if (is_string($id)) {
$this->load($id);
}
}
return $this->sortServices($this->services);
}
public function getServicesByContext($context, $includeContainers = true)
{
if (!array_key_exists($context, $this->contexts)) {
return array();
}
$services = array();
$containers = $this->container->getParameter('sonata.block.container.types');
foreach ($this->contexts[$context] as $name) {
if (!$includeContainers && in_array($name, $containers)) {
continue;
}
$services[$name] = $this->getService($name);
}
return $this->sortServices($services);
}
public function getLoadedServices()
{
$services = array();
foreach ($this->services as $service) {
if (!$service instanceof BlockServiceInterface) {
continue;
}
$services[] = $service;
}
return $services;
}
public function validate(ErrorElement $errorElement, BlockInterface $block)
{
if (!$block->getId() && !$block->getType()) {
return;
}
if ($this->inValidate) {
return;
}
try {
$this->inValidate = true;
$this->get($block)->validateBlock($errorElement, $block);
$this->inValidate = false;
} catch (\Exception $e) {
$this->inValidate = false;
}
}
private function load($type)
{
if (!$this->has($type)) {
throw new \RuntimeException(sprintf('The block service `%s` does not exist', $type));
}
if (!$this->services[$type] instanceof BlockServiceInterface) {
$this->services[$type] = $this->container->get($type);
}
if (!$this->services[$type] instanceof BlockServiceInterface) {
throw new \RuntimeException(sprintf('The service %s does not implement BlockServiceInterface', $type));
}
return $this->services[$type];
}
private function sortServices($services)
{
uasort($services, function ($a, $b) {
if ($a->getName() == $b->getName()) {
return 0;
}
return ($a->getName() < $b->getName()) ? -1 : 1;
});
return $services;
}
}
}
namespace Sonata\BlockBundle\Block\Loader
{
use Sonata\BlockBundle\Block\BlockLoaderInterface;
use Sonata\BlockBundle\Model\Block;
class ServiceLoader implements BlockLoaderInterface
{
protected $types;
public function __construct(array $types)
{
$this->types = $types;
}
public function exists($type)
{
return in_array($type, $this->types, true);
}
public function load($configuration)
{
if (!in_array($configuration['type'], $this->types)) {
throw new \RuntimeException(sprintf('The block type "%s" does not exist',
$configuration['type']
));
}
$block = new Block();
$block->setId(uniqid());
$block->setType($configuration['type']);
$block->setEnabled(true);
$block->setCreatedAt(new \DateTime());
$block->setUpdatedAt(new \DateTime());
$block->setSettings(isset($configuration['settings']) ? $configuration['settings'] : array());
return $block;
}
public function support($configuration)
{
if (!is_array($configuration)) {
return false;
}
if (!isset($configuration['type'])) {
return false;
}
return true;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
interface BlockServiceInterface extends \Sonata\BlockBundle\Block\BlockServiceInterface
{
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
abstract class AbstractBlockService implements BlockServiceInterface
{
protected $name;
protected $templating;
public function __construct($name = null, EngineInterface $templating = null)
{
if (null === $name || null === $templating) {
@trigger_error('The $name and $templating parameters will be required fields with the 4.0 release.',
E_USER_DEPRECATED
);
}
$this->name = $name;
$this->templating = $templating;
}
public function renderResponse($view, array $parameters = array(), Response $response = null)
{
return $this->getTemplating()->renderResponse($view, $parameters, $response);
}
public function renderPrivateResponse($view, array $parameters = array(), Response $response = null)
{
return $this->renderResponse($view, $parameters, $response)
->setTtl(0)
->setPrivate()
;
}
public function setDefaultSettings(OptionsResolverInterface $resolver)
{
$this->configureSettings($resolver);
}
public function configureSettings(OptionsResolver $resolver)
{
}
public function getCacheKeys(BlockInterface $block)
{
return array('block_id'=> $block->getId(),'updated_at'=> $block->getUpdatedAt() ? $block->getUpdatedAt()->format('U') : strtotime('now'),
);
}
public function load(BlockInterface $block)
{
}
public function getJavascripts($media)
{
return array();
}
public function getStylesheets($media)
{
return array();
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return $this->renderResponse($blockContext->getTemplate(), array('block_context'=> $blockContext,'block'=> $blockContext->getBlock(),
), $response);
}
public function getName()
{
return $this->name;
}
public function getTemplating()
{
return $this->templating;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\HttpFoundation\Response;
class EmptyBlockService extends AbstractBlockService
{
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
throw new \RuntimeException('Not used, this block renders an empty result if no block document can be found');
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
throw new \RuntimeException('Not used, this block renders an empty result if no block document can be found');
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return new Response();
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\MetadataInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
interface AdminBlockServiceInterface extends BlockServiceInterface
{
public function buildEditForm(FormMapper $form, BlockInterface $block);
public function buildCreateForm(FormMapper $form, BlockInterface $block);
public function validateBlock(ErrorElement $errorElement, BlockInterface $block);
public function getBlockMetadata($code = null);
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
abstract class AbstractAdminBlockService extends AbstractBlockService implements AdminBlockServiceInterface
{
public function __construct($name, EngineInterface $templating)
{
parent::__construct($name, $templating);
}
public function buildCreateForm(FormMapper $formMapper, BlockInterface $block)
{
$this->buildEditForm($formMapper, $block);
}
public function prePersist(BlockInterface $block)
{
}
public function postPersist(BlockInterface $block)
{
}
public function preUpdate(BlockInterface $block)
{
}
public function postUpdate(BlockInterface $block)
{
}
public function preRemove(BlockInterface $block)
{
}
public function postRemove(BlockInterface $block)
{
}
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-file'));
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class RssBlockService extends AbstractAdminBlockService
{
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('url'=> false,'title'=>'Insert the rss title','template'=>'SonataBlockBundle:Block:block_core_rss.html.twig',
));
}
public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
{
$formMapper->add('settings','sonata_type_immutable_array', array('keys'=> array(
array('url','url', array('required'=> false)),
array('title','text', array('required'=> false)),
),
));
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
$errorElement
->with('settings[url]')
->assertNotNull(array())
->assertNotBlank()
->end()
->with('settings[title]')
->assertNotNull(array())
->assertNotBlank()
->assertLength(array('max'=> 50))
->end();
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
$settings = $blockContext->getSettings();
$feeds = false;
if ($settings['url']) {
$options = array('http'=> array('user_agent'=>'Sonata/RSS Reader','timeout'=> 2,
),
);
$content = @file_get_contents($settings['url'], false, stream_context_create($options));
if ($content) {
try {
$feeds = new \SimpleXMLElement($content);
$feeds = $feeds->channel->item;
} catch (\Exception $e) {
}
}
}
return $this->renderResponse($blockContext->getTemplate(), array('feeds'=> $feeds,'block'=> $blockContext->getBlock(),'settings'=> $settings,
), $response);
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-rss-square',
));
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Knp\Menu\ItemInterface;
use Knp\Menu\Provider\MenuProviderInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Menu\MenuRegistryInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class MenuBlockService extends AbstractAdminBlockService
{
protected $menuProvider;
protected $menus;
protected $menuRegistry;
public function __construct($name, EngineInterface $templating, MenuProviderInterface $menuProvider, $menuRegistry)
{
parent::__construct($name, $templating);
$this->menuProvider = $menuProvider;
if ($menuRegistry instanceof MenuRegistryInterface) {
$this->menuRegistry = $menuRegistry;
} else {
@trigger_error('Initializing '.__CLASS__.' with an array parameter is deprecated since 3.x and will be removed in 4.0.',
E_USER_DEPRECATED
);
$this->menus = $menuRegistry;
}
}
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
$responseSettings = array('menu'=> $this->getMenu($blockContext),'menu_options'=> $this->getMenuOptions($blockContext->getSettings()),'block'=> $blockContext->getBlock(),'context'=> $blockContext,
);
if ('private'=== $blockContext->getSettings('cache_policy')) {
return $this->renderPrivateResponse($blockContext->getTemplate(), $responseSettings, $response);
}
return $this->renderResponse($blockContext->getTemplate(), $responseSettings, $response);
}
public function buildEditForm(FormMapper $form, BlockInterface $block)
{
$form->add('settings','sonata_type_immutable_array', array('keys'=> $this->getFormSettingsKeys(),
));
}
public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
{
if (($name = $block->getSetting('menu_name')) && $name !==''&& !$this->menuProvider->has($name)) {
$errorElement->with('menu_name')
->addViolation('sonata.block.menu.not_existing', array('name'=> $name))
->end();
}
}
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('title'=> $this->getName(),'cache_policy'=>'public','template'=>'SonataBlockBundle:Block:block_core_menu.html.twig','menu_name'=>'','safe_labels'=> false,'current_class'=>'active','first_class'=> false,'last_class'=> false,'current_uri'=> null,'menu_class'=>'list-group','children_class'=>'list-group-item','menu_template'=> null,
));
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-bars',
));
}
protected function getFormSettingsKeys()
{
$choiceOptions = array('required'=> false,
);
$choices = $this->menus;
if (count($choices) == 0) {
$choices = $this->menuRegistry->getAliasNames();
}
if (method_exists('Symfony\Component\Form\AbstractType','configureOptions')) {
$choices = array_flip($choices);
if (method_exists('Symfony\Component\Form\FormTypeInterface','setDefaultOptions')) {
$choiceOptions['choices_as_values'] = true;
}
}
$choiceOptions['choices'] = $choices;
return array(
array('title','text', array('required'=> false)),
array('cache_policy','choice', array('choices'=> array('public','private'))),
array('menu_name','choice', $choiceOptions),
array('safe_labels','checkbox', array('required'=> false)),
array('current_class','text', array('required'=> false)),
array('first_class','text', array('required'=> false)),
array('last_class','text', array('required'=> false)),
array('menu_class','text', array('required'=> false)),
array('children_class','text', array('required'=> false)),
array('menu_template','text', array('required'=> false)),
);
}
protected function getMenu(BlockContextInterface $blockContext)
{
$settings = $blockContext->getSettings();
return $settings['menu_name'];
}
protected function getMenuOptions(array $settings)
{
$mapping = array('current_class'=>'currentClass','first_class'=>'firstClass','last_class'=>'lastClass','safe_labels'=>'allow_safe_labels','menu_template'=>'template',
);
$options = array();
foreach ($settings as $key => $value) {
if (array_key_exists($key, $mapping) && null !== $value) {
$options[$mapping[$key]] = $value;
}
}
return $options;
}
}
}
namespace Sonata\BlockBundle\Block\Service
{
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\CoreBundle\Model\Metadata;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
class TextBlockService extends AbstractAdminBlockService
{
public function execute(BlockContextInterface $blockContext, Response $response = null)
{
return $this->renderResponse($blockContext->getTemplate(), array('block'=> $blockContext->getBlock(),'settings'=> $blockContext->getSettings(),
), $response);
}
public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
{
$formMapper->add('settings','sonata_type_immutable_array', array('keys'=> array(
array('content','textarea', array()),
),
));
}
public function configureSettings(OptionsResolver $resolver)
{
$resolver->setDefaults(array('content'=>'Insert your custom content here','template'=>'SonataBlockBundle:Block:block_core_text.html.twig',
));
}
public function getBlockMetadata($code = null)
{
return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false,'SonataBlockBundle', array('class'=>'fa fa-file-text-o',
));
}
}
}
namespace Sonata\BlockBundle\Exception
{
interface BlockExceptionInterface
{
}
}
namespace Symfony\Component\HttpKernel\Exception
{
interface HttpExceptionInterface
{
public function getStatusCode();
public function getHeaders();
}
}
namespace Symfony\Component\HttpKernel\Exception
{
class HttpException extends \RuntimeException implements HttpExceptionInterface
{
private $statusCode;
private $headers;
public function __construct($statusCode, $message = null, \Exception $previous = null, array $headers = array(), $code = 0)
{
$this->statusCode = $statusCode;
$this->headers = $headers;
parent::__construct($message, $code, $previous);
}
public function getStatusCode()
{
return $this->statusCode;
}
public function getHeaders()
{
return $this->headers;
}
}
}
namespace Symfony\Component\HttpKernel\Exception
{
class NotFoundHttpException extends HttpException
{
public function __construct($message = null, \Exception $previous = null, $code = 0)
{
parent::__construct(404, $message, $previous, array(), $code);
}
}
}
namespace Sonata\BlockBundle\Exception
{
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class BlockNotFoundException extends NotFoundHttpException
{
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
interface FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block);
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class DebugOnlyFilter implements FilterInterface
{
protected $debug;
public function __construct($debug)
{
$this->debug = $debug;
}
public function handle(\Exception $exception, BlockInterface $block)
{
return $this->debug ? true : false;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class IgnoreClassFilter implements FilterInterface
{
protected $class;
public function __construct($class)
{
$this->class = $class;
}
public function handle(\Exception $exception, BlockInterface $block)
{
return !$exception instanceof $this->class;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class KeepAllFilter implements FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block)
{
return true;
}
}
}
namespace Sonata\BlockBundle\Exception\Filter
{
use Sonata\BlockBundle\Model\BlockInterface;
class KeepNoneFilter implements FilterInterface
{
public function handle(\Exception $exception, BlockInterface $block)
{
return false;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
interface RendererInterface
{
public function render(\Exception $exception, BlockInterface $block, Response $response = null);
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
class InlineDebugRenderer implements RendererInterface
{
protected $templating;
protected $template;
protected $forceStyle;
protected $debug;
public function __construct(EngineInterface $templating, $template, $debug, $forceStyle = true)
{
$this->templating = $templating;
$this->template = $template;
$this->debug = $debug;
$this->forceStyle = $forceStyle;
}
public function render(\Exception $exception, BlockInterface $block, Response $response = null)
{
$response = $response ?: new Response();
if (!$this->debug) {
return $response;
}
$flattenException = FlattenException::create($exception);
$code = $flattenException->getStatusCode();
$parameters = array('exception'=> $flattenException,'status_code'=> $code,'status_text'=> isset(Response::$statusTexts[$code]) ? Response::$statusTexts[$code] :'','logger'=> false,'currentContent'=> false,'block'=> $block,'forceStyle'=> $this->forceStyle,
);
$content = $this->templating->render($this->template, $parameters);
$response->setContent($content);
return $response;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
class InlineRenderer implements RendererInterface
{
protected $templating;
protected $template;
public function __construct(EngineInterface $templating, $template)
{
$this->templating = $templating;
$this->template = $template;
}
public function render(\Exception $exception, BlockInterface $block, Response $response = null)
{
$parameters = array('exception'=> $exception,'block'=> $block,
);
$content = $this->templating->render($this->template, $parameters);
$response = $response ?: new Response();
$response->setContent($content);
return $response;
}
}
}
namespace Sonata\BlockBundle\Exception\Renderer
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
class MonkeyThrowRenderer implements RendererInterface
{
public function render(\Exception $banana, BlockInterface $block, Response $response = null)
{
throw $banana;
}
}
}
namespace Sonata\BlockBundle\Exception\Strategy
{
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
interface StrategyManagerInterface
{
public function handleException(\Exception $exception, BlockInterface $block, Response $response = null);
}
}
namespace Sonata\BlockBundle\Exception\Strategy
{
use Sonata\BlockBundle\Exception\Filter\FilterInterface;
use Sonata\BlockBundle\Exception\Renderer\RendererInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
class StrategyManager implements StrategyManagerInterface
{
protected $container;
protected $filters;
protected $renderers;
protected $blockFilters;
protected $blockRenderers;
protected $defaultFilter;
protected $defaultRenderer;
public function __construct(ContainerInterface $container, array $filters, array $renderers, array $blockFilters, array $blockRenderers)
{
$this->container = $container;
$this->filters = $filters;
$this->renderers = $renderers;
$this->blockFilters = $blockFilters;
$this->blockRenderers = $blockRenderers;
}
public function setDefaultFilter($name)
{
if (!array_key_exists($name, $this->filters)) {
throw new \InvalidArgumentException(sprintf('Cannot set default exception filter "%s". It does not exist.', $name));
}
$this->defaultFilter = $name;
}
public function setDefaultRenderer($name)
{
if (!array_key_exists($name, $this->renderers)) {
throw new \InvalidArgumentException(sprintf('Cannot set default exception renderer "%s". It does not exist.', $name));
}
$this->defaultRenderer = $name;
}
public function handleException(\Exception $exception, BlockInterface $block, Response $response = null)
{
$response = $response ?: new Response();
$response->setPrivate();
$filter = $this->getBlockFilter($block);
if ($filter->handle($exception, $block)) {
$renderer = $this->getBlockRenderer($block);
$response = $renderer->render($exception, $block, $response);
}
return $response;
}
public function getBlockRenderer(BlockInterface $block)
{
$type = $block->getType();
$name = isset($this->blockRenderers[$type]) ? $this->blockRenderers[$type] : $this->defaultRenderer;
$service = $this->getRendererService($name);
if (!$service instanceof RendererInterface) {
throw new \RuntimeException(sprintf('The service "%s" is not an exception renderer', $name));
}
return $service;
}
public function getBlockFilter(BlockInterface $block)
{
$type = $block->getType();
$name = isset($this->blockFilters[$type]) ? $this->blockFilters[$type] : $this->defaultFilter;
$service = $this->getFilterService($name);
if (!$service instanceof FilterInterface) {
throw new \RuntimeException(sprintf('The service "%s" is not an exception filter', $name));
}
return $service;
}
protected function getFilterService($name)
{
if (!isset($this->filters[$name])) {
throw new \RuntimeException('The filter "%s" does not exist.');
}
return $this->container->get($this->filters[$name]);
}
protected function getRendererService($name)
{
if (!isset($this->renderers[$name])) {
throw new \RuntimeException('The renderer "%s" does not exist.');
}
return $this->container->get($this->renderers[$name]);
}
}
}
namespace Sonata\BlockBundle\Form\Type
{
use Sonata\BlockBundle\Block\BlockServiceManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ServiceListType extends AbstractType
{
protected $manager;
public function __construct(BlockServiceManagerInterface $manager)
{
$this->manager = $manager;
}
public function getBlockPrefix()
{
return'sonata_block_service_choice';
}
public function getName()
{
return $this->getBlockPrefix();
}
public function getParent()
{
return'choice';
}
public function setDefaultOptions(OptionsResolverInterface $resolver)
{
$this->configureOptions($resolver);
}
public function configureOptions(OptionsResolver $resolver)
{
$manager = $this->manager;
$resolver->setRequired(array('context',
));
$resolver->setDefaults(array('multiple'=> false,'expanded'=> false,'choices'=> function (Options $options, $previousValue) use ($manager) {
$types = array();
foreach ($manager->getServicesByContext($options['context'], $options['include_containers']) as $code => $service) {
$types[$code] = sprintf('%s - %s', $service->getName(), $code);
}
return $types;
},'preferred_choices'=> array(),'empty_data'=> function (Options $options) {
$multiple = isset($options['multiple']) && $options['multiple'];
$expanded = isset($options['expanded']) && $options['expanded'];
return $multiple || $expanded ? array() :'';
},'empty_value'=> function (Options $options, $previousValue) {
$multiple = isset($options['multiple']) && $options['multiple'];
$expanded = isset($options['expanded']) && $options['expanded'];
return $multiple || $expanded || !isset($previousValue) ? null :'';
},'error_bubbling'=> false,'include_containers'=> false,
));
}
}
}
namespace Sonata\BlockBundle\Model
{
use Doctrine\Common\Collections\Collection;
interface BlockInterface
{
public function setId($id);
public function getId();
public function setName($name);
public function getName();
public function setType($type);
public function getType();
public function setEnabled($enabled);
public function getEnabled();
public function setPosition($position);
public function getPosition();
public function setCreatedAt(\DateTime $createdAt = null);
public function getCreatedAt();
public function setUpdatedAt(\DateTime $updatedAt = null);
public function getUpdatedAt();
public function getTtl();
public function setSettings(array $settings = array());
public function getSettings();
public function setSetting($name, $value);
public function getSetting($name, $default = null);
public function addChildren(BlockInterface $children);
public function getChildren();
public function hasChildren();
public function setParent(BlockInterface $parent = null);
public function getParent();
public function hasParent();
}
}
namespace Sonata\BlockBundle\Model
{
abstract class BaseBlock implements BlockInterface
{
protected $name;
protected $settings;
protected $enabled;
protected $position;
protected $parent;
protected $children;
protected $createdAt;
protected $updatedAt;
protected $type;
protected $ttl;
public function __construct()
{
$this->settings = array();
$this->enabled = false;
$this->children = array();
}
public function __toString()
{
return sprintf('%s ~ #%s', $this->getname(), $this->getId());
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setType($type)
{
$this->type = $type;
}
public function getType()
{
return $this->type;
}
public function setSettings(array $settings = array())
{
$this->settings = $settings;
}
public function getSettings()
{
return $this->settings;
}
public function setSetting($name, $value)
{
$this->settings[$name] = $value;
}
public function getSetting($name, $default = null)
{
return isset($this->settings[$name]) ? $this->settings[$name] : $default;
}
public function setEnabled($enabled)
{
$this->enabled = $enabled;
}
public function getEnabled()
{
return $this->enabled;
}
public function setPosition($position)
{
$this->position = $position;
}
public function getPosition()
{
return $this->position;
}
public function setCreatedAt(\DateTime $createdAt = null)
{
$this->createdAt = $createdAt;
}
public function getCreatedAt()
{
return $this->createdAt;
}
public function setUpdatedAt(\DateTime $updatedAt = null)
{
$this->updatedAt = $updatedAt;
}
public function getUpdatedAt()
{
return $this->updatedAt;
}
public function addChildren(BlockInterface $child)
{
$this->children[] = $child;
$child->setParent($this);
}
public function getChildren()
{
return $this->children;
}
public function setParent(BlockInterface $parent = null)
{
$this->parent = $parent;
}
public function getParent()
{
return $this->parent;
}
public function hasParent()
{
return $this->getParent() instanceof self;
}
public function getTtl()
{
if (!$this->getSetting('use_cache', true)) {
return 0;
}
$ttl = $this->getSetting('ttl', 86400);
foreach ($this->getChildren() as $block) {
$blockTtl = $block->getTtl();
$ttl = ($blockTtl < $ttl) ? $blockTtl : $ttl;
}
$this->ttl = $ttl;
return $this->ttl;
}
public function hasChildren()
{
return count($this->children) > 0;
}
}
}
namespace Sonata\BlockBundle\Model
{
class Block extends BaseBlock
{
protected $id;
public function setId($id)
{
$this->id = $id;
}
public function getId()
{
return $this->id;
}
}
}
namespace Sonata\CoreBundle\Model
{
use Doctrine\DBAL\Connection;
interface ManagerInterface
{
public function getClass();
public function findAll();
public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
public function findOneBy(array $criteria, array $orderBy = null);
public function find($id);
public function create();
public function save($entity, $andFlush = true);
public function delete($entity, $andFlush = true);
public function getTableName();
public function getConnection();
}
}
namespace Sonata\CoreBundle\Model
{
use Sonata\DatagridBundle\Pager\PagerInterface;
interface PageableManagerInterface
{
public function getPager(array $criteria, $page, $limit = 10, array $sort = array());
}
}
namespace Sonata\BlockBundle\Model
{
use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;
interface BlockManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
}
namespace Sonata\BlockBundle\Model
{
class EmptyBlock extends Block
{
}
}
namespace Sonata\BlockBundle\Twig\Extension
{
use Sonata\BlockBundle\Templating\Helper\BlockHelper;
class BlockExtension extends \Twig_Extension
{
protected $blockHelper;
public function __construct(BlockHelper $blockHelper)
{
$this->blockHelper = $blockHelper;
}
public function getFunctions()
{
return array(
new \Twig_SimpleFunction('sonata_block_exists',
array($this->blockHelper,'exists')
),
new \Twig_SimpleFunction('sonata_block_render',
array($this->blockHelper,'render'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_render_event',
array($this->blockHelper,'renderEvent'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_include_javascripts',
array($this->blockHelper,'includeJavascripts'),
array('is_safe'=> array('html'))
),
new \Twig_SimpleFunction('sonata_block_include_stylesheets',
array($this->blockHelper,'includeStylesheets'),
array('is_safe'=> array('html'))
),
);
}
public function getName()
{
return'sonata_block';
}
}
}
namespace Sonata\BlockBundle\Twig
{
class GlobalVariables
{
protected $templates;
public function __construct(array $templates)
{
$this->templates = $templates;
}
public function getTemplates()
{
return $this->templates;
}
}
}
namespace Sonata\MediaBundle\CDN
{
interface CDNInterface
{
const STATUS_OK = 1;
const STATUS_TO_SEND = 2;
const STATUS_TO_FLUSH = 3;
const STATUS_ERROR = 4;
const STATUS_WAITING = 5;
public function getPath($relativePath, $isFlushable);
public function flush($string);
public function flushByString($string);
public function flushPaths(array $paths);
public function getFlushStatus($identifier);
}
}
namespace Sonata\MediaBundle\CDN
{
use Aws\CloudFront\CloudFrontClient;
use Aws\CloudFront\Exception\CloudFrontException;
class CloudFront implements CDNInterface
{
protected $path;
protected $key;
protected $secret;
protected $distributionId;
protected $client;
public function __construct($path, $key, $secret, $distributionId)
{
$this->path = $path;
$this->key = $key;
$this->secret = $secret;
$this->distributionId = $distributionId;
}
public function getPath($relativePath, $isFlushable = false)
{
return sprintf('%s/%s', rtrim($this->path,'/'), ltrim($relativePath,'/'));
}
public function flushByString($string)
{
return $this->flushPaths(array($string));
}
public function flush($string)
{
return $this->flushPaths(array($string));
}
public function flushPaths(array $paths)
{
if (empty($paths)) {
throw new \RuntimeException('Unable to flush : expected at least one path');
}
$normalizedPaths = array_map(function ($path) {
return'/'.ltrim($path,'/');
}, $paths);
try {
$result = $this->getClient()->createInvalidation(array('DistributionId'=> $this->distributionId,'Paths'=> array('Quantity'=> count($normalizedPaths),'Items'=> $normalizedPaths,
),'CallerReference'=> $this->getCallerReference($normalizedPaths),
));
if (!in_array($status = $result->get('Status'), array('Completed','InProgress'))) {
throw new \RuntimeException('Unable to flush : '.$status);
}
return $result->get('Id');
} catch (CloudFrontException $ex) {
throw new \RuntimeException('Unable to flush : '.$ex->getMessage());
}
}
public function setClient($client)
{
if (!$client instanceof CloudFrontClient) {
@trigger_error('The '.__METHOD__.' expects a CloudFrontClient as parameter.', E_USER_DEPRECATED);
}
$this->client = $client;
}
public function getFlushStatus($identifier)
{
try {
$result = $this->getClient()->getInvalidation(array('DistributionId'=> $this->distributionId,'Id'=> $identifier,
));
return array_search($result->get('Status'), self::getStatusList());
} catch (CloudFrontException $ex) {
throw new \RuntimeException('Unable to retrieve flush status : '.$ex->getMessage());
}
}
public static function getStatusList()
{
return array(
self::STATUS_OK =>'Completed',
self::STATUS_TO_SEND =>'STATUS_TO_SEND',
self::STATUS_TO_FLUSH =>'STATUS_TO_FLUSH',
self::STATUS_ERROR =>'STATUS_ERROR',
self::STATUS_WAITING =>'InProgress',
);
}
protected function getCallerReference(array $paths)
{
sort($paths);
return md5(implode(',', $paths));
}
private function getClient()
{
if (!$this->client) {
$this->client = CloudFrontClient::factory(array('key'=> $this->key,'secret'=> $this->secret,
));
}
return $this->client;
}
}
}
namespace Sonata\MediaBundle\CDN
{
class Fallback implements CDNInterface
{
protected $cdn;
protected $fallback;
public function __construct(CDNInterface $cdn, CDNInterface $fallback)
{
$this->cdn = $cdn;
$this->fallback = $fallback;
}
public function getPath($relativePath, $isFlushable)
{
if ($isFlushable) {
return $this->fallback->getPath($relativePath, $isFlushable);
}
return $this->cdn->getPath($relativePath, $isFlushable);
}
public function flushByString($string)
{
return $this->cdn->flushByString($string);
}
public function flush($string)
{
return $this->cdn->flush($string);
}
public function flushPaths(array $paths)
{
return $this->cdn->flushPaths($paths);
}
public function getFlushStatus($identifier)
{
return $this->cdn->getFlushStatus($identifier);
}
}
}
namespace Sonata\MediaBundle\CDN
{
class PantherPortal implements CDNInterface
{
protected $path;
protected $username;
protected $password;
protected $siteId;
protected $client;
protected $wsdl;
public function __construct($path, $username, $password, $siteId, $wsdl ='https://pantherportal.cdnetworks.com/wsdl/flush.wsdl')
{
$this->path = $path;
$this->username = $username;
$this->password = $password;
$this->siteId = $siteId;
$this->wsdl = $wsdl;
}
public function getPath($relativePath, $isFlushable)
{
return sprintf('%s/%s', $this->path, $relativePath);
}
public function flushByString($string)
{
$this->flushPaths(array($string));
}
public function flush($string)
{
$this->flushPaths(array($string));
}
public function flushPaths(array $paths)
{
$result = $this->getClient()->flush($this->username, $this->password,'paths', $this->siteId, implode("\n", $paths), true, false);
if ($result !='Flush successfully submitted.') {
throw new \RuntimeException('Unable to flush : '.$result);
}
}
public function setClient($client)
{
$this->client = $client;
}
public function getFlushStatus($identifier)
{
}
private function getClient()
{
if (!$this->client) {
$this->client = new \SoapClient($this->wsdl);
}
return $this->client;
}
}
}
namespace Sonata\MediaBundle\CDN
{
class Server implements CDNInterface
{
protected $path;
public function __construct($path)
{
$this->path = $path;
}
public function getPath($relativePath, $isFlushable)
{
return sprintf('%s/%s', rtrim($this->path,'/'), ltrim($relativePath,'/'));
}
public function flushByString($string)
{
}
public function flush($string)
{
}
public function flushPaths(array $paths)
{
}
public function getFlushStatus($identifier)
{
}
}
}
namespace Sonata\MediaBundle\Extra
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Model\MediaManagerInterface;
use Sonata\MediaBundle\Provider\MediaProviderInterface;
use Sonata\MediaBundle\Provider\Pool;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Templating\EngineInterface;
class Pixlr
{
protected $referrer;
protected $secret;
protected $mediaManager;
protected $router;
protected $pool;
protected $templating;
protected $container;
protected $validFormats;
protected $allowEreg;
public function __construct($referrer, $secret, Pool $pool, MediaManagerInterface $mediaManager, RouterInterface $router, EngineInterface $templating, ContainerInterface $container)
{
$this->referrer = $referrer;
$this->secret = $secret;
$this->mediaManager = $mediaManager;
$this->router = $router;
$this->pool = $pool;
$this->templating = $templating;
$this->container = $container;
$this->validFormats = array('jpg','jpeg','png');
$this->allowEreg ='@https?://([a-zA-Z0-9]*).pixlr.com/_temp/[0-9a-z]{24}\.[a-z]*@';
}
public function editAction($id, $mode)
{
if (!in_array($mode, array('express','editor'))) {
throw new NotFoundHttpException('Invalid mode');
}
$media = $this->getMedia($id);
$provider = $this->pool->getProvider($media->getProviderName());
$hash = $this->generateHash($media);
$parameters = array('s'=>'c','referrer'=> $this->referrer,'exit'=> $this->router->generate('sonata_media_pixlr_exit', array('hash'=> $hash,'id'=> $media->getId()), UrlGeneratorInterface::ABSOLUTE_URL),'image'=> $provider->generatePublicUrl($media, MediaProviderInterface::FORMAT_REFERENCE),'title'=> $media->getName(),'target'=> $this->router->generate('sonata_media_pixlr_target', array('hash'=> $hash,'id'=> $media->getId()), UrlGeneratorInterface::ABSOLUTE_URL),'locktitle'=> true,'locktarget'=> true,
);
$url = sprintf('https://pixlr.com/%s/?%s', $mode, $this->buildQuery($parameters));
return new RedirectResponse($url);
}
public function exitAction($hash, $id)
{
$media = $this->getMedia($id);
$this->checkMedia($hash, $media);
return new Response($this->templating->render('SonataMediaBundle:Extra:pixlr_exit.html.twig'));
}
public function targetAction(Request $request, $hash, $id)
{
$media = $this->getMedia($id);
$this->checkMedia($hash, $media);
$provider = $this->pool->getProvider($media->getProviderName());
if (!preg_match($this->allowEreg, $request->get('image'), $matches)) {
throw new NotFoundHttpException(sprintf('Invalid image host : %s', $request->get('image')));
}
$file = $provider->getReferenceFile($media);
$file->setContent(file_get_contents($request->get('image')));
$provider->updateMetadata($media);
$provider->generateThumbnails($media);
$this->mediaManager->save($media);
return new Response($this->templating->render('SonataMediaBundle:Extra:pixlr_exit.html.twig'));
}
public function isEditable(MediaInterface $media)
{
if (!$this->container->get('sonata.media.admin.media')->isGranted('EDIT', $media)) {
return false;
}
return in_array(strtolower($media->getExtension()), $this->validFormats);
}
public function openEditorAction($id)
{
$media = $this->getMedia($id);
if (!$this->isEditable($media)) {
throw new NotFoundHttpException('The media is not editable');
}
return new Response($this->templating->render('SonataMediaBundle:Extra:pixlr_editor.html.twig', array('media'=> $media,'admin_pool'=> $this->container->get('sonata.admin.pool'),
)));
}
private function generateHash(MediaInterface $media)
{
return sha1($media->getId().$media->getCreatedAt()->format('u').$this->secret);
}
private function getMedia($id)
{
$media = $this->mediaManager->findOneBy(array('id'=> $id));
if (!$media) {
throw new NotFoundHttpException('Media not found');
}
return $media;
}
private function checkMedia($hash, MediaInterface $media)
{
if ($hash != $this->generateHash($media)) {
throw new NotFoundHttpException('Invalid hash');
}
if (!$this->isEditable($media)) {
throw new NotFoundHttpException('Media is not editable');
}
}
private function buildQuery(array $parameters = array())
{
$query = array();
foreach ($parameters as $name => $value) {
$query[] = sprintf('%s=%s', $name, $value);
}
return implode('&', $query);
}
}
}
namespace Gaufrette\Adapter
{
interface MimeTypeProvider
{
public function mimeType($key);
}
}
namespace Gaufrette\Adapter
{
interface SizeCalculator
{
public function size($key);
}
}
namespace Gaufrette\Adapter
{
interface ChecksumCalculator
{
public function checksum($key);
}
}
namespace Gaufrette\Adapter
{
interface StreamFactory
{
public function createStream($key);
}
}
namespace Gaufrette
{
interface Adapter
{
public function read($key);
public function write($key, $content);
public function exists($key);
public function keys();
public function mtime($key);
public function delete($key);
public function rename($sourceKey, $targetKey);
public function isDirectory($key);
}
}
namespace Gaufrette\Adapter
{
use Gaufrette\Util;
use Gaufrette\Adapter;
use Gaufrette\Stream;
class Local implements Adapter,
StreamFactory,
ChecksumCalculator,
SizeCalculator,
MimeTypeProvider
{
protected $directory;
private $create;
private $mode;
public function __construct($directory, $create = false, $mode = 0777)
{
$this->directory = Util\Path::normalize($directory);
if (is_link($this->directory)) {
$this->directory = realpath($this->directory);
}
$this->create = $create;
$this->mode = $mode;
}
public function read($key)
{
return file_get_contents($this->computePath($key));
}
public function write($key, $content)
{
$path = $this->computePath($key);
$this->ensureDirectoryExists(\Gaufrette\Util\Path::dirname($path), true);
return file_put_contents($path, $content);
}
public function rename($sourceKey, $targetKey)
{
$targetPath = $this->computePath($targetKey);
$this->ensureDirectoryExists(\Gaufrette\Util\Path::dirname($targetPath), true);
return rename($this->computePath($sourceKey), $targetPath);
}
public function exists($key)
{
return file_exists($this->computePath($key));
}
public function keys()
{
$this->ensureDirectoryExists($this->directory, $this->create);
try {
$files = new \RecursiveIteratorIterator(
new \RecursiveDirectoryIterator(
$this->directory,
\FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS
),
\RecursiveIteratorIterator::CHILD_FIRST
);
} catch (\Exception $e) {
$files = new \EmptyIterator();
}
$keys = array();
foreach ($files as $file) {
$keys[] = $this->computeKey($file);
}
sort($keys);
return $keys;
}
public function mtime($key)
{
return filemtime($this->computePath($key));
}
public function delete($key)
{
if ($this->isDirectory($key)) {
return rmdir($this->computePath($key));
}
return unlink($this->computePath($key));
}
public function isDirectory($key)
{
return is_dir($this->computePath($key));
}
public function createStream($key)
{
return new Stream\Local($this->computePath($key));
}
public function checksum($key)
{
return Util\Checksum::fromFile($this->computePath($key));
}
public function size($key)
{
return Util\Size::fromFile($this->computePath($key));
}
public function mimeType($key)
{
$fileInfo = new \finfo(FILEINFO_MIME_TYPE);
return $fileInfo->file($this->computePath($key));
}
public function computeKey($path)
{
$path = $this->normalizePath($path);
return ltrim(substr($path, strlen($this->directory)),'/');
}
protected function computePath($key)
{
$this->ensureDirectoryExists($this->directory, $this->create);
return $this->normalizePath($this->directory.'/'.$key);
}
protected function normalizePath($path)
{
$path = Util\Path::normalize($path);
if (0 !== strpos($path, $this->directory)) {
throw new \OutOfBoundsException(sprintf('The path "%s" is out of the filesystem.', $path));
}
return $path;
}
protected function ensureDirectoryExists($directory, $create = false)
{
if (!is_dir($directory)) {
if (!$create) {
throw new \RuntimeException(sprintf('The directory "%s" does not exist.', $directory));
}
$this->createDirectory($directory);
}
}
protected function createDirectory($directory)
{
$created = mkdir($directory, $this->mode, true);
if (!$created) {
if (!is_dir($directory)) {
throw new \RuntimeException(sprintf('The directory \'%s\' could not be created.', $directory));
}
}
}
}
}
namespace Sonata\MediaBundle\Filesystem
{
use Gaufrette\Adapter\Local as BaseLocal;
class Local extends BaseLocal
{
public function getDirectory()
{
return $this->directory;
}
}
}
namespace Gaufrette\Adapter
{
interface MetadataSupporter
{
public function setMetadata($key, $content);
public function getMetadata($key);
}
}
namespace Sonata\MediaBundle\Filesystem
{
use Gaufrette\Adapter as AdapterInterface;
use Gaufrette\Adapter\MetadataSupporter;
use Gaufrette\Filesystem;
use Psr\Log\LoggerInterface;
class Replicate implements AdapterInterface, MetadataSupporter
{
protected $master;
protected $slave;
protected $logger;
public function __construct(AdapterInterface $master, AdapterInterface $slave, LoggerInterface $logger = null)
{
$this->master = $master;
$this->slave = $slave;
$this->logger = $logger;
}
public function delete($key)
{
$ok = true;
try {
$this->slave->delete($key);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to delete %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
try {
$this->master->delete($key);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to delete %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
return $ok;
}
public function mtime($key)
{
return $this->master->mtime($key);
}
public function keys()
{
return $this->master->keys();
}
public function exists($key)
{
return $this->master->exists($key);
}
public function write($key, $content, array $metadata = null)
{
$ok = true;
$return = false;
try {
$return = $this->master->write($key, $content, $metadata);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to write %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
try {
$return = $this->slave->write($key, $content, $metadata);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to write %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
return $ok && $return;
}
public function read($key)
{
return $this->master->read($key);
}
public function rename($key, $new)
{
$ok = true;
try {
$this->master->rename($key, $new);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to rename %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
try {
$this->slave->rename($key, $new);
} catch (\Exception $e) {
if ($this->logger) {
$this->logger->critical(sprintf('Unable to rename %s, error: %s', $key, $e->getMessage()));
}
$ok = false;
}
return $ok;
}
public function supportsMetadata()
{
return $this->master instanceof MetadataSupporter || $this->slave instanceof MetadataSupporter;
}
public function setMetadata($key, $metadata)
{
if ($this->master instanceof MetadataSupporter) {
$this->master->setMetadata($key, $metadata);
}
if ($this->slave instanceof MetadataSupporter) {
$this->slave->setMetadata($key, $metadata);
}
}
public function getMetadata($key)
{
if ($this->master instanceof MetadataSupporter) {
return $this->master->getMetadata($key);
} elseif ($this->slave instanceof MetadataSupporter) {
return $this->slave->getMetadata($key);
}
return array();
}
public function getAdapterClassNames()
{
return array(
get_class($this->master),
get_class($this->slave),
);
}
public function createFile($key, Filesystem $filesystem)
{
return $this->master->createFile($key, $filesystem);
}
public function createFileStream($key, Filesystem $filesystem)
{
return $this->master->createFileStream($key, $filesystem);
}
public function listDirectory($directory ='')
{
return $this->master->listDirectory($directory);
}
public function isDirectory($key)
{
return $this->master->isDirectory($key);
}
}
}
namespace Sonata\MediaBundle\Generator
{
use Sonata\MediaBundle\Model\MediaInterface;
interface GeneratorInterface
{
public function generatePath(MediaInterface $media);
}
}
namespace Sonata\MediaBundle\Generator
{
use Sonata\MediaBundle\Model\MediaInterface;
class DefaultGenerator implements GeneratorInterface
{
protected $firstLevel;
protected $secondLevel;
public function __construct($firstLevel = 100000, $secondLevel = 1000)
{
$this->firstLevel = $firstLevel;
$this->secondLevel = $secondLevel;
}
public function generatePath(MediaInterface $media)
{
$rep_first_level = (int) ($media->getId() / $this->firstLevel);
$rep_second_level = (int) (($media->getId() - ($rep_first_level * $this->firstLevel)) / $this->secondLevel);
return sprintf('%s/%04s/%02s', $media->getContext(), $rep_first_level + 1, $rep_second_level + 1);
}
}
}
namespace Sonata\MediaBundle\Generator
{
use Sonata\MediaBundle\Model\MediaInterface;
class ODMGenerator implements GeneratorInterface
{
public function generatePath(MediaInterface $media)
{
$id = $media->getId();
return sprintf('%s/%04s/%02s', $media->getContext(), substr($id, 0, 4), substr($id, 4, 2));
}
}
}
namespace Sonata\MediaBundle\Generator
{
use Sonata\MediaBundle\Model\MediaInterface;
class PHPCRGenerator implements GeneratorInterface
{
public function generatePath(MediaInterface $media)
{
$segments = preg_split('#/#', $media->getId(), null, PREG_SPLIT_NO_EMPTY);
if (count($segments) > 1) {
array_pop($segments);
$path = implode($segments,'/');
} else {
$path ='';
}
return $path ? sprintf('%s/%s', $media->getContext(), $path) : $media->getContext();
}
}
}
namespace Sonata\MediaBundle\Metadata
{
use Sonata\MediaBundle\Model\MediaInterface;
interface MetadataBuilderInterface
{
public function get(MediaInterface $media, $filename);
}
}
namespace Sonata\MediaBundle\Metadata
{
use Guzzle\Http\Mimetypes;
use Sonata\MediaBundle\Model\MediaInterface;
class AmazonMetadataBuilder implements MetadataBuilderInterface
{
const PRIVATE_ACCESS ='private';
const PUBLIC_READ ='public-read';
const PUBLIC_READ_WRITE ='public-read-write';
const AUTHENTICATED_READ ='authenticated-read';
const BUCKET_OWNER_READ ='bucket-owner-read';
const BUCKET_OWNER_FULL_CONTROL ='bucket-owner-full-control';
const STORAGE_STANDARD ='STANDARD';
const STORAGE_REDUCED ='REDUCED_REDUNDANCY';
const STORAGE_GLACIER ='GLACIER';
protected $settings;
protected $acl = array('private'=> self::PRIVATE_ACCESS,'public'=> self::PUBLIC_READ,'open'=> self::PUBLIC_READ_WRITE,'auth_read'=> self::AUTHENTICATED_READ,'owner_read'=> self::BUCKET_OWNER_READ,'owner_full_control'=> self::BUCKET_OWNER_FULL_CONTROL,
);
public function __construct(array $settings)
{
$this->settings = $settings;
}
public function get(MediaInterface $media, $filename)
{
return array_replace_recursive(
$this->getDefaultMetadata(),
$this->getContentType($filename)
);
}
protected function getDefaultMetadata()
{
$output = array();
if (isset($this->settings['acl']) && !empty($this->settings['acl'])) {
$output['ACL'] = $this->acl[$this->settings['acl']];
}
if (isset($this->settings['storage'])) {
if ($this->settings['storage'] =='standard') {
$output['storage'] = static::STORAGE_STANDARD;
} elseif ($this->settings['storage'] =='reduced') {
$output['storage'] = static::STORAGE_REDUCED;
}
}
if (isset($this->settings['meta']) && !empty($this->settings['meta'])) {
$output['meta'] = $this->settings['meta'];
}
if (isset($this->settings['cache_control']) && !empty($this->settings['cache_control'])) {
$output['CacheControl'] = $this->settings['cache_control'];
}
if (isset($this->settings['encryption']) && !empty($this->settings['encryption'])) {
if ($this->settings['encryption'] =='aes256') {
$output['encryption'] ='AES256';
}
}
return $output;
}
protected function getContentType($filename)
{
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$contentType = Mimetypes::getInstance()->fromExtension($extension);
return array('contentType'=> $contentType);
}
}
}
namespace Sonata\MediaBundle\Metadata
{
use Sonata\MediaBundle\Model\MediaInterface;
class NoopMetadataBuilder implements MetadataBuilderInterface
{
public function get(MediaInterface $media, $filename)
{
return array();
}
}
}
namespace Sonata\MediaBundle\Metadata
{
use Sonata\MediaBundle\Filesystem\Replicate;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
class ProxyMetadataBuilder implements MetadataBuilderInterface
{
private $container;
public function __construct(ContainerInterface $container, array $map = null)
{
$this->container = $container;
if ($map !== null) {
@trigger_error('The "map" parameter is deprecated since version 2.4 and will be removed in 4.0.',
E_USER_DEPRECATED
);
}
}
public function get(MediaInterface $media, $filename)
{
if (!$this->container->has($media->getProviderName())) {
return array();
}
if ($meta = $this->getAmazonBuilder($media, $filename)) {
return $meta;
}
if (!$this->container->has('sonata.media.metadata.noop')) {
return array();
}
return $this->container->get('sonata.media.metadata.noop')->get($media, $filename);
}
protected function getAmazonBuilder(MediaInterface $media, $filename)
{
$adapter = $this->container->get($media->getProviderName())->getFilesystem()->getAdapter();
if ($adapter instanceof Replicate) {
$adapterClassNames = $adapter->getAdapterClassNames();
} else {
$adapterClassNames = array(get_class($adapter));
}
if ((!in_array('Gaufrette\Adapter\AmazonS3', $adapterClassNames) && !in_array('Gaufrette\Adapter\AwsS3', $adapterClassNames)) || !$this->container->has('sonata.media.metadata.amazon')) {
return false;
}
return $this->container->get('sonata.media.metadata.amazon')->get($media, $filename);
}
}
}
namespace Sonata\MediaBundle\Model
{
interface GalleryInterface
{
public function __toString();
public function setName($name);
public function getContext();
public function setContext($context);
public function getName();
public function setEnabled($enabled);
public function getEnabled();
public function setUpdatedAt(\DateTime $updatedAt = null);
public function getUpdatedAt();
public function setCreatedAt(\DateTime $createdAt = null);
public function getCreatedAt();
public function setDefaultFormat($defaultFormat);
public function getDefaultFormat();
public function setGalleryHasMedias($galleryHasMedias);
public function getGalleryHasMedias();
public function addGalleryHasMedias(GalleryHasMediaInterface $galleryHasMedia);
}
}
namespace Sonata\MediaBundle\Model
{
use Doctrine\Common\Collections\ArrayCollection;
use Sonata\MediaBundle\Provider\MediaProviderInterface;
abstract class Gallery implements GalleryInterface
{
protected $context;
protected $name;
protected $enabled;
protected $updatedAt;
protected $createdAt;
protected $defaultFormat = MediaProviderInterface::FORMAT_REFERENCE;
protected $galleryHasMedias;
public function __toString()
{
return $this->getName() ?:'-';
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setEnabled($enabled)
{
$this->enabled = $enabled;
}
public function getEnabled()
{
return $this->enabled;
}
public function setUpdatedAt(\DateTime $updatedAt = null)
{
$this->updatedAt = $updatedAt;
}
public function getUpdatedAt()
{
return $this->updatedAt;
}
public function setCreatedAt(\DateTime $createdAt = null)
{
$this->createdAt = $createdAt;
}
public function getCreatedAt()
{
return $this->createdAt;
}
public function setDefaultFormat($defaultFormat)
{
$this->defaultFormat = $defaultFormat;
}
public function getDefaultFormat()
{
return $this->defaultFormat;
}
public function setGalleryHasMedias($galleryHasMedias)
{
$this->galleryHasMedias = new ArrayCollection();
foreach ($galleryHasMedias as $galleryHasMedia) {
$this->addGalleryHasMedias($galleryHasMedia);
}
}
public function getGalleryHasMedias()
{
return $this->galleryHasMedias;
}
public function addGalleryHasMedias(GalleryHasMediaInterface $galleryHasMedia)
{
$galleryHasMedia->setGallery($this);
$this->galleryHasMedias[] = $galleryHasMedia;
}
public function setContext($context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
}
}
namespace Sonata\MediaBundle\Model
{
interface GalleryHasMediaInterface
{
public function __toString();
public function setEnabled($enabled);
public function getEnabled();
public function setGallery(GalleryInterface $gallery = null);
public function getGallery();
public function setMedia(MediaInterface $media = null);
public function getMedia();
public function setPosition($position);
public function getPosition();
public function setUpdatedAt(\DateTime $updatedAt = null);
public function getUpdatedAt();
public function setCreatedAt(\DateTime $createdAt = null);
public function getCreatedAt();
}
}
namespace Sonata\MediaBundle\Model
{
abstract class GalleryHasMedia implements GalleryHasMediaInterface
{
protected $media;
protected $gallery;
protected $position;
protected $updatedAt;
protected $createdAt;
protected $enabled;
public function __construct()
{
$this->position = 0;
$this->enabled = false;
}
public function __toString()
{
return $this->getGallery().' | '.$this->getMedia();
}
public function setCreatedAt(\DateTime $createdAt = null)
{
$this->createdAt = $createdAt;
}
public function getCreatedAt()
{
return $this->createdAt;
}
public function setEnabled($enabled)
{
$this->enabled = $enabled;
}
public function getEnabled()
{
return $this->enabled;
}
public function setGallery(GalleryInterface $gallery = null)
{
$this->gallery = $gallery;
}
public function getGallery()
{
return $this->gallery;
}
public function setMedia(MediaInterface $media = null)
{
$this->media = $media;
}
public function getMedia()
{
return $this->media;
}
public function setPosition($position)
{
$this->position = $position;
}
public function getPosition()
{
return $this->position;
}
public function setUpdatedAt(\DateTime $updatedAt = null)
{
$this->updatedAt = $updatedAt;
}
public function getUpdatedAt()
{
return $this->updatedAt;
}
}
}
namespace Sonata\MediaBundle\Model
{
use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;
interface GalleryManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
}
namespace Sonata\MediaBundle\Model
{
abstract class GalleryManager implements GalleryManagerInterface
{
public function create()
{
$class = $this->getClass();
return new $class();
}
}
}
namespace Sonata\MediaBundle\Model
{
use Imagine\Image\Box;
interface MediaInterface
{
const STATUS_OK = 1;
const STATUS_SENDING = 2;
const STATUS_PENDING = 3;
const STATUS_ERROR = 4;
const STATUS_ENCODING = 5;
const MISSING_BINARY_REFERENCE ='missing_binary_content';
public function setBinaryContent($binaryContent);
public function getBinaryContent();
public function resetBinaryContent();
public function getMetadataValue($name, $default = null);
public function setMetadataValue($name, $value);
public function unsetMetadataValue($name);
public function getId();
public function setName($name);
public function getName();
public function setDescription($description);
public function getDescription();
public function setEnabled($enabled);
public function getEnabled();
public function setProviderName($providerName);
public function getProviderName();
public function setProviderStatus($providerStatus);
public function getProviderStatus();
public function setProviderReference($providerReference);
public function getProviderReference();
public function setProviderMetadata(array $providerMetadata = array());
public function getProviderMetadata();
public function setWidth($width);
public function getWidth();
public function setHeight($height);
public function getHeight();
public function setLength($length);
public function getLength();
public function setCopyright($copyright);
public function getCopyright();
public function setAuthorName($authorName);
public function getAuthorName();
public function setContext($context);
public function getContext();
public function setCdnIsFlushable($cdnIsFlushable);
public function getCdnIsFlushable();
public function setCdnFlushIdentifier($cdnFlushIdentifier);
public function getCdnFlushIdentifier();
public function setCdnFlushAt(\Datetime $cdnFlushAt = null);
public function getCdnFlushAt();
public function setUpdatedAt(\Datetime $updatedAt = null);
public function getUpdatedAt();
public function setCreatedAt(\Datetime $createdAt = null);
public function getCreatedAt();
public function setContentType($contentType);
public function getExtension();
public function getContentType();
public function setSize($size);
public function getSize();
public function setCdnStatus($cdnStatus);
public function getCdnStatus();
public function getBox();
public function setGalleryHasMedias($galleryHasMedias);
public function getGalleryHasMedias();
public function getPreviousProviderReference();
}
}
namespace Sonata\MediaBundle\Model
{
use Imagine\Image\Box;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\ExecutionContextInterface as LegacyExecutionContextInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;
abstract class Media implements MediaInterface
{
protected $name;
protected $description;
protected $enabled = false;
protected $providerName;
protected $providerStatus;
protected $providerReference;
protected $providerMetadata = array();
protected $width;
protected $height;
protected $length;
protected $copyright;
protected $authorName;
protected $context;
protected $cdnIsFlushable;
protected $cdnFlushIdentifier;
protected $cdnFlushAt;
protected $cdnStatus;
protected $updatedAt;
protected $createdAt;
protected $binaryContent;
protected $previousProviderReference;
protected $contentType;
protected $size;
protected $galleryHasMedias;
protected $category;
public function __toString()
{
return $this->getName() ?:'n/a';
}
public function __set($property, $value)
{
if ($property =='category') {
if (null !== $value && !is_a($value,'Sonata\ClassificationBundle\Model\CategoryInterface')) {
throw new \InvalidArgumentException('$category should be an instance of Sonata\ClassificationBundle\Model\CategoryInterface or null');
}
$this->category = $value;
}
}
public function __call($method, $arguments)
{
if ($method =='setCategory') {
$this->__set('category', current($arguments));
}
}
public function prePersist()
{
$this->setCreatedAt(new \DateTime());
$this->setUpdatedAt(new \DateTime());
}
public function preUpdate()
{
$this->setUpdatedAt(new \DateTime());
}
public static function getStatusList()
{
return array(
self::STATUS_OK =>'ok',
self::STATUS_SENDING =>'sending',
self::STATUS_PENDING =>'pending',
self::STATUS_ERROR =>'error',
self::STATUS_ENCODING =>'encoding',
);
}
public function setBinaryContent($binaryContent)
{
$this->previousProviderReference = $this->providerReference;
$this->providerReference = null;
$this->binaryContent = $binaryContent;
}
public function resetBinaryContent()
{
$this->binaryContent = null;
}
public function getBinaryContent()
{
return $this->binaryContent;
}
public function getMetadataValue($name, $default = null)
{
$metadata = $this->getProviderMetadata();
return isset($metadata[$name]) ? $metadata[$name] : $default;
}
public function setMetadataValue($name, $value)
{
$metadata = $this->getProviderMetadata();
$metadata[$name] = $value;
$this->setProviderMetadata($metadata);
}
public function unsetMetadataValue($name)
{
$metadata = $this->getProviderMetadata();
unset($metadata[$name]);
$this->setProviderMetadata($metadata);
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setDescription($description)
{
$this->description = $description;
}
public function getDescription()
{
return $this->description;
}
public function setEnabled($enabled)
{
$this->enabled = $enabled;
}
public function getEnabled()
{
return $this->enabled;
}
public function setProviderName($providerName)
{
$this->providerName = $providerName;
}
public function getProviderName()
{
return $this->providerName;
}
public function setProviderStatus($providerStatus)
{
$this->providerStatus = $providerStatus;
}
public function getProviderStatus()
{
return $this->providerStatus;
}
public function setProviderReference($providerReference)
{
$this->providerReference = $providerReference;
}
public function getProviderReference()
{
return $this->providerReference;
}
public function setProviderMetadata(array $providerMetadata = array())
{
$this->providerMetadata = $providerMetadata;
}
public function getProviderMetadata()
{
return $this->providerMetadata;
}
public function setWidth($width)
{
$this->width = $width;
}
public function getWidth()
{
return $this->width;
}
public function setHeight($height)
{
$this->height = $height;
}
public function getHeight()
{
return $this->height;
}
public function setLength($length)
{
$this->length = $length;
}
public function getLength()
{
return $this->length;
}
public function setCopyright($copyright)
{
$this->copyright = $copyright;
}
public function getCopyright()
{
return $this->copyright;
}
public function setAuthorName($authorName)
{
$this->authorName = $authorName;
}
public function getAuthorName()
{
return $this->authorName;
}
public function setContext($context)
{
$this->context = $context;
}
public function getContext()
{
return $this->context;
}
public function setCdnIsFlushable($cdnIsFlushable)
{
$this->cdnIsFlushable = $cdnIsFlushable;
}
public function getCdnIsFlushable()
{
return $this->cdnIsFlushable;
}
public function setCdnFlushIdentifier($cdnFlushIdentifier)
{
$this->cdnFlushIdentifier = $cdnFlushIdentifier;
}
public function getCdnFlushIdentifier()
{
return $this->cdnFlushIdentifier;
}
public function setCdnFlushAt(\DateTime $cdnFlushAt = null)
{
$this->cdnFlushAt = $cdnFlushAt;
}
public function getCdnFlushAt()
{
return $this->cdnFlushAt;
}
public function setUpdatedAt(\DateTime $updatedAt = null)
{
$this->updatedAt = $updatedAt;
}
public function getUpdatedAt()
{
return $this->updatedAt;
}
public function setCreatedAt(\DateTime $createdAt = null)
{
$this->createdAt = $createdAt;
}
public function getCreatedAt()
{
return $this->createdAt;
}
public function setContentType($contentType)
{
$this->contentType = $contentType;
}
public function getContentType()
{
return $this->contentType;
}
public function getExtension()
{
return preg_replace('{(\?|#).*}','', pathinfo($this->getProviderReference(), PATHINFO_EXTENSION));
}
public function setSize($size)
{
$this->size = $size;
}
public function getSize()
{
return $this->size;
}
public function setCdnStatus($cdnStatus)
{
$this->cdnStatus = $cdnStatus;
}
public function getCdnStatus()
{
return $this->cdnStatus;
}
public function getBox()
{
return new Box($this->width, $this->height);
}
public function setGalleryHasMedias($galleryHasMedias)
{
$this->galleryHasMedias = $galleryHasMedias;
}
public function getGalleryHasMedias()
{
return $this->galleryHasMedias;
}
public function getPreviousProviderReference()
{
return $this->previousProviderReference;
}
public static function loadValidatorMetadata(ClassMetadata $metadata)
{
if (class_exists('Symfony\Component\Validator\Constraints\Expression')) {
$method ='isStatusErroneous';
} else {
$method = array('methods'=> array('isStatusErroneous'));
}
$metadata->addConstraint(new Assert\Callback($method));
}
public function isStatusErroneous($context)
{
if ($this->getBinaryContent() && $this->getProviderStatus() == self::STATUS_ERROR) {
if (!$context instanceof ExecutionContextInterface && !$context instanceof LegacyExecutionContextInterface) {
throw new \InvalidArgumentException('Argument 1 should be an instance of Symfony\Component\Validator\ExecutionContextInterface or Symfony\Component\Validator\Context\ExecutionContextInterface');
}
if ($context instanceof LegacyExecutionContextInterface) {
$context->addViolationAt('binaryContent','invalid', array(), null);
} else {
$context->buildViolation('invalid')
->atPath('binaryContent')
->addViolation();
}
}
}
public function getCategory()
{
return $this->category;
}
}
}
namespace Sonata\MediaBundle\Model
{
use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\CoreBundle\Model\PageableManagerInterface;
interface MediaManagerInterface extends ManagerInterface, PageableManagerInterface
{
}
}
namespace Sonata\MediaBundle\Provider
{
use Gaufrette\Filesystem;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Model\MetadataInterface;
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Resizer\ResizerInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Response;
interface MediaProviderInterface
{
const FORMAT_ADMIN ='admin';
const FORMAT_REFERENCE ='reference';
public function addFormat($name, $format);
public function getFormat($name);
public function requireThumbnails();
public function generateThumbnails(MediaInterface $media);
public function removeThumbnails(MediaInterface $media, $formats = null);
public function getReferenceFile(MediaInterface $media);
public function getFormatName(MediaInterface $media, $format);
public function getReferenceImage(MediaInterface $media);
public function preUpdate(MediaInterface $media);
public function postUpdate(MediaInterface $media);
public function preRemove(MediaInterface $media);
public function postRemove(MediaInterface $media);
public function buildCreateForm(FormMapper $formMapper);
public function buildEditForm(FormMapper $formMapper);
public function prePersist(MediaInterface $media);
public function postPersist(MediaInterface $media);
public function getHelperProperties(MediaInterface $media, $format, $options = array());
public function generatePath(MediaInterface $media);
public function generatePublicUrl(MediaInterface $media, $format);
public function generatePrivateUrl(MediaInterface $media, $format);
public function getFormats();
public function setName($name);
public function getName();
public function getProviderMetadata();
public function setTemplates(array $templates);
public function getTemplates();
public function getTemplate($name);
public function getDownloadResponse(MediaInterface $media, $format, $mode, array $headers = array());
public function getResizer();
public function getFilesystem();
public function getCdnPath($relativePath, $isFlushable);
public function transform(MediaInterface $media);
public function validate(ErrorElement $errorElement, MediaInterface $media);
public function buildMediaType(FormBuilder $formBuilder);
public function updateMetadata(MediaInterface $media, $force = false);
}
}
namespace Sonata\MediaBundle\Provider
{
use Gaufrette\Filesystem;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\MediaBundle\CDN\CDNInterface;
use Sonata\MediaBundle\Generator\GeneratorInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Resizer\ResizerInterface;
use Sonata\MediaBundle\Thumbnail\ThumbnailInterface;
abstract class BaseProvider implements MediaProviderInterface
{
protected $formats = array();
protected $templates = array();
protected $resizer;
protected $filesystem;
protected $pathGenerator;
protected $cdn;
protected $thumbnail;
protected $name;
public function __construct($name, Filesystem $filesystem, CDNInterface $cdn, GeneratorInterface $pathGenerator, ThumbnailInterface $thumbnail)
{
$this->name = $name;
$this->filesystem = $filesystem;
$this->cdn = $cdn;
$this->pathGenerator = $pathGenerator;
$this->thumbnail = $thumbnail;
}
final public function transform(MediaInterface $media)
{
if (null === $media->getBinaryContent()) {
return;
}
$this->doTransform($media);
$this->flushCdn($media);
}
public function flushCdn(MediaInterface $media)
{
if ($media->getId() && $this->requireThumbnails() && !$media->getCdnIsFlushable()) {
$flushPaths = array();
foreach ($this->getFormats() as $format => $settings) {
if (MediaProviderInterface::FORMAT_ADMIN === $format ||
substr($format, 0, strlen($media->getContext())) === $media->getContext()) {
$flushPaths[] = $this->getFilesystem()->get($this->generatePrivateUrl($media, $format), true)->getKey();
}
}
if (!empty($flushPaths)) {
$cdnFlushIdentifier = $this->getCdn()->flushPaths($flushPaths);
$media->setCdnFlushIdentifier($cdnFlushIdentifier);
$media->setCdnIsFlushable(true);
$media->setCdnStatus(CDNInterface::STATUS_TO_FLUSH);
}
}
}
public function addFormat($name, $format)
{
$this->formats[$name] = $format;
}
public function getFormat($name)
{
return isset($this->formats[$name]) ? $this->formats[$name] : false;
}
public function requireThumbnails()
{
return $this->getResizer() !== null;
}
public function generateThumbnails(MediaInterface $media)
{
$this->thumbnail->generate($this, $media);
}
public function removeThumbnails(MediaInterface $media, $formats = null)
{
$this->thumbnail->delete($this, $media, $formats);
}
public function getFormatName(MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_ADMIN === $format) {
return MediaProviderInterface::FORMAT_ADMIN;
}
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
return MediaProviderInterface::FORMAT_REFERENCE;
}
$baseName = $media->getContext().'_';
if (substr($format, 0, strlen($baseName)) == $baseName) {
return $format;
}
return $baseName.$format;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', false,'SonataMediaBundle', array('class'=>'fa fa-file'));
}
public function preRemove(MediaInterface $media)
{
$path = $this->getReferenceImage($media);
if ($this->getFilesystem()->has($path)) {
$this->getFilesystem()->delete($path);
}
if ($this->requireThumbnails()) {
$this->thumbnail->delete($this, $media);
}
}
public function postRemove(MediaInterface $media)
{
}
public function generatePath(MediaInterface $media)
{
return $this->pathGenerator->generatePath($media);
}
public function getFormats()
{
return $this->formats;
}
public function setName($name)
{
$this->name = $name;
}
public function getName()
{
return $this->name;
}
public function setTemplates(array $templates)
{
$this->templates = $templates;
}
public function getTemplates()
{
return $this->templates;
}
public function getTemplate($name)
{
return isset($this->templates[$name]) ? $this->templates[$name] : null;
}
public function getResizer()
{
return $this->resizer;
}
public function getFilesystem()
{
return $this->filesystem;
}
public function getCdn()
{
return $this->cdn;
}
public function getCdnPath($relativePath, $isFlushable)
{
return $this->getCdn()->getPath($relativePath, $isFlushable);
}
public function setResizer(ResizerInterface $resizer)
{
$this->resizer = $resizer;
}
public function prePersist(MediaInterface $media)
{
$media->setCreatedAt(new \Datetime());
$media->setUpdatedAt(new \Datetime());
}
public function preUpdate(MediaInterface $media)
{
$media->setUpdatedAt(new \Datetime());
}
public function validate(ErrorElement $errorElement, MediaInterface $media)
{
}
abstract protected function doTransform(MediaInterface $media);
}
}
namespace Sonata\MediaBundle\Provider
{
use Buzz\Browser;
use Gaufrette\Filesystem;
use Imagine\Image\Box;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\CDN\CDNInterface;
use Sonata\MediaBundle\Generator\GeneratorInterface;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Thumbnail\ThumbnailInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
abstract class BaseVideoProvider extends BaseProvider
{
protected $browser;
protected $metadata;
public function __construct($name, Filesystem $filesystem, CDNInterface $cdn, GeneratorInterface $pathGenerator, ThumbnailInterface $thumbnail, Browser $browser, MetadataBuilderInterface $metadata = null)
{
parent::__construct($name, $filesystem, $cdn, $pathGenerator, $thumbnail);
if (!method_exists($this,'getReferenceUrl')) {
@trigger_error('The method "getReferenceUrl" is required with the next major release.', E_USER_DEPRECATED);
}
$this->browser = $browser;
$this->metadata = $metadata;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', null,'SonataMediaBundle', array('class'=>'fa fa-video-camera'));
}
public function getReferenceImage(MediaInterface $media)
{
return $media->getMetadataValue('thumbnail_url');
}
public function getReferenceFile(MediaInterface $media)
{
$key = $this->generatePrivateUrl($media, MediaProviderInterface::FORMAT_REFERENCE);
if ($this->getFilesystem()->has($key)) {
$referenceFile = $this->getFilesystem()->get($key);
} else {
$referenceFile = $this->getFilesystem()->get($key, true);
$metadata = $this->metadata ? $this->metadata->get($media, $referenceFile->getName()) : array();
$referenceFile->setContent($this->browser->get($this->getReferenceImage($media))->getContent(), $metadata);
}
return $referenceFile;
}
public function generatePublicUrl(MediaInterface $media, $format)
{
return $this->getCdn()->getPath(sprintf('%s/thumb_%s_%s.jpg',
$this->generatePath($media),
$media->getId(),
$format
), $media->getCdnIsFlushable());
}
public function generatePrivateUrl(MediaInterface $media, $format)
{
return sprintf('%s/thumb_%s_%s.jpg',
$this->generatePath($media),
$media->getId(),
$format
);
}
public function buildEditForm(FormMapper $formMapper)
{
$formMapper->add('name');
$formMapper->add('enabled', null, array('required'=> false));
$formMapper->add('authorName');
$formMapper->add('cdnIsFlushable');
$formMapper->add('description');
$formMapper->add('copyright');
$formMapper->add('binaryContent',
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text',
array('required'=> false));
}
public function buildCreateForm(FormMapper $formMapper)
{
$formMapper->add('binaryContent',
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text',
array('constraints'=> array(
new NotBlank(),
new NotNull(),
),
)
);
}
public function buildMediaType(FormBuilder $formBuilder)
{
$formBuilder->add('binaryContent',
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\TextType':'text',
array('label'=>'widget_label_binary_content',
)
);
}
public function postUpdate(MediaInterface $media)
{
$this->postPersist($media);
}
public function postPersist(MediaInterface $media)
{
if (!$media->getBinaryContent()) {
return;
}
$this->generateThumbnails($media);
$media->resetBinaryContent();
}
public function postRemove(MediaInterface $media)
{
}
protected function getMetadata(MediaInterface $media, $url)
{
try {
$response = $this->browser->get($url);
} catch (\RuntimeException $e) {
throw new \RuntimeException('Unable to retrieve the video information for :'.$url, null, $e);
}
$metadata = json_decode($response->getContent(), true);
if (!$metadata) {
throw new \RuntimeException('Unable to decode the video information for :'.$url);
}
return $metadata;
}
protected function getBoxHelperProperties(MediaInterface $media, $format, $options = array())
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
return $media->getBox();
}
if (isset($options['width']) || isset($options['height'])) {
$settings = array('width'=> isset($options['width']) ? $options['width'] : null,'height'=> isset($options['height']) ? $options['height'] : null,
);
} else {
$settings = $this->getFormat($format);
}
return $this->resizer->getBox($media, $settings);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
class DailyMotionProvider extends BaseVideoProvider
{
public function getHelperProperties(MediaInterface $media, $format, $options = array())
{
$defaults = array('related'=> 0,'explicit'=> 0,'autoPlay'=> 0,'autoMute'=> 0,'unmuteOnMouseOver'=> 0,'start'=> 0,'enableApi'=> 0,'chromeless'=> 0,'expendVideo'=> 0,'color2'=> null,'foreground'=> null,'background'=> null,'highlight'=> null,
);
$player_parameters = array_merge($defaults, isset($options['player_parameters']) ? $options['player_parameters'] : array());
$box = $this->getBoxHelperProperties($media, $format, $options);
$params = array('player_parameters'=> http_build_query($player_parameters),'allowFullScreen'=> isset($options['allowFullScreen']) ? $options['allowFullScreen'] :'true','allowScriptAccess'=> isset($options['allowScriptAccess']) ? $options['allowScriptAccess'] :'always','width'=> $box->getWidth(),'height'=> $box->getHeight(),
);
return $params;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description','bundles/sonatamedia/dailymotion-icon.png','SonataMediaBundle');
}
public function updateMetadata(MediaInterface $media, $force = false)
{
$url = sprintf('http://www.dailymotion.com/services/oembed?url=%s&format=json', $this->getReferenceUrl($media));
try {
$metadata = $this->getMetadata($media, $url);
} catch (\RuntimeException $e) {
$media->setEnabled(false);
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
return;
}
$media->setProviderMetadata($metadata);
if ($force) {
$media->setName($metadata['title']);
$media->setAuthorName($metadata['author_name']);
}
$media->setHeight($metadata['height']);
$media->setWidth($metadata['width']);
}
public function getDownloadResponse(MediaInterface $media, $format, $mode, array $headers = array())
{
return new RedirectResponse($this->getReferenceUrl($media), 302, $headers);
}
public function getReferenceUrl(MediaInterface $media)
{
return sprintf('http://www.dailymotion.com/video/%s', $media->getProviderReference());
}
protected function fixBinaryContent(MediaInterface $media)
{
if (!$media->getBinaryContent()) {
return;
}
if (preg_match("/www.dailymotion.com\/video\/([0-9a-zA-Z]*)_/", $media->getBinaryContent(), $matches)) {
$media->setBinaryContent($matches[1]);
}
}
protected function doTransform(MediaInterface $media)
{
$this->fixBinaryContent($media);
if (!$media->getBinaryContent()) {
return;
}
$media->setProviderName($this->name);
$media->setProviderStatus(MediaInterface::STATUS_OK);
$media->setProviderReference($media->getBinaryContent());
$this->updateMetadata($media, true);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Gaufrette\Filesystem;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\MediaBundle\CDN\CDNInterface;
use Sonata\MediaBundle\Extra\ApiMediaFile;
use Sonata\MediaBundle\Generator\GeneratorInterface;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Thumbnail\ThumbnailInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
class FileProvider extends BaseProvider
{
protected $allowedExtensions;
protected $allowedMimeTypes;
protected $metadata;
public function __construct($name, Filesystem $filesystem, CDNInterface $cdn, GeneratorInterface $pathGenerator, ThumbnailInterface $thumbnail, array $allowedExtensions = array(), array $allowedMimeTypes = array(), MetadataBuilderInterface $metadata = null)
{
parent::__construct($name, $filesystem, $cdn, $pathGenerator, $thumbnail);
$this->allowedExtensions = $allowedExtensions;
$this->allowedMimeTypes = $allowedMimeTypes;
$this->metadata = $metadata;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', false,'SonataMediaBundle', array('class'=>'fa fa-file-text-o'));
}
public function getReferenceImage(MediaInterface $media)
{
return sprintf('%s/%s',
$this->generatePath($media),
$media->getProviderReference()
);
}
public function getReferenceFile(MediaInterface $media)
{
return $this->getFilesystem()->get($this->getReferenceImage($media), true);
}
public function buildEditForm(FormMapper $formMapper)
{
$formMapper->add('name');
$formMapper->add('enabled', null, array('required'=> false));
$formMapper->add('authorName');
$formMapper->add('cdnIsFlushable');
$formMapper->add('description');
$formMapper->add('copyright');
$formMapper->add('binaryContent',
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\FileType':'file',
array('required'=> false)
);
}
public function buildCreateForm(FormMapper $formMapper)
{
$formMapper->add('binaryContent',
method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\FileType':'file',
array('constraints'=> array(
new NotBlank(),
new NotNull(),
),
)
);
}
public function buildMediaType(FormBuilder $formBuilder)
{
$fileType = method_exists('Symfony\Component\Form\AbstractType','getBlockPrefix')
?'Symfony\Component\Form\Extension\Core\Type\FileType':'file';
if ($formBuilder->getOption('context') =='api') {
$formBuilder->add('binaryContent', $fileType);
$formBuilder->add('contentType');
} else {
$formBuilder->add('binaryContent', $fileType, array('required'=> false,'label'=>'widget_label_binary_content',
));
}
}
public function postPersist(MediaInterface $media)
{
if ($media->getBinaryContent() === null) {
return;
}
$this->setFileContents($media);
$this->generateThumbnails($media);
$media->resetBinaryContent();
}
public function postUpdate(MediaInterface $media)
{
if (!$media->getBinaryContent() instanceof \SplFileInfo) {
return;
}
$oldMedia = clone $media;
if ($media->getPreviousProviderReference() !== null) {
$oldMedia->setProviderReference($media->getPreviousProviderReference());
$path = $this->getReferenceImage($oldMedia);
if ($this->getFilesystem()->has($path)) {
$this->getFilesystem()->delete($path);
}
}
$this->fixBinaryContent($media);
$this->setFileContents($media);
$this->generateThumbnails($media);
$media->resetBinaryContent();
}
public function updateMetadata(MediaInterface $media, $force = true)
{
if (!$media->getBinaryContent() instanceof \SplFileInfo) {
$path = tempnam(sys_get_temp_dir(),'sonata_update_metadata_');
$fileObject = new \SplFileObject($path,'w');
$fileObject->fwrite($this->getReferenceFile($media)->getContent());
} else {
$fileObject = $media->getBinaryContent();
}
$media->setSize($fileObject->getSize());
}
public function generatePublicUrl(MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
$path = $this->getReferenceImage($media);
} else {
$path = sprintf('sonatamedia/files/%s/file.png', $format);
}
return $this->getCdn()->getPath($path, $media->getCdnIsFlushable());
}
public function getHelperProperties(MediaInterface $media, $format, $options = array())
{
return array_merge(array('title'=> $media->getName(),'thumbnail'=> $this->getReferenceImage($media),'file'=> $this->getReferenceImage($media),
), $options);
}
public function generatePrivateUrl(MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
return $this->getReferenceImage($media);
}
return false;
}
public function getDownloadResponse(MediaInterface $media, $format, $mode, array $headers = array())
{
$headers = array_merge(array('Content-Type'=> $media->getContentType(),'Content-Disposition'=> sprintf('attachment; filename="%s"', $media->getMetadataValue('filename')),
), $headers);
if (!in_array($mode, array('http','X-Sendfile','X-Accel-Redirect'))) {
throw new \RuntimeException('Invalid mode provided');
}
if ($mode =='http') {
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
$file = $this->getReferenceFile($media);
} else {
$file = $this->getFilesystem()->get($this->generatePrivateUrl($media, $format));
}
return new StreamedResponse(function () use ($file) {
echo $file->getContent();
}, 200, $headers);
}
if (!$this->getFilesystem()->getAdapter() instanceof \Sonata\MediaBundle\Filesystem\Local) {
throw new \RuntimeException('Cannot use X-Sendfile or X-Accel-Redirect with non \Sonata\MediaBundle\Filesystem\Local');
}
$filename = sprintf('%s/%s',
$this->getFilesystem()->getAdapter()->getDirectory(),
$this->generatePrivateUrl($media, $format)
);
return new BinaryFileResponse($filename, 200, $headers);
}
public function validate(ErrorElement $errorElement, MediaInterface $media)
{
if (!$media->getBinaryContent() instanceof \SplFileInfo) {
return;
}
if ($media->getBinaryContent() instanceof UploadedFile) {
$fileName = $media->getBinaryContent()->getClientOriginalName();
} elseif ($media->getBinaryContent() instanceof File) {
$fileName = $media->getBinaryContent()->getFilename();
} else {
throw new \RuntimeException(sprintf('Invalid binary content type: %s', get_class($media->getBinaryContent())));
}
if ($media->getBinaryContent() instanceof UploadedFile && 0 === $media->getBinaryContent()->getClientSize()) {
$errorElement
->with('binaryContent')
->addViolation('The file is too big, max size: '.ini_get('upload_max_filesize'))
->end();
}
if (!in_array(strtolower(pathinfo($fileName, PATHINFO_EXTENSION)), $this->allowedExtensions)) {
$errorElement
->with('binaryContent')
->addViolation('Invalid extensions')
->end();
}
if (''!= $media->getBinaryContent()->getFilename() && !in_array($media->getBinaryContent()->getMimeType(), $this->allowedMimeTypes)) {
$errorElement
->with('binaryContent')
->addViolation('Invalid mime type : %type%', array('%type%'=> $media->getBinaryContent()->getMimeType()))
->end();
}
}
protected function fixBinaryContent(MediaInterface $media)
{
if ($media->getBinaryContent() === null || $media->getBinaryContent() instanceof File) {
return;
}
if ($media->getBinaryContent() instanceof Request) {
$this->generateBinaryFromRequest($media);
$this->updateMetadata($media);
return;
}
if (!is_file($media->getBinaryContent())) {
throw new \RuntimeException('The file does not exist : '.$media->getBinaryContent());
}
$binaryContent = new File($media->getBinaryContent());
$media->setBinaryContent($binaryContent);
}
protected function fixFilename(MediaInterface $media)
{
if ($media->getBinaryContent() instanceof UploadedFile) {
$media->setName($media->getName() ?: $media->getBinaryContent()->getClientOriginalName());
$media->setMetadataValue('filename', $media->getBinaryContent()->getClientOriginalName());
} elseif ($media->getBinaryContent() instanceof File) {
$media->setName($media->getName() ?: $media->getBinaryContent()->getBasename());
$media->setMetadataValue('filename', $media->getBinaryContent()->getBasename());
}
if (!$media->getName()) {
throw new \RuntimeException('Please define a valid media\'s name');
}
}
protected function doTransform(MediaInterface $media)
{
$this->fixBinaryContent($media);
$this->fixFilename($media);
if ($media->getBinaryContent() instanceof UploadedFile && 0 === $media->getBinaryContent()->getClientSize()) {
$media->setProviderReference(uniqid($media->getName(), true));
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
throw new UploadException('The uploaded file is not found');
}
if (!$media->getProviderReference() ||
$media->getProviderReference() === MediaInterface::MISSING_BINARY_REFERENCE
) {
$media->setProviderReference($this->generateReferenceName($media));
}
if ($media->getBinaryContent() instanceof File) {
$media->setContentType($media->getBinaryContent()->getMimeType());
$media->setSize($media->getBinaryContent()->getSize());
}
$media->setProviderStatus(MediaInterface::STATUS_OK);
}
protected function setFileContents(MediaInterface $media, $contents = null)
{
$file = $this->getFilesystem()->get(sprintf('%s/%s', $this->generatePath($media), $media->getProviderReference()), true);
$metadata = $this->metadata ? $this->metadata->get($media, $file->getName()) : array();
if ($contents) {
$file->setContent($contents, $metadata);
return;
}
$binaryContent = $media->getBinaryContent();
if ($binaryContent instanceof File) {
$path = $binaryContent->getRealPath() ?: $binaryContent->getPathname();
$file->setContent(file_get_contents($path), $metadata);
return;
}
}
protected function generateReferenceName(MediaInterface $media)
{
return $this->generateMediaUniqId($media).'.'.$media->getBinaryContent()->guessExtension();
}
protected function generateMediaUniqId(MediaInterface $media)
{
return sha1($media->getName().uniqid().rand(11111, 99999));
}
protected function generateBinaryFromRequest(MediaInterface $media)
{
if (php_sapi_name() ==='cli') {
throw new \RuntimeException('The current process cannot be executed in cli environment');
}
if (!$media->getContentType()) {
throw new \RuntimeException('You must provide the content type value for your media before setting the binary content');
}
$request = $media->getBinaryContent();
if (!$request instanceof Request) {
throw new \RuntimeException('Expected Request in binary content');
}
$content = $request->getContent();
$guesser = ExtensionGuesser::getInstance();
$extension = $guesser->guess($media->getContentType());
if (!$extension) {
throw new \RuntimeException(
sprintf('Unable to guess extension for content type %s', $media->getContentType())
);
}
$handle = tmpfile();
fwrite($handle, $content);
$file = new ApiMediaFile($handle);
$file->setExtension($extension);
$file->setMimetype($media->getContentType());
$media->setBinaryContent($file);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Gaufrette\Filesystem;
use Imagine\Image\ImagineInterface;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\CDN\CDNInterface;
use Sonata\MediaBundle\Generator\GeneratorInterface;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Thumbnail\ThumbnailInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class ImageProvider extends FileProvider
{
protected $imagineAdapter;
public function __construct($name, Filesystem $filesystem, CDNInterface $cdn, GeneratorInterface $pathGenerator, ThumbnailInterface $thumbnail, array $allowedExtensions, array $allowedMimeTypes, ImagineInterface $adapter, MetadataBuilderInterface $metadata = null)
{
parent::__construct($name, $filesystem, $cdn, $pathGenerator, $thumbnail, $allowedExtensions, $allowedMimeTypes, $metadata);
$this->imagineAdapter = $adapter;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', false,'SonataMediaBundle', array('class'=>'fa fa-picture-o'));
}
public function getHelperProperties(MediaInterface $media, $format, $options = array())
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
$box = $media->getBox();
} else {
$resizerFormat = $this->getFormat($format);
if ($resizerFormat === false) {
throw new \RuntimeException(sprintf('The image format "%s" is not defined.
                        Is the format registered in your ``sonata_media`` configuration?', $format));
}
$box = $this->resizer->getBox($media, $resizerFormat);
}
$mediaWidth = $box->getWidth();
$params = array('alt'=> $media->getName(),'title'=> $media->getName(),'src'=> $this->generatePublicUrl($media, $format),'width'=> $mediaWidth,'height'=> $box->getHeight(),
);
if ($format !== MediaProviderInterface::FORMAT_ADMIN) {
$srcSet = array();
foreach ($this->getFormats() as $providerFormat => $settings) {
if (strpos($providerFormat, $media->getContext()) === 0) {
$width = $this->resizer->getBox($media, $settings)->getWidth();
$srcSet[] = sprintf('%s %dw', $this->generatePublicUrl($media, $providerFormat), $width);
}
}
$srcSet[] = sprintf('%s %dw',
$this->generatePublicUrl($media, MediaProviderInterface::FORMAT_REFERENCE),
$media->getBox()->getWidth()
);
$params['srcset'] = implode(', ', $srcSet);
$params['sizes'] = sprintf('(max-width: %1$dpx) 100vw, %1$dpx', $mediaWidth);
}
return array_merge($params, $options);
}
public function getReferenceImage(MediaInterface $media)
{
return sprintf('%s/%s',
$this->generatePath($media),
$media->getProviderReference()
);
}
public function updateMetadata(MediaInterface $media, $force = true)
{
try {
if (!$media->getBinaryContent() instanceof \SplFileInfo) {
$path = tempnam(sys_get_temp_dir(),'sonata_update_metadata');
$fileObject = new \SplFileObject($path,'w');
$fileObject->fwrite($this->getReferenceFile($media)->getContent());
} else {
$fileObject = $media->getBinaryContent();
}
$image = $this->imagineAdapter->open($fileObject->getPathname());
$size = $image->getSize();
$media->setSize($fileObject->getSize());
$media->setWidth($size->getWidth());
$media->setHeight($size->getHeight());
} catch (\LogicException $e) {
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
$media->setSize(0);
$media->setWidth(0);
$media->setHeight(0);
}
}
public function generatePublicUrl(MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
$path = $this->getReferenceImage($media);
} else {
$path = $this->thumbnail->generatePublicUrl($this, $media, $format);
}
return $this->getCdn()->getPath($path, $media->getCdnIsFlushable());
}
public function generatePrivateUrl(MediaInterface $media, $format)
{
return $this->thumbnail->generatePrivateUrl($this, $media, $format);
}
protected function doTransform(MediaInterface $media)
{
parent::doTransform($media);
if ($media->getBinaryContent() instanceof UploadedFile) {
$fileName = $media->getBinaryContent()->getClientOriginalName();
} elseif ($media->getBinaryContent() instanceof File) {
$fileName = $media->getBinaryContent()->getFilename();
} else {
return;
}
if (!in_array(strtolower(pathinfo($fileName, PATHINFO_EXTENSION)), $this->allowedExtensions)
|| !in_array($media->getBinaryContent()->getMimeType(), $this->allowedMimeTypes)) {
return;
}
try {
$image = $this->imagineAdapter->open($media->getBinaryContent()->getPathname());
} catch (\RuntimeException $e) {
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
return;
}
$size = $image->getSize();
$media->setWidth($size->getWidth());
$media->setHeight($size->getHeight());
$media->setProviderStatus(MediaInterface::STATUS_OK);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Security\DownloadStrategyInterface;
class Pool
{
protected $providers = array();
protected $contexts = array();
protected $downloadSecurities = array();
protected $downloadStrategies = array();
protected $defaultContext;
public function __construct($context)
{
$this->defaultContext = $context;
}
public function getProvider($name)
{
if (!$name) {
throw new \InvalidArgumentException('Provider name cannot be empty, did you forget to call setProviderName() in your Media object?');
}
if (empty($this->providers)) {
throw new \RuntimeException(sprintf('Unable to retrieve provider named "%s" since there are no providers configured yet.', $name));
}
if (!isset($this->providers[$name])) {
throw new \InvalidArgumentException(sprintf('Unable to retrieve the provider named "%s". Available providers are %s.', $name,'"'.implode('", "', $this->getProviderList()).'"'));
}
return $this->providers[$name];
}
public function addProvider($name, MediaProviderInterface $instance)
{
$this->providers[$name] = $instance;
}
public function addDownloadSecurity($name, DownloadStrategyInterface $security)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.1 and will be removed in 4.0.',
E_USER_DEPRECATED
);
$this->downloadSecurities[$name] = $security;
$this->addDownloadStrategy($name, $security);
}
public function addDownloadStrategy($name, DownloadStrategyInterface $security)
{
$this->downloadStrategies[$name] = $security;
}
public function setProviders($providers)
{
$this->providers = $providers;
}
public function getProviders()
{
return $this->providers;
}
public function addContext($name, array $providers = array(), array $formats = array(), array $download = array())
{
if (!$this->hasContext($name)) {
$this->contexts[$name] = array('providers'=> array(),'formats'=> array(),'download'=> array(),
);
}
$this->contexts[$name]['providers'] = $providers;
$this->contexts[$name]['formats'] = $formats;
$this->contexts[$name]['download'] = $download;
}
public function hasContext($name)
{
return isset($this->contexts[$name]);
}
public function getContext($name)
{
if (!$this->hasContext($name)) {
return;
}
return $this->contexts[$name];
}
public function getContexts()
{
return $this->contexts;
}
public function getProviderNamesByContext($name)
{
$context = $this->getContext($name);
if (!$context) {
return;
}
return $context['providers'];
}
public function getFormatNamesByContext($name)
{
$context = $this->getContext($name);
if (!$context) {
return;
}
return $context['formats'];
}
public function getProvidersByContext($name)
{
$providers = array();
if (!$this->hasContext($name)) {
return $providers;
}
foreach ($this->getProviderNamesByContext($name) as $name) {
$providers[] = $this->getProvider($name);
}
return $providers;
}
public function getProviderList()
{
$choices = array();
foreach (array_keys($this->providers) as $name) {
$choices[$name] = $name;
}
return $choices;
}
public function getDownloadSecurity(MediaInterface $media)
{
@trigger_error('The '.__METHOD__.' method is deprecated since version 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);
return $this->getDownloadStrategy($media);
}
public function getDownloadStrategy(MediaInterface $media)
{
$context = $this->getContext($media->getContext());
$id = $context['download']['strategy'];
if (isset($this->downloadSecurities[$id])) {
return $this->downloadSecurities[$id];
}
if (!isset($this->downloadStrategies[$id])) {
throw new \RuntimeException('Unable to retrieve the download security : '.$id);
}
return $this->downloadStrategies[$id];
}
public function getDownloadMode(MediaInterface $media)
{
$context = $this->getContext($media->getContext());
return $context['download']['mode'];
}
public function getDefaultContext()
{
return $this->defaultContext;
}
public function validate(ErrorElement $errorElement, MediaInterface $media)
{
if (!$media->getProviderName()) {
return;
}
$provider = $this->getProvider($media->getProviderName());
$provider->validate($errorElement, $media);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
class VimeoProvider extends BaseVideoProvider
{
public function getHelperProperties(MediaInterface $media, $format, $options = array())
{
$defaults = array('fp_version'=> 10,'fullscreen'=> true,'title'=> true,'byline'=> 0,'portrait'=> true,'color'=> null,'hd_off'=> 0,'js_api'=> null,'js_onLoad'=> 0,'js_swf_id'=> uniqid('vimeo_player_'),
);
$player_parameters = array_merge($defaults, isset($options['player_parameters']) ? $options['player_parameters'] : array());
$box = $this->getBoxHelperProperties($media, $format, $options);
$params = array('src'=> http_build_query($player_parameters),'id'=> $player_parameters['js_swf_id'],'frameborder'=> isset($options['frameborder']) ? $options['frameborder'] : 0,'width'=> $box->getWidth(),'height'=> $box->getHeight(),'class'=> isset($options['class']) ? $options['class'] :'','allow_fullscreen'=> isset($options['allowfullscreen']) ? true : false,
);
return $params;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', false,'SonataMediaBundle', array('class'=>'fa fa-vimeo-square'));
}
public function updateMetadata(MediaInterface $media, $force = false)
{
$url = sprintf('http://vimeo.com/api/oembed.json?url=%s', $this->getReferenceUrl($media));
try {
$metadata = $this->getMetadata($media, $url);
} catch (\RuntimeException $e) {
$media->setEnabled(false);
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
return;
}
$media->setProviderMetadata($metadata);
if ($force) {
$media->setName($metadata['title']);
$media->setDescription($metadata['description']);
$media->setAuthorName($metadata['author_name']);
}
$media->setHeight($metadata['height']);
$media->setWidth($metadata['width']);
$media->setLength($metadata['duration']);
$media->setContentType('video/x-flv');
}
public function getDownloadResponse(MediaInterface $media, $format, $mode, array $headers = array())
{
return new RedirectResponse($this->getReferenceUrl($media), 302, $headers);
}
public function getReferenceUrl(MediaInterface $media)
{
return sprintf('http://vimeo.com/%s', $media->getProviderReference());
}
protected function fixBinaryContent(MediaInterface $media)
{
if (!$media->getBinaryContent()) {
return;
}
if (preg_match("/vimeo\.com\/(video\/|)(\d+)/", $media->getBinaryContent(), $matches)) {
$media->setBinaryContent($matches[2]);
}
}
protected function doTransform(MediaInterface $media)
{
$this->fixBinaryContent($media);
if (!$media->getBinaryContent()) {
return;
}
$media->setProviderName($this->name);
$media->setProviderReference($media->getBinaryContent());
$media->setProviderStatus(MediaInterface::STATUS_OK);
$this->updateMetadata($media, true);
}
}
}
namespace Sonata\MediaBundle\Provider
{
use Buzz\Browser;
use Gaufrette\Filesystem;
use Sonata\CoreBundle\Model\Metadata;
use Sonata\MediaBundle\CDN\CDNInterface;
use Sonata\MediaBundle\Generator\GeneratorInterface;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Thumbnail\ThumbnailInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
class YouTubeProvider extends BaseVideoProvider
{
protected $html5;
public function __construct($name, Filesystem $filesystem, CDNInterface $cdn, GeneratorInterface $pathGenerator, ThumbnailInterface $thumbnail, Browser $browser, MetadataBuilderInterface $metadata = null, $html5 = false)
{
parent::__construct($name, $filesystem, $cdn, $pathGenerator, $thumbnail, $browser, $metadata);
$this->html5 = $html5;
}
public function getProviderMetadata()
{
return new Metadata($this->getName(), $this->getName().'.description', false,'SonataMediaBundle', array('class'=>'fa fa-youtube'));
}
public function getHelperProperties(MediaInterface $media, $format, $options = array())
{
if (!isset($options['html5'])) {
$options['html5'] = $this->html5;
}
$default_player_url_parameters = array('rel'=> 0,'autoplay'=> 0,'loop'=> 0,'enablejsapi'=> 0,'playerapiid'=> null,'disablekb'=> 0,'egm'=> 0,'border'=> 0,'color1'=> null,'color2'=> null,'fs'=> 1,'start'=> 0,'hd'=> 1,'showsearch'=> 0,'showinfo'=> 0,'iv_load_policy'=> 1,'cc_load_policy'=> 1,'wmode'=>'window',
);
$default_player_parameters = array('border'=> $default_player_url_parameters['border'],'allowFullScreen'=> $default_player_url_parameters['fs'] =='1'? true : false,'allowScriptAccess'=> isset($options['allowScriptAccess']) ? $options['allowScriptAccess'] :'always','wmode'=> $default_player_url_parameters['wmode'],
);
$player_url_parameters = array_merge($default_player_url_parameters, isset($options['player_url_parameters']) ? $options['player_url_parameters'] : array());
$box = $this->getBoxHelperProperties($media, $format, $options);
$player_parameters = array_merge($default_player_parameters, isset($options['player_parameters']) ? $options['player_parameters'] : array(), array('width'=> $box->getWidth(),'height'=> $box->getHeight(),
));
$params = array('html5'=> $options['html5'],'player_url_parameters'=> http_build_query($player_url_parameters),'player_parameters'=> $player_parameters,
);
return $params;
}
public function updateMetadata(MediaInterface $media, $force = false)
{
$url = sprintf('https://www.youtube.com/oembed?url=%s&format=json', $this->getReferenceUrl($media));
try {
$metadata = $this->getMetadata($media, $url);
} catch (\RuntimeException $e) {
$media->setEnabled(false);
$media->setProviderStatus(MediaInterface::STATUS_ERROR);
return;
}
$media->setProviderMetadata($metadata);
if ($force) {
$media->setName($metadata['title']);
$media->setAuthorName($metadata['author_name']);
}
$media->setHeight($metadata['height']);
$media->setWidth($metadata['width']);
$media->setContentType('video/x-flv');
}
public function getDownloadResponse(MediaInterface $media, $format, $mode, array $headers = array())
{
return new RedirectResponse($this->getReferenceUrl($media), 302, $headers);
}
public function getReferenceUrl(MediaInterface $media)
{
return sprintf('https://www.youtube.com/watch?v=%s', $media->getProviderReference());
}
protected function fixBinaryContent(MediaInterface $media)
{
if (!$media->getBinaryContent()) {
return;
}
if (strlen($media->getBinaryContent()) === 11) {
return;
}
if (preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\#\?&\"'>]+)/", $media->getBinaryContent(), $matches)) {
$media->setBinaryContent($matches[1]);
}
}
protected function doTransform(MediaInterface $media)
{
$this->fixBinaryContent($media);
if (!$media->getBinaryContent()) {
return;
}
$media->setProviderName($this->name);
$media->setProviderStatus(MediaInterface::STATUS_OK);
$media->setProviderReference($media->getBinaryContent());
$this->updateMetadata($media, true);
}
}
}
namespace Sonata\MediaBundle\Resizer
{
use Gaufrette\File;
use Imagine\Image\Box;
use Sonata\MediaBundle\Model\MediaInterface;
interface ResizerInterface
{
public function resize(MediaInterface $media, File $in, File $out, $format, array $settings);
public function getBox(MediaInterface $media, array $settings);
}
}
namespace Sonata\MediaBundle\Resizer
{
use Gaufrette\File;
use Imagine\Exception\InvalidArgumentException;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;
use Imagine\Image\ImagineInterface;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
class SimpleResizer implements ResizerInterface
{
protected $adapter;
protected $mode;
protected $metadata;
public function __construct(ImagineInterface $adapter, $mode, MetadataBuilderInterface $metadata)
{
$this->adapter = $adapter;
$this->mode = $mode;
$this->metadata = $metadata;
}
public function resize(MediaInterface $media, File $in, File $out, $format, array $settings)
{
if (!isset($settings['width'])) {
throw new \RuntimeException(sprintf('Width parameter is missing in context "%s" for provider "%s"', $media->getContext(), $media->getProviderName()));
}
$image = $this->adapter->load($in->getContent());
$content = $image
->thumbnail($this->getBox($media, $settings), $this->mode)
->get($format, array('quality'=> $settings['quality']));
$out->setContent($content, $this->metadata->get($media, $out->getName()));
}
public function getBox(MediaInterface $media, array $settings)
{
$size = $media->getBox();
if ($settings['width'] == null && $settings['height'] == null) {
throw new \RuntimeException(sprintf('Width/Height parameter is missing in context "%s" for provider "%s". Please add at least one parameter.', $media->getContext(), $media->getProviderName()));
}
if ($settings['height'] == null) {
$settings['height'] = (int) ($settings['width'] * $size->getHeight() / $size->getWidth());
}
if ($settings['width'] == null) {
$settings['width'] = (int) ($settings['height'] * $size->getWidth() / $size->getHeight());
}
return $this->computeBox($media, $settings);
}
protected function computeBox(MediaInterface $media, array $settings)
{
if ($this->mode !== ImageInterface::THUMBNAIL_INSET && $this->mode !== ImageInterface::THUMBNAIL_OUTBOUND) {
throw new InvalidArgumentException('Invalid mode specified');
}
$size = $media->getBox();
$ratios = array(
$settings['width'] / $size->getWidth(),
$settings['height'] / $size->getHeight(),
);
if ($this->mode === ImageInterface::THUMBNAIL_INSET) {
$ratio = min($ratios);
} else {
$ratio = max($ratios);
}
return $size->scale($ratio);
}
}
}
namespace Sonata\MediaBundle\Resizer
{
use Gaufrette\File;
use Imagine\Image\Box;
use Imagine\Image\ImagineInterface;
use Imagine\Image\Point;
use Sonata\MediaBundle\Metadata\MetadataBuilderInterface;
use Sonata\MediaBundle\Model\MediaInterface;
class SquareResizer implements ResizerInterface
{
protected $adapter;
protected $mode;
public function __construct(ImagineInterface $adapter, $mode, MetadataBuilderInterface $metadata)
{
$this->adapter = $adapter;
$this->mode = $mode;
$this->metadata = $metadata;
}
public function getAdapter()
{
return $this->adapter;
}
public function setAdapter(ImagineInterface $adapter)
{
$this->adapter = $adapter;
}
public function resize(MediaInterface $media, File $in, File $out, $format, array $settings)
{
if (!isset($settings['width'])) {
throw new \RuntimeException(sprintf('Width parameter is missing in context "%s" for provider "%s"', $media->getContext(), $media->getProviderName()));
}
$image = $this->adapter->load($in->getContent());
$size = $media->getBox();
if (null != $settings['height']) {
if ($size->getHeight() > $size->getWidth()) {
$higher = $size->getHeight();
$lower = $size->getWidth();
} else {
$higher = $size->getWidth();
$lower = $size->getHeight();
}
$crop = $higher - $lower;
if ($crop > 0) {
$point = $higher == $size->getHeight() ? new Point(0, 0) : new Point($crop / 2, 0);
$image->crop($point, new Box($lower, $lower));
$size = $image->getSize();
}
}
$settings['height'] = (int) ($settings['width'] * $size->getHeight() / $size->getWidth());
if ($settings['height'] < $size->getHeight() && $settings['width'] < $size->getWidth()) {
$content = $image
->thumbnail(new Box($settings['width'], $settings['height']), $this->mode)
->get($format, array('quality'=> $settings['quality']));
} else {
$content = $image->get($format, array('quality'=> $settings['quality']));
}
$out->setContent($content, $this->metadata->get($media, $out->getName()));
}
public function getBox(MediaInterface $media, array $settings)
{
$size = $media->getBox();
if (null != $settings['height']) {
if ($size->getHeight() > $size->getWidth()) {
$higher = $size->getHeight();
$lower = $size->getWidth();
} else {
$higher = $size->getWidth();
$lower = $size->getHeight();
}
if ($higher - $lower > 0) {
return new Box($lower, $lower);
}
}
$settings['height'] = (int) ($settings['width'] * $size->getHeight() / $size->getWidth());
if ($settings['height'] < $size->getHeight() && $settings['width'] < $size->getWidth()) {
return new Box($settings['width'], $settings['height']);
}
return $size;
}
}
}
namespace Sonata\MediaBundle\Security
{
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\Request;
interface DownloadStrategyInterface
{
public function isGranted(MediaInterface $media, Request $request);
public function getDescription();
}
}
namespace Sonata\MediaBundle\Security
{
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
class ForbiddenDownloadStrategy implements DownloadStrategyInterface
{
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function isGranted(MediaInterface $media, Request $request)
{
return false;
}
public function getDescription()
{
return $this->translator->trans('description.forbidden_download_strategy', array(),'SonataMediaBundle');
}
}
}
namespace Sonata\MediaBundle\Security
{
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
class PublicDownloadStrategy implements DownloadStrategyInterface
{
protected $translator;
public function __construct(TranslatorInterface $translator)
{
$this->translator = $translator;
}
public function isGranted(MediaInterface $media, Request $request)
{
return true;
}
public function getDescription()
{
return $this->translator->trans('description.public_download_strategy', array(),'SonataMediaBundle');
}
}
}
namespace Sonata\MediaBundle\Security
{
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Translation\TranslatorInterface;
class RolesDownloadStrategy implements DownloadStrategyInterface
{
protected $roles;
protected $security;
protected $translator;
public function __construct(TranslatorInterface $translator, $security, array $roles = array())
{
if (!$security instanceof AuthorizationCheckerInterface && !$security instanceof SecurityContextInterface) {
throw new \InvalidArgumentException('Argument 2 should be an instance of Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface or Symfony\Component\Security\Core\SecurityContextInterface');
}
$this->roles = $roles;
$this->security = $security;
$this->translator = $translator;
}
public function isGranted(MediaInterface $media, Request $request)
{
try {
return $this->security->isGranted($this->roles);
} catch (AuthenticationCredentialsNotFoundException $e) {
return false;
}
}
public function getDescription()
{
return $this->translator->trans('description.roles_download_strategy', array('%roles%'=>'<code>'.implode('</code>, <code>', $this->roles).'</code>'),'SonataMediaBundle');
}
}
}
namespace Sonata\MediaBundle\Security
{
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Translation\TranslatorInterface;
class SessionDownloadStrategy implements DownloadStrategyInterface
{
protected $container;
protected $translator;
protected $times;
protected $sessionKey ='sonata/media/session/times';
private $session;
public function __construct(TranslatorInterface $translator, $session, $times)
{
if ($session instanceof ContainerInterface) {
@trigger_error('Using an instance of Symfony\Component\DependencyInjection\ContainerInterface is deprecated since 
                version 3.1 and will be removed in 4.0. 
                Use Symfony\Component\HttpFoundation\Session\SessionInterface instead.',
E_USER_DEPRECATED
);
$this->session = $session->get('session');
} elseif ($session instanceof SessionInterface) {
$this->session = $session;
} else {
throw new \InvalidArgumentException('$session should be an instance of Symfony\Component\HttpFoundation\Session\SessionInterface');
}
$this->times = $times;
$this->translator = $translator;
}
public function isGranted(MediaInterface $media, Request $request)
{
$times = $this->session->get($this->sessionKey, 0);
if ($times >= $this->times) {
return false;
}
++$times;
$this->session->set($this->sessionKey, $times);
return true;
}
public function getDescription()
{
return $this->translator->transChoice('description.session_download_strategy',
$this->times,
array('%times%'=> $this->times),'SonataMediaBundle');
}
}
}
namespace Symfony\Component\Templating\Helper
{
interface HelperInterface
{
public function getName();
public function setCharset($charset);
public function getCharset();
}
}
namespace Symfony\Component\Templating\Helper
{
abstract class Helper implements HelperInterface
{
protected $charset ='UTF-8';
public function setCharset($charset)
{
$this->charset = $charset;
}
public function getCharset()
{
return $this->charset;
}
}
}
namespace Sonata\MediaBundle\Templating\Helper
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\Pool;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\Templating\Helper\Helper;
class MediaHelper extends Helper
{
protected $pool = null;
protected $templating = null;
public function __construct(Pool $pool, EngineInterface $templating)
{
$this->pool = $pool;
$this->templating = $templating;
}
public function getName()
{
return'sonata_media';
}
public function media($media, $format, $options = array())
{
if (!$media) {
return'';
}
$provider = $this->getProvider($media);
$format = $provider->getFormatName($media, $format);
$options = $provider->getHelperProperties($media, $format, $options);
return $this->templating->render($provider->getTemplate('helper_view'), array('media'=> $media,'format'=> $format,'options'=> $options,
));
}
public function thumbnail($media, $format, $options = array())
{
if (!$media) {
return'';
}
$provider = $this->getProvider($media);
$format = $provider->getFormatName($media, $format);
$formatDefinition = $provider->getFormat($format);
$options = array_merge(array('title'=> $media->getName(),'width'=> $formatDefinition['width'],
), $options);
$options['src'] = $provider->generatePublicUrl($media, $format);
return $this->getTemplating()->render($provider->getTemplate('helper_thumbnail'), array('media'=> $media,'options'=> $options,
));
}
public function path($media, $format)
{
if (!$media) {
return'';
}
$provider = $this->getProvider($media);
$format = $provider->getFormatName($media, $format);
return $provider->generatePublicUrl($media, $format);
}
private function getProvider(MediaInterface $media)
{
return $this->pool->getProvider($media->getProviderName());
}
}
}
namespace Sonata\MediaBundle\Thumbnail
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\MediaProviderInterface;
interface ThumbnailInterface
{
public function generatePublicUrl(MediaProviderInterface $provider, MediaInterface $media, $format);
public function generatePrivateUrl(MediaProviderInterface $provider, MediaInterface $media, $format);
public function generate(MediaProviderInterface $provider, MediaInterface $media);
public function delete(MediaProviderInterface $provider, MediaInterface $media, $formats = null);
}
}
namespace Sonata\MediaBundle\Thumbnail
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\MediaProviderInterface;
use Sonata\NotificationBundle\Backend\BackendInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
class ConsumerThumbnail implements ThumbnailInterface
{
protected $id;
protected $thumbnail;
protected $backend;
protected $dispatcher;
public function __construct($id, ThumbnailInterface $thumbnail, BackendInterface $backend, EventDispatcherInterface $dispatcher = null)
{
if (null === $dispatcher) {
@trigger_error('Since version 3.0, passing an empty parameter in argument 4 for __construct() in '.__CLASS__.' is
                 deprecated and the workaround for it will be removed in 4.0.',
E_USER_DEPRECATED
);
}
$this->id = $id;
$this->thumbnail = $thumbnail;
$this->backend = $backend;
$this->dispatcher = $dispatcher;
}
public function generatePublicUrl(MediaProviderInterface $provider, MediaInterface $media, $format)
{
return $this->thumbnail->generatePrivateUrl($provider, $media, $format);
}
public function generatePrivateUrl(MediaProviderInterface $provider, MediaInterface $media, $format)
{
return $this->thumbnail->generatePrivateUrl($provider, $media, $format);
}
public function generate(MediaProviderInterface $provider, MediaInterface $media)
{
$backend = $this->backend;
$id = $this->id;
$publish = function () use ($backend, $media, $id) {
$backend->createAndPublish('sonata.media.create_thumbnail', array('thumbnailId'=> $id,'mediaId'=> $media->getId(),'providerReference'=> $media->getProviderReference(),
));
};
if (null === $this->dispatcher) {
$publish();
} else {
$this->dispatcher->addListener('kernel.finish_request', $publish);
$this->dispatcher->addListener('console.terminate', $publish);
}
}
public function delete(MediaProviderInterface $provider, MediaInterface $media, $formats = null)
{
return $this->thumbnail->delete($provider, $media, $formats);
}
}
}
namespace Sonata\MediaBundle\Thumbnail
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\MediaProviderInterface;
class FormatThumbnail implements ThumbnailInterface
{
private $defaultFormat;
public function __construct($defaultFormat)
{
$this->defaultFormat = $defaultFormat;
}
public function generatePublicUrl(MediaProviderInterface $provider, MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
$path = $provider->getReferenceImage($media);
} else {
$path = sprintf('%s/thumb_%s_%s.%s', $provider->generatePath($media), $media->getId(), $format, $this->getExtension($media));
}
return $path;
}
public function generatePrivateUrl(MediaProviderInterface $provider, MediaInterface $media, $format)
{
if (MediaProviderInterface::FORMAT_REFERENCE === $format) {
return $provider->getReferenceImage($media);
}
return sprintf('%s/thumb_%s_%s.%s',
$provider->generatePath($media),
$media->getId(),
$format,
$this->getExtension($media)
);
}
public function generate(MediaProviderInterface $provider, MediaInterface $media)
{
if (!$provider->requireThumbnails()) {
return;
}
$referenceFile = $provider->getReferenceFile($media);
if (!$referenceFile->exists()) {
return;
}
foreach ($provider->getFormats() as $format => $settings) {
if (substr($format, 0, strlen($media->getContext())) == $media->getContext() ||
MediaProviderInterface::FORMAT_ADMIN === $format) {
$provider->getResizer()->resize(
$media,
$referenceFile,
$provider->getFilesystem()->get($provider->generatePrivateUrl($media, $format), true),
$this->getExtension($media),
$settings
);
}
}
}
public function delete(MediaProviderInterface $provider, MediaInterface $media, $formats = null)
{
if (is_null($formats)) {
$formats = array_keys($provider->getFormats());
} elseif (is_string($formats)) {
$formats = array($formats);
}
if (!is_array($formats)) {
throw new \InvalidArgumentException('"Formats" argument should be string or array');
}
foreach ($formats as $format) {
$path = $provider->generatePrivateUrl($media, $format);
if ($path && $provider->getFilesystem()->has($path)) {
$provider->getFilesystem()->delete($path);
}
}
}
protected function getExtension(MediaInterface $media)
{
$ext = $media->getExtension();
if (!is_string($ext) || strlen($ext) < 3) {
$ext = $this->defaultFormat;
}
return $ext;
}
}
}
namespace
{
interface Twig_Extension_InitRuntimeInterface
{
public function initRuntime(Twig_Environment $environment);
}
class_alias('Twig_Extension_InitRuntimeInterface','Twig\Extension\InitRuntimeInterface', false);
}
namespace Sonata\MediaBundle\Twig\Extension
{
use Sonata\CoreBundle\Model\ManagerInterface;
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Provider\Pool;
use Sonata\MediaBundle\Twig\TokenParser\MediaTokenParser;
use Sonata\MediaBundle\Twig\TokenParser\PathTokenParser;
use Sonata\MediaBundle\Twig\TokenParser\ThumbnailTokenParser;
class MediaExtension extends \Twig_Extension implements \Twig_Extension_InitRuntimeInterface
{
protected $mediaService;
protected $resources = array();
protected $mediaManager;
protected $environment;
public function __construct(Pool $mediaService, ManagerInterface $mediaManager)
{
$this->mediaService = $mediaService;
$this->mediaManager = $mediaManager;
}
public function getTokenParsers()
{
return array(
new MediaTokenParser(get_called_class()),
new ThumbnailTokenParser(get_called_class()),
new PathTokenParser(get_called_class()),
);
}
public function initRuntime(\Twig_Environment $environment)
{
$this->environment = $environment;
}
public function media($media, $format, $options = array())
{
$media = $this->getMedia($media);
if (!$media) {
return'';
}
$provider = $this
->getMediaService()
->getProvider($media->getProviderName());
$format = $provider->getFormatName($media, $format);
$options = $provider->getHelperProperties($media, $format, $options);
return $this->render($provider->getTemplate('helper_view'), array('media'=> $media,'format'=> $format,'options'=> $options,
));
}
public function thumbnail($media, $format, $options = array())
{
$media = $this->getMedia($media);
if (!$media) {
return'';
}
$provider = $this->getMediaService()
->getProvider($media->getProviderName());
$format = $provider->getFormatName($media, $format);
$format_definition = $provider->getFormat($format);
$defaultOptions = array('title'=> $media->getName(),'alt'=> $media->getName(),
);
if ($format_definition['width']) {
$defaultOptions['width'] = $format_definition['width'];
}
if ($format_definition['height']) {
$defaultOptions['height'] = $format_definition['height'];
}
$options = array_merge($defaultOptions, $options);
$options['src'] = $provider->generatePublicUrl($media, $format);
return $this->render($provider->getTemplate('helper_thumbnail'), array('media'=> $media,'options'=> $options,
));
}
public function render($template, array $parameters = array())
{
if (!isset($this->resources[$template])) {
$this->resources[$template] = $this->environment->loadTemplate($template);
}
return $this->resources[$template]->render($parameters);
}
public function path($media, $format)
{
$media = $this->getMedia($media);
if (!$media) {
return'';
}
$provider = $this->getMediaService()
->getProvider($media->getProviderName());
$format = $provider->getFormatName($media, $format);
return $provider->generatePublicUrl($media, $format);
}
public function getMediaService()
{
return $this->mediaService;
}
private function getMedia($media)
{
if (!$media instanceof MediaInterface && strlen($media) > 0) {
$media = $this->mediaManager->findOneBy(array('id'=> $media,
));
}
if (!$media instanceof MediaInterface) {
return false;
}
if ($media->getProviderStatus() !== MediaInterface::STATUS_OK) {
return false;
}
return $media;
}
}
}