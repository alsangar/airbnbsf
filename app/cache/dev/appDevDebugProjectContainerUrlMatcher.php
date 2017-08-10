<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>.*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>.*)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/adminSonata')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/adminSonata') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/adminSonata/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/adminSonata/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/adminSonata/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/adminSonata/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/adminSonata/core/get-short-object-description') && preg_match('#^/adminSonata/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/adminSonata/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/adminSonata/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                // sonata_admin_retrieve_autocomplete_items
                if ($pathinfo === '/adminSonata/core/get-autocomplete-items') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                }

                if (0 === strpos($pathinfo, '/adminSonata/sonata')) {
                    if (0 === strpos($pathinfo, '/adminSonata/sonata/classification')) {
                        if (0 === strpos($pathinfo, '/adminSonata/sonata/classification/category')) {
                            // admin_sonata_classification_category_list
                            if ($pathinfo === '/adminSonata/sonata/classification/category/list') {
                                return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_list',  '_route' => 'admin_sonata_classification_category_list',);
                            }

                            // admin_sonata_classification_category_create
                            if ($pathinfo === '/adminSonata/sonata/classification/category/create') {
                                return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_create',  '_route' => 'admin_sonata_classification_category_create',);
                            }

                            // admin_sonata_classification_category_batch
                            if ($pathinfo === '/adminSonata/sonata/classification/category/batch') {
                                return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_batch',  '_route' => 'admin_sonata_classification_category_batch',);
                            }

                            // admin_sonata_classification_category_edit
                            if (preg_match('#^/adminSonata/sonata/classification/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_edit')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_edit',));
                            }

                            // admin_sonata_classification_category_delete
                            if (preg_match('#^/adminSonata/sonata/classification/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_delete')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_delete',));
                            }

                            // admin_sonata_classification_category_show
                            if (preg_match('#^/adminSonata/sonata/classification/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_category_show')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_show',));
                            }

                            // admin_sonata_classification_category_export
                            if ($pathinfo === '/adminSonata/sonata/classification/category/export') {
                                return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_export',  '_route' => 'admin_sonata_classification_category_export',);
                            }

                            // admin_sonata_classification_category_tree
                            if ($pathinfo === '/adminSonata/sonata/classification/category/tree') {
                                return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::treeAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_sonata_classification_category_tree',  '_route' => 'admin_sonata_classification_category_tree',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/adminSonata/sonata/classification/tag')) {
                            // admin_sonata_classification_tag_list
                            if ($pathinfo === '/adminSonata/sonata/classification/tag/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_list',  '_route' => 'admin_sonata_classification_tag_list',);
                            }

                            // admin_sonata_classification_tag_create
                            if ($pathinfo === '/adminSonata/sonata/classification/tag/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_create',  '_route' => 'admin_sonata_classification_tag_create',);
                            }

                            // admin_sonata_classification_tag_batch
                            if ($pathinfo === '/adminSonata/sonata/classification/tag/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_batch',  '_route' => 'admin_sonata_classification_tag_batch',);
                            }

                            // admin_sonata_classification_tag_edit
                            if (preg_match('#^/adminSonata/sonata/classification/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_edit',));
                            }

                            // admin_sonata_classification_tag_delete
                            if (preg_match('#^/adminSonata/sonata/classification/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_delete',));
                            }

                            // admin_sonata_classification_tag_show
                            if (preg_match('#^/adminSonata/sonata/classification/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_show',));
                            }

                            // admin_sonata_classification_tag_export
                            if ($pathinfo === '/adminSonata/sonata/classification/tag/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_sonata_classification_tag_export',  '_route' => 'admin_sonata_classification_tag_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/adminSonata/sonata/classification/co')) {
                            if (0 === strpos($pathinfo, '/adminSonata/sonata/classification/collection')) {
                                // admin_sonata_classification_collection_list
                                if ($pathinfo === '/adminSonata/sonata/classification/collection/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_list',  '_route' => 'admin_sonata_classification_collection_list',);
                                }

                                // admin_sonata_classification_collection_create
                                if ($pathinfo === '/adminSonata/sonata/classification/collection/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_create',  '_route' => 'admin_sonata_classification_collection_create',);
                                }

                                // admin_sonata_classification_collection_batch
                                if ($pathinfo === '/adminSonata/sonata/classification/collection/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_batch',  '_route' => 'admin_sonata_classification_collection_batch',);
                                }

                                // admin_sonata_classification_collection_edit
                                if (preg_match('#^/adminSonata/sonata/classification/collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_edit',));
                                }

                                // admin_sonata_classification_collection_delete
                                if (preg_match('#^/adminSonata/sonata/classification/collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_delete',));
                                }

                                // admin_sonata_classification_collection_show
                                if (preg_match('#^/adminSonata/sonata/classification/collection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_collection_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_show',));
                                }

                                // admin_sonata_classification_collection_export
                                if ($pathinfo === '/adminSonata/sonata/classification/collection/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_sonata_classification_collection_export',  '_route' => 'admin_sonata_classification_collection_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/adminSonata/sonata/classification/context')) {
                                // admin_sonata_classification_context_list
                                if ($pathinfo === '/adminSonata/sonata/classification/context/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_list',  '_route' => 'admin_sonata_classification_context_list',);
                                }

                                // admin_sonata_classification_context_create
                                if ($pathinfo === '/adminSonata/sonata/classification/context/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_create',  '_route' => 'admin_sonata_classification_context_create',);
                                }

                                // admin_sonata_classification_context_batch
                                if ($pathinfo === '/adminSonata/sonata/classification/context/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_batch',  '_route' => 'admin_sonata_classification_context_batch',);
                                }

                                // admin_sonata_classification_context_edit
                                if (preg_match('#^/adminSonata/sonata/classification/context/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_edit',));
                                }

                                // admin_sonata_classification_context_delete
                                if (preg_match('#^/adminSonata/sonata/classification/context/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_delete',));
                                }

                                // admin_sonata_classification_context_show
                                if (preg_match('#^/adminSonata/sonata/classification/context/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_classification_context_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_show',));
                                }

                                // admin_sonata_classification_context_export
                                if ($pathinfo === '/adminSonata/sonata/classification/context/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_sonata_classification_context_export',  '_route' => 'admin_sonata_classification_context_export',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/adminSonata/sonata/media')) {
                        if (0 === strpos($pathinfo, '/adminSonata/sonata/media/media')) {
                            // admin_sonata_media_media_list
                            if ($pathinfo === '/adminSonata/sonata/media/media/list') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                            }

                            // admin_sonata_media_media_create
                            if ($pathinfo === '/adminSonata/sonata/media/media/create') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                            }

                            // admin_sonata_media_media_batch
                            if ($pathinfo === '/adminSonata/sonata/media/media/batch') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                            }

                            // admin_sonata_media_media_edit
                            if (preg_match('#^/adminSonata/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                            }

                            // admin_sonata_media_media_delete
                            if (preg_match('#^/adminSonata/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                            }

                            // admin_sonata_media_media_show
                            if (preg_match('#^/adminSonata/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                            }

                            // admin_sonata_media_media_export
                            if ($pathinfo === '/adminSonata/sonata/media/media/export') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/adminSonata/sonata/media/gallery')) {
                            // admin_sonata_media_gallery_list
                            if ($pathinfo === '/adminSonata/sonata/media/gallery/list') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                            }

                            // admin_sonata_media_gallery_create
                            if ($pathinfo === '/adminSonata/sonata/media/gallery/create') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                            }

                            // admin_sonata_media_gallery_batch
                            if ($pathinfo === '/adminSonata/sonata/media/gallery/batch') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                            }

                            // admin_sonata_media_gallery_edit
                            if (preg_match('#^/adminSonata/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                            }

                            // admin_sonata_media_gallery_delete
                            if (preg_match('#^/adminSonata/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                            }

                            // admin_sonata_media_gallery_show
                            if (preg_match('#^/adminSonata/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                            }

                            // admin_sonata_media_gallery_export
                            if ($pathinfo === '/adminSonata/sonata/media/gallery/export') {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                            }

                            if (0 === strpos($pathinfo, '/adminSonata/sonata/media/galleryhasmedia')) {
                                // admin_sonata_media_galleryhasmedia_list
                                if ($pathinfo === '/adminSonata/sonata/media/galleryhasmedia/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                                }

                                // admin_sonata_media_galleryhasmedia_create
                                if ($pathinfo === '/adminSonata/sonata/media/galleryhasmedia/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                                }

                                // admin_sonata_media_galleryhasmedia_batch
                                if ($pathinfo === '/adminSonata/sonata/media/galleryhasmedia/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                                }

                                // admin_sonata_media_galleryhasmedia_edit
                                if (preg_match('#^/adminSonata/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                                }

                                // admin_sonata_media_galleryhasmedia_delete
                                if (preg_match('#^/adminSonata/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                                }

                                // admin_sonata_media_galleryhasmedia_show
                                if (preg_match('#^/adminSonata/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                                }

                                // admin_sonata_media_galleryhasmedia_export
                                if ($pathinfo === '/adminSonata/sonata/media/galleryhasmedia/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                                }

                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/adminPanel')) {
                // easyadmin
                if (rtrim($pathinfo, '/') === '/adminPanel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'easyadmin');
                    }

                    return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
                }

                // admin
                if (rtrim($pathinfo, '/') === '/adminPanel') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // admin_panel
        if ($pathinfo === '/adminPanel') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin_panel',);
        }

        if (0 === strpos($pathinfo, '/rooms')) {
            // rooms_list
            if ($pathinfo === '/rooms/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsListAction',  '_route' => 'rooms_list',);
            }

            if (0 === strpos($pathinfo, '/rooms/myrooms')) {
                // rooms_my
                if ($pathinfo === '/rooms/myrooms') {
                    return array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsMyAction',  '_route' => 'rooms_my',);
                }

                // rooms_my_edit
                if (preg_match('#^/rooms/myrooms/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rooms_my_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsEditAction',));
                }

            }

            // rooms_view
            if (preg_match('#^/rooms/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rooms_view')), array (  '_controller' => 'AppBundle\\Controller\\RoomsController::roomsViewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_view')), array (  '_controller' => 'AppBundle\\Controller\\UserController::userViewAction',));
            }

            // user_profile
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::userProfileAction',  '_route' => 'user_profile',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'register',);
        }

        // inbox
        if ($pathinfo === '/inbox') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::inboxAction',  '_route' => 'inbox',);
        }

        if (0 === strpos($pathinfo, '/back')) {
            // backend_homepage
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_homepage');
                }

                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_homepage',);
            }

            // backend_user_list
            if ($pathinfo === '/back/user/list') {
                return array (  '_controller' => 'BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_user_list',);
            }

            // calculate_room_price
            if (0 === strpos($pathinfo, '/back/room/calculate/price') && preg_match('#^/back/room/calculate/price/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calculate_room_price')), array (  '_controller' => 'BackendBundle\\Controller\\RoomsController::calculatePriceAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
