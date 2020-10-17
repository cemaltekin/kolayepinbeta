<?php

namespace App\Helpers;

class UploadPaths
{
    public static $uploadPaths = array(
        'product_photos' => '/uploads/products',
        'users_avatar'=>'/uploads/users'
    );

    public static function getUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }

    public static function usergetUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }
}
