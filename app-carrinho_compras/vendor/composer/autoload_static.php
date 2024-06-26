<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit493d5244391e5e09d3b871a420620ba8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pablo\\AppCarrinhoCompras\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pablo\\AppCarrinhoCompras\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit493d5244391e5e09d3b871a420620ba8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit493d5244391e5e09d3b871a420620ba8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit493d5244391e5e09d3b871a420620ba8::$classMap;

        }, null, ClassLoader::class);
    }
}
