<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb937c15311afae116e281b8c3fb639a1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb937c15311afae116e281b8c3fb639a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb937c15311afae116e281b8c3fb639a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb937c15311afae116e281b8c3fb639a1::$classMap;

        }, null, ClassLoader::class);
    }
}
