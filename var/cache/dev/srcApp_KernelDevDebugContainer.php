<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKhZT1QU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKhZT1QU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKhZT1QU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKhZT1QU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKhZT1QU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KhZT1QU',
    'container.build_id' => 'a73e0977',
    'container.build_time' => 1567075841,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKhZT1QU');