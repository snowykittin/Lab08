<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite539838bf766c619c14cfe45bf38e719
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'Guest' => __DIR__ . '/../..' . '/models/guest.class.php',
        'GuestController' => __DIR__ . '/../..' . '/controllers/guest_controller.class.php',
        'GuestError' => __DIR__ . '/../..' . '/views/error/guest_error.class.php',
        'GuestModel' => __DIR__ . '/../..' . '/models/guest_model.class.php',
        'Index' => __DIR__ . '/../..' . '/views/index/index.class.php',
        'ShowGuest' => __DIR__ . '/../..' . '/views/show/show_guest.class.php',
        'SignGuest' => __DIR__ . '/../..' . '/views/sign/sign_guest.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite539838bf766c619c14cfe45bf38e719::$classMap;

        }, null, ClassLoader::class);
    }
}
