<?php

namespace ContainerQz8XE3S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeliveryAdressTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DeliveryAdressType' shared autowired service.
     *
     * @return \App\Form\DeliveryAdressType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DeliveryAdressType.php';

        return $container->privates['App\\Form\\DeliveryAdressType'] = new \App\Form\DeliveryAdressType();
    }
}
