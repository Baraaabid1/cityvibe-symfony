<?php

namespace ContainerVEjaUqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C6HmyfuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C6Hmyfu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C6Hmyfu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'RecRepo' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
        ], [
            'RecRepo' => 'App\\Repository\\ReclamationRepository',
        ]);
    }
}