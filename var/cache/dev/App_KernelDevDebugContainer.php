<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXLRsZdm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXLRsZdm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXLRsZdm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXLRsZdm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXLRsZdm\App_KernelDevDebugContainer([
    'container.build_hash' => 'XLRsZdm',
    'container.build_id' => '7dd13921',
    'container.build_time' => 1714735690,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXLRsZdm');
