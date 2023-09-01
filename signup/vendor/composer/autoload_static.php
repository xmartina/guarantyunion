<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd28d654e24c6b05bd517815ea97e132d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd28d654e24c6b05bd517815ea97e132d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd28d654e24c6b05bd517815ea97e132d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd28d654e24c6b05bd517815ea97e132d::$classMap;

        }, null, ClassLoader::class);
    }
}