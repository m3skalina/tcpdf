<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18a5fc635d2f1bc7ccf68522b128ae2a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit18a5fc635d2f1bc7ccf68522b128ae2a::$classMap;

        }, null, ClassLoader::class);
    }
}
