<?php

namespace Container6akZPsk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JUCN9VYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jUCN9VY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jUCN9VY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'deliveryAdressRepository' => ['privates', 'App\\Repository\\DeliveryAdressRepository', 'getDeliveryAdressRepositoryService', true],
        ], [
            'deliveryAdressRepository' => 'App\\Repository\\DeliveryAdressRepository',
        ]);
    }
}
