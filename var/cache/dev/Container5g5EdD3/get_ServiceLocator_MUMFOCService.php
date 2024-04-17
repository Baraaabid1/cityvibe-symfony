<?php

namespace Container5g5EdD3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MUMFOCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MU_mFOC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MU_mFOC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamationController::data' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController::deleteReclamation' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::deleteReclamationAdmin' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::editReclamation' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::editReponse' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::indexRepnse' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController::listReclamations' => ['privates', '.service_locator.C6Hmyfu', 'get_ServiceLocator_C6HmyfuService', true],
            'App\\Controller\\ReclamationController::listUserReclamations' => ['privates', '.service_locator.C6Hmyfu', 'get_ServiceLocator_C6HmyfuService', true],
            'App\\Controller\\ReclamationController::testlistReclamations' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ReclamationController:data' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReclamationController:deleteReclamation' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:deleteReclamationAdmin' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:editReclamation' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:editReponse' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:indexRepnse' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ReclamationController:listReclamations' => ['privates', '.service_locator.C6Hmyfu', 'get_ServiceLocator_C6HmyfuService', true],
            'App\\Controller\\ReclamationController:listUserReclamations' => ['privates', '.service_locator.C6Hmyfu', 'get_ServiceLocator_C6HmyfuService', true],
            'App\\Controller\\ReclamationController:testlistReclamations' => ['privates', '.service_locator.Vq5yBlp', 'get_ServiceLocator_Vq5yBlpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ReclamationController::data' => '?',
            'App\\Controller\\ReclamationController::deleteReclamation' => '?',
            'App\\Controller\\ReclamationController::deleteReclamationAdmin' => '?',
            'App\\Controller\\ReclamationController::editReclamation' => '?',
            'App\\Controller\\ReclamationController::editReponse' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::indexRepnse' => '?',
            'App\\Controller\\ReclamationController::listReclamations' => '?',
            'App\\Controller\\ReclamationController::listUserReclamations' => '?',
            'App\\Controller\\ReclamationController::testlistReclamations' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ReclamationController:data' => '?',
            'App\\Controller\\ReclamationController:deleteReclamation' => '?',
            'App\\Controller\\ReclamationController:deleteReclamationAdmin' => '?',
            'App\\Controller\\ReclamationController:editReclamation' => '?',
            'App\\Controller\\ReclamationController:editReponse' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:indexRepnse' => '?',
            'App\\Controller\\ReclamationController:listReclamations' => '?',
            'App\\Controller\\ReclamationController:listUserReclamations' => '?',
            'App\\Controller\\ReclamationController:testlistReclamations' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}