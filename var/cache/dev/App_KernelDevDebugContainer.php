<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNNENkW4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNNENkW4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNNENkW4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNNENkW4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNNENkW4\App_KernelDevDebugContainer([
    'container.build_hash' => 'NNENkW4',
    'container.build_id' => '5f92c517',
    'container.build_time' => 1712012468,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNNENkW4');