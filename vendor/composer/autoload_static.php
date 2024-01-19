<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e57376bde31a4ec6665de91b5cd477e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Davit\\Hambardzumyan\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Davit\\Hambardzumyan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e57376bde31a4ec6665de91b5cd477e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e57376bde31a4ec6665de91b5cd477e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e57376bde31a4ec6665de91b5cd477e::$classMap;

        }, null, ClassLoader::class);
    }
}
