<?php

namespace Container6akZPsk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VSHqZCTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vSHqZCT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vSHqZCT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'order' => ['privates', '.errored..service_locator.vSHqZCT.App\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.vSHqZCT": it references class "App\\Entity\\Order" but no such service exists.'],
        ], [
            'mailer' => '?',
            'order' => 'App\\Entity\\Order',
        ]);
    }
}