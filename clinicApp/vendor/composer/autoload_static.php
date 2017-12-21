<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite31db68644843bc3610132acb98fc050
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite31db68644843bc3610132acb98fc050::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite31db68644843bc3610132acb98fc050::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
