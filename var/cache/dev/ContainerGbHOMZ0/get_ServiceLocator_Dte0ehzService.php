<?php

namespace ContainerGbHOMZ0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dte0ehzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dte0ehz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dte0ehz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeReclamation' => ['privates', '.errored..service_locator.dte0ehz.App\\Entity\\TypeReclamation', NULL, 'Cannot autowire service ".service_locator.dte0ehz": it references class "App\\Entity\\TypeReclamation" but no such service exists.'],
            'typeReclamationRepository' => ['privates', 'App\\Repository\\TypeReclamationRepository', 'getTypeReclamationRepositoryService', true],
        ], [
            'typeReclamation' => 'App\\Entity\\TypeReclamation',
            'typeReclamationRepository' => 'App\\Repository\\TypeReclamationRepository',
        ]);
    }
}
