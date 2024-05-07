<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;

    private static $skills, $image, $imageName, $directory, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/skills-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newskills($request)
    {
        self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : ' ';

        self::$skills = new skills();
        self::saveBasicInfo(self::$skills, $request, self::$imageUrl);
    }

    public static function updateskills($request, $skills)
    {
        if ($request->file('image'))
        {
            if (file_exists($skills->image))
            {
                unlink($skills->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $skills->image;
        }
        self::saveBasicInfo($skills, $request, self::$imageUrl);
    }

    private static function saveBasicInfo($skills, $request, $imageUrl)
    {
        $skills->title                = $request->title;
        $skills->parcentage_skills    = $request->parcentage_skills;
        $skills->image                = $imageUrl;
        $skills->save();
    }

    public static function deleteskills($skills)
    {
        if (file_exists($skills->image))
        {
            unlink($skills->image);
        }
        $skills->delete();
    }
}
