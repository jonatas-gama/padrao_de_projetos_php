<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4763f3e8b33ec1616f03fe1f1ddd9e6e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Singleton\\' => 10,
        ),
        'P' => 
        array (
            'Prototype\\' => 10,
        ),
        'F' => 
        array (
            'FactoryMethod\\Product\\' => 22,
            'FactoryMethod\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Singleton\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Singleton',
        ),
        'Prototype\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Prototype',
        ),
        'FactoryMethod\\Product\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FactoryMethod/Product',
        ),
        'FactoryMethod\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FactoryMethod',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4763f3e8b33ec1616f03fe1f1ddd9e6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4763f3e8b33ec1616f03fe1f1ddd9e6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4763f3e8b33ec1616f03fe1f1ddd9e6e::$classMap;

        }, null, ClassLoader::class);
    }
}