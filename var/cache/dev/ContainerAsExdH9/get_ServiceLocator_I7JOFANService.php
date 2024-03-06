<?php

namespace ContainerAsExdH9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I7JOFANService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i7JOFAN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i7JOFAN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.i7JOFAN.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.i7JOFAN": it references class "App\\Entity\\Reclamation" but no such service exists.'],
            'reclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'reclamation' => 'App\\Entity\\Reclamation',
            'reclamationRepository' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}
