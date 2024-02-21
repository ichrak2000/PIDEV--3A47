<?php

namespace Container85LX2QZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NLC6wvMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NLC6wvM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NLC6wvM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamationController::delete' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController::edit' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController::new' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController::show' => ['privates', '.service_locator.iq_16Ky', 'get_ServiceLocator_Iq16KyService', true],
            'App\\Controller\\ReponseController::delete' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController::edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController::index' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController::new' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController::show' => ['privates', '.service_locator.6aIFcCV', 'get_ServiceLocator_6aIFcCVService', true],
            'App\\Controller\\TypeReclamationController::delete' => ['privates', '.service_locator.dte0ehz', 'get_ServiceLocator_Dte0ehzService', true],
            'App\\Controller\\TypeReclamationController::edit' => ['privates', '.service_locator.dte0ehz', 'get_ServiceLocator_Dte0ehzService', true],
            'App\\Controller\\TypeReclamationController::index' => ['privates', '.service_locator..OC5DXJ', 'get_ServiceLocator__OC5DXJService', true],
            'App\\Controller\\TypeReclamationController::login' => ['privates', '.service_locator.EzXeedq', 'get_ServiceLocator_EzXeedqService', true],
            'App\\Controller\\TypeReclamationController::new' => ['privates', '.service_locator..OC5DXJ', 'get_ServiceLocator__OC5DXJService', true],
            'App\\Controller\\TypeReclamationController::show' => ['privates', '.service_locator.JXGDIor', 'get_ServiceLocator_JXGDIorService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ReclamationController:delete' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController:edit' => ['privates', '.service_locator.i7JOFAN', 'get_ServiceLocator_I7JOFANService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController:new' => ['privates', '.service_locator.bvmeD74', 'get_ServiceLocator_BvmeD74Service', true],
            'App\\Controller\\ReclamationController:show' => ['privates', '.service_locator.iq_16Ky', 'get_ServiceLocator_Iq16KyService', true],
            'App\\Controller\\ReponseController:delete' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController:edit' => ['privates', '.service_locator.yRqPluq', 'get_ServiceLocator_YRqPluqService', true],
            'App\\Controller\\ReponseController:index' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController:new' => ['privates', '.service_locator.x4wZOpF', 'get_ServiceLocator_X4wZOpFService', true],
            'App\\Controller\\ReponseController:show' => ['privates', '.service_locator.6aIFcCV', 'get_ServiceLocator_6aIFcCVService', true],
            'App\\Controller\\TypeReclamationController:delete' => ['privates', '.service_locator.dte0ehz', 'get_ServiceLocator_Dte0ehzService', true],
            'App\\Controller\\TypeReclamationController:edit' => ['privates', '.service_locator.dte0ehz', 'get_ServiceLocator_Dte0ehzService', true],
            'App\\Controller\\TypeReclamationController:index' => ['privates', '.service_locator..OC5DXJ', 'get_ServiceLocator__OC5DXJService', true],
            'App\\Controller\\TypeReclamationController:login' => ['privates', '.service_locator.EzXeedq', 'get_ServiceLocator_EzXeedqService', true],
            'App\\Controller\\TypeReclamationController:new' => ['privates', '.service_locator..OC5DXJ', 'get_ServiceLocator__OC5DXJService', true],
            'App\\Controller\\TypeReclamationController:show' => ['privates', '.service_locator.JXGDIor', 'get_ServiceLocator_JXGDIorService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ReclamationController::delete' => '?',
            'App\\Controller\\ReclamationController::edit' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::new' => '?',
            'App\\Controller\\ReclamationController::show' => '?',
            'App\\Controller\\ReponseController::delete' => '?',
            'App\\Controller\\ReponseController::edit' => '?',
            'App\\Controller\\ReponseController::index' => '?',
            'App\\Controller\\ReponseController::new' => '?',
            'App\\Controller\\ReponseController::show' => '?',
            'App\\Controller\\TypeReclamationController::delete' => '?',
            'App\\Controller\\TypeReclamationController::edit' => '?',
            'App\\Controller\\TypeReclamationController::index' => '?',
            'App\\Controller\\TypeReclamationController::login' => '?',
            'App\\Controller\\TypeReclamationController::new' => '?',
            'App\\Controller\\TypeReclamationController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ReclamationController:delete' => '?',
            'App\\Controller\\ReclamationController:edit' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:new' => '?',
            'App\\Controller\\ReclamationController:show' => '?',
            'App\\Controller\\ReponseController:delete' => '?',
            'App\\Controller\\ReponseController:edit' => '?',
            'App\\Controller\\ReponseController:index' => '?',
            'App\\Controller\\ReponseController:new' => '?',
            'App\\Controller\\ReponseController:show' => '?',
            'App\\Controller\\TypeReclamationController:delete' => '?',
            'App\\Controller\\TypeReclamationController:edit' => '?',
            'App\\Controller\\TypeReclamationController:index' => '?',
            'App\\Controller\\TypeReclamationController:login' => '?',
            'App\\Controller\\TypeReclamationController:new' => '?',
            'App\\Controller\\TypeReclamationController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
