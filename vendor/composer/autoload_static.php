<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd3450db7348cf09720ce570e88b8d09
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Volnix\\CSRF\\' => 12,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'I' => 
        array (
            'Illuminate\\Validation\\' => 22,
            'Illuminate\\Translation\\' => 23,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Volnix\\CSRF\\' => 
        array (
            0 => __DIR__ . '/..' . '/volnix/csrf/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Illuminate\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/validation',
        ),
        'Illuminate\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/translation',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
        1 => __DIR__ . '/../..' . '/app/controllers',
        2 => __DIR__ . '/../..' . '/app/models',
        3 => __DIR__ . '/../..' . '/app/middlewares',
        4 => __DIR__ . '/../..' . '/app/modules',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Slim\\Views' => 
            array (
                0 => __DIR__ . '/..' . '/slim/views',
            ),
            'SlimFacades' => 
            array (
                0 => __DIR__ . '/..' . '/itsgoingd/slim-facades',
            ),
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'L' => 
        array (
            'LibMigration' => 
            array (
                0 => __DIR__ . '/..' . '/kohkimakimoto/lib-migration/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
        'C' => 
        array (
            'Cartalyst\\Sentry' => 
            array (
                0 => __DIR__ . '/..' . '/cartalyst/sentry/src',
            ),
        ),
    );

    public static $classMap = array (
        'Cartalyst\\Sentry\\Groups\\GroupExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Groups\\NameRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserBannedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\LoginRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserExistsException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\UserNotFoundException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'Cartalyst\\Sentry\\Users\\WrongPasswordException' => __DIR__ . '/..' . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
        'MigrationCartalystSentryInstallGroups' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
        'MigrationCartalystSentryInstallThrottle' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
        'MigrationCartalystSentryInstallUsers' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
        'MigrationCartalystSentryInstallUsersGroupsPivot' => __DIR__ . '/..' . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
        'Pagination' => __DIR__ . '/..' . '/modularr/flexible-php-pagination/pagination.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd3450db7348cf09720ce570e88b8d09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd3450db7348cf09720ce570e88b8d09::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitdd3450db7348cf09720ce570e88b8d09::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdd3450db7348cf09720ce570e88b8d09::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdd3450db7348cf09720ce570e88b8d09::$classMap;

        }, null, ClassLoader::class);
    }
}
