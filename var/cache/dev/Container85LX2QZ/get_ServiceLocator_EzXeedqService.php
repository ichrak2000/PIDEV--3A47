<?php

namespace Container85LX2QZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EzXeedqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EzXeedq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EzXeedq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', '.errored.0fT_g2W', NULL, 'Cannot determine controller argument for "App\\Controller\\TypeReclamationController::login()": the $authenticationUtils argument is type-hinted with the non-existent class or interface: "App\\Controller\\AuthenticationUtils". Did you forget to add a use statement?'],
        ], [
            'authenticationUtils' => '?',
        ]);
    }
}
