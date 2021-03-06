<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit934d3c5405812f491811663819ff8130
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit934d3c5405812f491811663819ff8130::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit934d3c5405812f491811663819ff8130::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit934d3c5405812f491811663819ff8130::$classMap;

        }, null, ClassLoader::class);
    }
}
