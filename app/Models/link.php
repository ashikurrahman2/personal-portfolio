<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;

    private static $link;
    public static function newlink($request)
    {
        self::$link = new link();
        self::saveBasicInfo(self::$link, $request);
    }

    public static function updatelink($request, $link)
    {
        self::saveBasicInfo($link, $request);
    }

    private static function saveBasicInfo($link, $request)
    {
        $link->account_name 	= $request->account_name; 	
        $link->link             = base64_encode($request->link);
        $link->save();
    }

    public static function deletelink($link)
    {
        $link->delete();
    }
}
