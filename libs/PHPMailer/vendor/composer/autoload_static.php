<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita197bcdcd97c1e5f51f82dd9e0ad6886
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita197bcdcd97c1e5f51f82dd9e0ad6886::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita197bcdcd97c1e5f51f82dd9e0ad6886::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita197bcdcd97c1e5f51f82dd9e0ad6886::$classMap;

        }, null, ClassLoader::class);
    }
}
