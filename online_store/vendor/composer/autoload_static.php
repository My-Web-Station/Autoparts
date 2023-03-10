<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit643242f998d5b2c5990ff15302ba3c72
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit643242f998d5b2c5990ff15302ba3c72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit643242f998d5b2c5990ff15302ba3c72::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
