<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ressume extends Model
{
    use HasFactory;
    private static $ressumes;
    public static function newressumes($request)
    {
        self::$ressumes = new ressume();
        self::saveBasicInfo(self::$ressumes, $request);
    }

    public static function updateressumes($request, $ressumes)
    {
        self::saveBasicInfo($ressumes, $request);
    }

    private static function saveBasicInfo($ressumes, $request)
    {
        $ressumes->name             = $request->name;
        $ressumes->duration         = $request->duration;
        $ressumes->experience_title = $request->experience_title;
        $ressumes->address          = $request->address ;
        $ressumes->save();
    }

    public static function deleteressumes($ressumes)
    {
        $ressumes->delete();
    }
}
