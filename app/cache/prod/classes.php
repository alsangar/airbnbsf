<?php 
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
if (PHP_VERSION_ID >= 50400) {
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
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
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
if ($route->getCondition() && !$this->getExpressionLanguage()->evaluate($route->getCondition(), array('context'=> $this->context,'request'=> $this->request))) {
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
class Twig_Markup implements Countable
{
protected $content;
protected $charset;
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
return function_exists('mb_get_info') ? mb_strlen($this->content, $this->charset) : strlen($this->content);
}
}
}
namespace Doctrine\Common\Annotations
{
class FileCacheReader implements Reader
{
private $reader;
private $dir;
private $debug;
private $loadedAnnotations = array();
private $classNameHashes = array();
private $umask;
public function __construct(Reader $reader, $cacheDir, $debug = false, $umask = 0002)
{
if ( ! is_int($umask)) {
throw new \InvalidArgumentException(sprintf('The parameter umask must be an integer, was: %s',
gettype($umask)
));
}
$this->reader = $reader;
$this->umask = $umask;
if (!is_dir($cacheDir) && !@mkdir($cacheDir, 0777 & (~$this->umask), true)) {
throw new \InvalidArgumentException(sprintf('The directory "%s" does not exist and could not be created.', $cacheDir));
}
$this->dir = rtrim($cacheDir,'\\/');
$this->debug = $debug;
}
public function getClassAnnotations(\ReflectionClass $class)
{
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name];
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getClassAnnotations($class);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getClassAnnotations($class);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
public function getPropertyAnnotations(\ReflectionProperty $property)
{
$class = $property->getDeclaringClass();
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name].'$'.$property->getName();
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getPropertyAnnotations($property);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getPropertyAnnotations($property);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
public function getMethodAnnotations(\ReflectionMethod $method)
{
$class = $method->getDeclaringClass();
if ( ! isset($this->classNameHashes[$class->name])) {
$this->classNameHashes[$class->name] = sha1($class->name);
}
$key = $this->classNameHashes[$class->name].'#'.$method->getName();
if (isset($this->loadedAnnotations[$key])) {
return $this->loadedAnnotations[$key];
}
$path = $this->dir.'/'.strtr($key,'\\','-').'.cache.php';
if (!is_file($path)) {
$annot = $this->reader->getMethodAnnotations($method);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
if ($this->debug
&& (false !== $filename = $class->getFilename())
&& filemtime($path) < filemtime($filename)) {
@unlink($path);
$annot = $this->reader->getMethodAnnotations($method);
$this->saveCacheFile($path, $annot);
return $this->loadedAnnotations[$key] = $annot;
}
return $this->loadedAnnotations[$key] = include $path;
}
private function saveCacheFile($path, $data)
{
if (!is_writable($this->dir)) {
throw new \InvalidArgumentException(sprintf('The directory "%s" is not writable. Both, the webserver and the console user need access. You can manage access rights for multiple users with "chmod +a". If your system does not support this, check out the acl package.', $this->dir));
}
$tempfile = tempnam($this->dir, uniqid('', true));
if (false === $tempfile) {
throw new \RuntimeException(sprintf('Unable to create tempfile in directory: %s', $this->dir));
}
$written = file_put_contents($tempfile,'<?php return unserialize('.var_export(serialize($data), true).');');
if (false === $written) {
throw new \RuntimeException(sprintf('Unable to write cached file to: %s', $tempfile));
}
@chmod($tempfile, 0666 & (~$this->umask));
if (false === rename($tempfile, $path)) {
@unlink($tempfile);
throw new \RuntimeException(sprintf('Unable to rename %s to %s', $tempfile, $path));
}
}
public function getClassAnnotation(\ReflectionClass $class, $annotationName)
{
$annotations = $this->getClassAnnotations($class);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function getMethodAnnotation(\ReflectionMethod $method, $annotationName)
{
$annotations = $this->getMethodAnnotations($method);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function getPropertyAnnotation(\ReflectionProperty $property, $annotationName)
{
$annotations = $this->getPropertyAnnotations($property);
foreach ($annotations as $annotation) {
if ($annotation instanceof $annotationName) {
return $annotation;
}
}
return null;
}
public function clearLoadedAnnotations()
{
$this->loadedAnnotations = array();
}
}
}
namespace Doctrine\Common
{
use Doctrine\Common\Lexer\AbstractLexer;
abstract class Lexer extends AbstractLexer
{
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
namespace Sonata\MediaBundle\Extra
{
use Sonata\MediaBundle\Model\MediaInterface;
use Sonata\MediaBundle\Model\MediaManagerInterface;
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
$this->allowEreg ='@https://([a-zA-Z0-9]*).pixlr.com/_temp/[0-9a-z]{24}\.[a-z]*@';
}
public function editAction($id, $mode)
{
if (!in_array($mode, array('express','editor'))) {
throw new NotFoundHttpException('Invalid mode');
}
$media = $this->getMedia($id);
$provider = $this->pool->getProvider($media->getProviderName());
$hash = $this->generateHash($media);
$parameters = array('s'=>'c','referrer'=> $this->referrer,'exit'=> $this->router->generate('sonata_media_pixlr_exit', array('hash'=> $hash,'id'=> $media->getId()), UrlGeneratorInterface::ABSOLUTE_URL),'image'=> $provider->generatePublicUrl($media,'reference'),'title'=> $media->getName(),'target'=> $this->router->generate('sonata_media_pixlr_target', array('hash'=> $hash,'id'=> $media->getId()), UrlGeneratorInterface::ABSOLUTE_URL),'locktitle'=> true,'locktarget'=> true,
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
namespace Sonata\MediaBundle\Twig\Node
{
class MediaNode extends \Twig_Node
{
protected $extensionName;
public function __construct($extensionName, \Twig_Node_Expression $media, \Twig_Node_Expression $format, \Twig_Node_Expression $attributes, $lineno, $tag = null)
{
$this->extensionName = $extensionName;
parent::__construct(array('media'=> $media,'format'=> $format,'attributes'=> $attributes), array(), $lineno, $tag);
}
public function compile(\Twig_Compiler $compiler)
{
$compiler
->addDebugInfo($this)
->write(sprintf("echo \$this->env->getExtension('%s')->media(", $this->extensionName))
->subcompile($this->getNode('media'))
->raw(', ')
->subcompile($this->getNode('format'))
->raw(', ')
->subcompile($this->getNode('attributes'))
->raw(");\n")
;
}
}
}
namespace Sonata\MediaBundle\Twig\Node
{
class PathNode extends \Twig_Node
{
protected $extensionName;
public function __construct($extensionName, \Twig_Node_Expression $media, \Twig_Node_Expression $format, $lineno, $tag = null)
{
$this->extensionName = $extensionName;
parent::__construct(array('media'=> $media,'format'=> $format), array(), $lineno, $tag);
}
public function compile(\Twig_Compiler $compiler)
{
$compiler
->addDebugInfo($this)
->write(sprintf("echo \$this->env->getExtension('%s')->path(", $this->extensionName))
->subcompile($this->getNode('media'))
->raw(', ')
->subcompile($this->getNode('format'))
->raw(");\n")
;
}
}
}
namespace Sonata\MediaBundle\Twig\Node
{
class ThumbnailNode extends \Twig_Node
{
protected $extensionName;
public function __construct($extensionName, \Twig_Node_Expression $media, \Twig_Node_Expression $format, \Twig_Node_Expression $attributes, $lineno, $tag = null)
{
$this->extensionName = $extensionName;
parent::__construct(array('media'=> $media,'format'=> $format,'attributes'=> $attributes), array(), $lineno, $tag);
}
public function compile(\Twig_Compiler $compiler)
{
$compiler
->addDebugInfo($this)
->write(sprintf("echo \$this->env->getExtension('%s')->thumbnail(", $this->extensionName))
->subcompile($this->getNode('media'))
->raw(', ')
->subcompile($this->getNode('format'))
->raw(', ')
->subcompile($this->getNode('attributes'))
->raw(");\n")
;
}
}
}