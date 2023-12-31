<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb15961753dcac4cfd6030ea7a50dc6ac
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb15961753dcac4cfd6030ea7a50dc6ac', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb15961753dcac4cfd6030ea7a50dc6ac', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb15961753dcac4cfd6030ea7a50dc6ac::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
