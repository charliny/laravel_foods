<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit511795b5e2b265407bbf6e32e4b3cdfc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit511795b5e2b265407bbf6e32e4b3cdfc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit511795b5e2b265407bbf6e32e4b3cdfc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit511795b5e2b265407bbf6e32e4b3cdfc::$classMap;

        }, null, ClassLoader::class);
    }
}
