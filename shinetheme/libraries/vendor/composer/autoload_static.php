<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc050266fb68f0013632ab051f4133461
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'O' => 
        array (
            'Omnipay\\TwoCheckoutPlus\\' => 24,
            'Omnipay\\Stripe\\' => 15,
            'Omnipay\\PayUBiz\\' => 16,
            'Omnipay\\PayPal\\' => 15,
            'Omnipay\\PayFast\\' => 16,
            'Omnipay\\AuthorizeNet\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Omnipay\\TwoCheckoutPlus\\' => 
        array (
            0 => __DIR__ . '/..' . '/collizo4sky/omnipay-2checkout/src',
        ),
        'Omnipay\\Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/stripe/src',
        ),
        'Omnipay\\PayUBiz\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaysson/omnipay-payubiz/src',
        ),
        'Omnipay\\PayPal\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/paypal/src',
        ),
        'Omnipay\\PayFast\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/payfast/src',
        ),
        'Omnipay\\AuthorizeNet\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/authorizenet/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Omnipay\\Skrill\\' => 
            array (
                0 => __DIR__ . '/..' . '/alfaproject/omnipay-skrill/src',
            ),
            'Omnipay\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/omnipay/common/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'Omnipay\\Omnipay' => __DIR__ . '/..' . '/omnipay/common/src/Omnipay/Omnipay.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc050266fb68f0013632ab051f4133461::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc050266fb68f0013632ab051f4133461::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc050266fb68f0013632ab051f4133461::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc050266fb68f0013632ab051f4133461::$classMap;

        }, null, ClassLoader::class);
    }
}
