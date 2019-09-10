<?php

namespace App;


class Autoload
{
    const CLASSES = [
        'user' => 'EBarriosBloonde\UsersAndPrivileges\Configurations\UserConfigurationImpl',
        'profile' => 'EBarriosBloonde\UsersAndPrivileges\Configurations\ProfileConfigurationImpl',
        'register_users' => 'App\Configurations\RegisterUserConfigurationImpl',
    ];
    const NAMESPACE = 'App\\';
    const ROUTE = 'app/';
    /**
     * @return array
     */
    public static function getClasses()
    {
        return self::CLASSES;
    }
    public static function getClass($resource){
        return self::CLASSES[$resource];
    }
}
