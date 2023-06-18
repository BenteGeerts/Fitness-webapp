<?php

namespace App\Traits;

use App\Models\User;
use Laravolt\Avatar\Facade as Avatar;

Trait AuthTrait
{
    public static function createAvatar($name)
    {
        $fileName = time() . '.png';
        $filePath = "storage/images/" . $fileName;
        Avatar::create($name)->setDimension(200, 200)->save($filePath);
        return asset($filePath);
    }

    public static function setUserName($name)
    {
        $i = 0;
        $username = strtolower(str_replace(' ', '', $name));
        while (User::where('username', $username)->exists()) {
            $i++;
            $username = $username . $i;
        }

        return $username;
    }
}
