<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc90ff218ed826a7b6a05ef9efc7dc01f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/System',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc90ff218ed826a7b6a05ef9efc7dc01f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc90ff218ed826a7b6a05ef9efc7dc01f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
