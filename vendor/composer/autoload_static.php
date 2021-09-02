<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92b73bb6f37731f66af8daf5879c4b55
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit92b73bb6f37731f66af8daf5879c4b55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92b73bb6f37731f66af8daf5879c4b55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92b73bb6f37731f66af8daf5879c4b55::$classMap;

        }, null, ClassLoader::class);
    }
}