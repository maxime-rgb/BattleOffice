<?php

namespace ContainerQz8XE3S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fk6lAI5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fk6lAI5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fk6lAI5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'deliveryAdress' => ['privates', '.errored..service_locator.Fk6lAI5.App\\Entity\\DeliveryAdress', NULL, 'Cannot autowire service ".service_locator.Fk6lAI5": it references class "App\\Entity\\DeliveryAdress" but no such service exists.'],
        ], [
            'deliveryAdress' => 'App\\Entity\\DeliveryAdress',
        ]);
    }
}