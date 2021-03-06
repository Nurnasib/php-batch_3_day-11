<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29d8cbcc2588cd3f079aa2b72f43c62a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29d8cbcc2588cd3f079aa2b72f43c62a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29d8cbcc2588cd3f079aa2b72f43c62a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29d8cbcc2588cd3f079aa2b72f43c62a::$classMap;

        }, null, ClassLoader::class);
    }
}
