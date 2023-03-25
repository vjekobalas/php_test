<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit706f3c651c36cd3516cc9eff63d347dc
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

        spl_autoload_register(array('ComposerAutoloaderInit706f3c651c36cd3516cc9eff63d347dc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit706f3c651c36cd3516cc9eff63d347dc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit706f3c651c36cd3516cc9eff63d347dc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
