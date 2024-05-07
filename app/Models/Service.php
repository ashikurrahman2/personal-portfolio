<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    private static $services;
    public static function newservices($request)
    {
        self::$services = new service();
        self::saveBasicInfo(self::$services, $request);
    }

    public static function updateservices($request, $services)
    {
        self::saveBasicInfo($services, $request);
    }

    private static function saveBasicInfo($services, $request)
    {
        $services->Service_name             = $request->Service_name;
        $services->description              = $request->description ;
        $services->save();
    }

    public static function deleteservices($services)
    {
        $services->delete();
    }
}
