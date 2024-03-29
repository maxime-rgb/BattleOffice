<?php

namespace ContainerBInhxM5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CZ1jTUxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CZ1jTUx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CZ1jTUx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'clientRepository' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'clientRepository' => 'App\\Repository\\ClientRepository',
        ]);
    }
}
