<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4cdc2edf320c0cd0c1891bb9423641c
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'webroot\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'webroot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/baacore',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4cdc2edf320c0cd0c1891bb9423641c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4cdc2edf320c0cd0c1891bb9423641c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd4cdc2edf320c0cd0c1891bb9423641c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
