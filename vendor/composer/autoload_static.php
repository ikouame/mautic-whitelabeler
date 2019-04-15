<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit895739c0a5bce21d72812872605ed25a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
    );

    public static $classMap = array (
        'PHP_ICO' => __DIR__ . '/..' . '/chrisjean/php-ico/class-php-ico.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit895739c0a5bce21d72812872605ed25a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit895739c0a5bce21d72812872605ed25a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit895739c0a5bce21d72812872605ed25a::$classMap;

        }, null, ClassLoader::class);
    }
}
