<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6tUmwrx\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6tUmwrx/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/Container6tUmwrx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\Container6tUmwrx\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \Container6tUmwrx\srcApp_KernelProdContainer([
    'container.build_hash' => '6tUmwrx',
    'container.build_id' => 'd88d3f28',
    'container.build_time' => 1558993416,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6tUmwrx');
