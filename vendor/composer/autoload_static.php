<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ee010c1dd60a09d8ffd21eace961b8d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Dcblogdev\\PdoWrapper\\Database' => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src/Database.php',
        'MVC\\controllers\\homecontroller' => __DIR__ . '/../..' . '/app/controllers/homecontroller.php',
        'MVC\\core\\app' => __DIR__ . '/../..' . '/app/core/app.php',
        'MVC\\core\\controller' => __DIR__ . '/../..' . '/app/core/controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ee010c1dd60a09d8ffd21eace961b8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ee010c1dd60a09d8ffd21eace961b8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ee010c1dd60a09d8ffd21eace961b8d::$classMap;

        }, null, ClassLoader::class);
    }
}
