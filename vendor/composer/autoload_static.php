<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf859de02b9673142097baa55e3643c5c
{
    public static $files = array (
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PluginName\\' => 11,
            'PhpDocReader\\' => 13,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PluginName\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf859de02b9673142097baa55e3643c5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf859de02b9673142097baa55e3643c5c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf859de02b9673142097baa55e3643c5c::$classMap;

        }, null, ClassLoader::class);
    }
}
