<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2418869d42cb1c0284344c7da4dc1d64
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NinjaForms\\NinjaForms\\' => 22,
            'NinjaForms\\Includes\\' => 20,
            'NinjaForms\\Blocks\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NinjaForms\\NinjaForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'NinjaForms\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'NinjaForms\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocks/views/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2418869d42cb1c0284344c7da4dc1d64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2418869d42cb1c0284344c7da4dc1d64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2418869d42cb1c0284344c7da4dc1d64::$classMap;

        }, null, ClassLoader::class);
    }
}