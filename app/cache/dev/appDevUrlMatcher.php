<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // task_task_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'task_task_homepage');
            }

            return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::indexAction',  '_route' => 'task_task_homepage',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            // task_product
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'task_product');
                }

                return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::indexAction',  '_route' => 'task_product',);
            }

            // task_product_show
            if (preg_match('#^/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_product_show')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::showAction',));
            }

            // task_product_new
            if ($pathinfo === '/product/new') {
                return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::newAction',  '_route' => 'task_product_new',);
            }

            // task_product_create
            if ($pathinfo === '/product/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_task_product_create;
                }

                return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::createAction',  '_route' => 'task_product_create',);
            }
            not_task_product_create:

            // task_product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_product_edit')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::editAction',));
            }

            // task_product_update
            if (preg_match('#^/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_task_product_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_product_update')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::updateAction',));
            }
            not_task_product_update:

            // task_product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_task_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'task_product_delete')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductController::deleteAction',));
            }
            not_task_product_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/task/task')) {
                if (0 === strpos($pathinfo, '/admin/task/task/category')) {
                    // admin_task_task_category_list
                    if ($pathinfo === '/admin/task/task/category/list') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_list',  '_route' => 'admin_task_task_category_list',);
                    }

                    // admin_task_task_category_create
                    if ($pathinfo === '/admin/task/task/category/create') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_create',  '_route' => 'admin_task_task_category_create',);
                    }

                    // admin_task_task_category_batch
                    if ($pathinfo === '/admin/task/task/category/batch') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_batch',  '_route' => 'admin_task_task_category_batch',);
                    }

                    // admin_task_task_category_edit
                    if (preg_match('#^/admin/task/task/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_category_edit')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_edit',));
                    }

                    // admin_task_task_category_delete
                    if (preg_match('#^/admin/task/task/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_category_delete')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_delete',));
                    }

                    // admin_task_task_category_show
                    if (preg_match('#^/admin/task/task/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_category_show')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_show',));
                    }

                    // admin_task_task_category_export
                    if ($pathinfo === '/admin/task/task/category/export') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'task.task.admin.category',  '_sonata_name' => 'admin_task_task_category_export',  '_route' => 'admin_task_task_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/task/task/product')) {
                    // admin_task_task_product_list
                    if ($pathinfo === '/admin/task/task/product/list') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::listAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_list',  '_route' => 'admin_task_task_product_list',);
                    }

                    // admin_task_task_product_create
                    if ($pathinfo === '/admin/task/task/product/create') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::createAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_create',  '_route' => 'admin_task_task_product_create',);
                    }

                    // admin_task_task_product_batch
                    if ($pathinfo === '/admin/task/task/product/batch') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::batchAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_batch',  '_route' => 'admin_task_task_product_batch',);
                    }

                    // admin_task_task_product_edit
                    if (preg_match('#^/admin/task/task/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_product_edit')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::editAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_edit',));
                    }

                    // admin_task_task_product_delete
                    if (preg_match('#^/admin/task/task/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_product_delete')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::deleteAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_delete',));
                    }

                    // admin_task_task_product_show
                    if (preg_match('#^/admin/task/task/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_task_task_product_show')), array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::showAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_show',));
                    }

                    // admin_task_task_product_export
                    if ($pathinfo === '/admin/task/task/product/export') {
                        return array (  '_controller' => 'Task\\TaskBundle\\Controller\\ProductAdminController::exportAction',  '_sonata_admin' => 'task.task.admin.product',  '_sonata_name' => 'admin_task_task_product_export',  '_route' => 'admin_task_task_product_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
