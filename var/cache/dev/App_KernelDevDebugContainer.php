<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGo7JEJG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGo7JEJG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGo7JEJG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGo7JEJG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGo7JEJG\App_KernelDevDebugContainer([
    'container.build_hash' => 'Go7JEJG',
    'container.build_id' => 'b958a258',
    'container.build_time' => 1625058202,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGo7JEJG');
