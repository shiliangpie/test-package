<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite93f1b4cc7d9624fea27c289aa402817
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shiliangpie\\TestPackage\\Tests\\' => 30,
            'Shiliangpie\\TestPackage\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shiliangpie\\TestPackage\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Shiliangpie\\TestPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite93f1b4cc7d9624fea27c289aa402817::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite93f1b4cc7d9624fea27c289aa402817::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
