<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb06cfb409adeea9312ce9729f4bdf384
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raphael\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raphael\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb06cfb409adeea9312ce9729f4bdf384::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb06cfb409adeea9312ce9729f4bdf384::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}