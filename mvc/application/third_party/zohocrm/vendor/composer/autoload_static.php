<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit355b2e550dbde119ab5aaefa6c662d30
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'CristianPontes\\ZohoCRMClient' => 
            array (
                0 => __DIR__ . '/..' . '/cristianpontes/zoho-crm-client-php',
            ),
        ),
        'B' => 
        array (
            'Buzz' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/buzz/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit355b2e550dbde119ab5aaefa6c662d30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit355b2e550dbde119ab5aaefa6c662d30::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit355b2e550dbde119ab5aaefa6c662d30::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}