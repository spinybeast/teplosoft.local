<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04a75c21cbb36ac00d50cda94c6edc4e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\LinkList\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\LinkList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Ps_Linklist' => __DIR__ . '/../..' . '/ps_linklist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04a75c21cbb36ac00d50cda94c6edc4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04a75c21cbb36ac00d50cda94c6edc4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04a75c21cbb36ac00d50cda94c6edc4e::$classMap;

        }, null, ClassLoader::class);
    }
}
