<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVEjaUqx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVEjaUqx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVEjaUqx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVEjaUqx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVEjaUqx\App_KernelDevDebugContainer([
    'container.build_hash' => 'VEjaUqx',
    'container.build_id' => 'c0b99080',
    'container.build_time' => 1713391836,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVEjaUqx');
