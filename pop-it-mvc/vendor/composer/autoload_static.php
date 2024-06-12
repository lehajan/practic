<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit633b46705242cb1575176470a51b5a74
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit633b46705242cb1575176470a51b5a74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit633b46705242cb1575176470a51b5a74::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit633b46705242cb1575176470a51b5a74::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit633b46705242cb1575176470a51b5a74::$classMap;

        }, null, ClassLoader::class);
    }
}