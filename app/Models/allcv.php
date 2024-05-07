<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allcv extends Model
{
    use HasFactory;
    private static function getFileUrl($request)
    {
        $file = $request->file('doccument');
        $fileName = $file->getClientOriginalName();
        $directory = "upload/CV/";
        $file->move($directory, $fileName);
        $fileUrl = $directory . $fileName;
        return $fileUrl;
    }

    private static function saveBasicInfo($allcv, $request, $fileUrl)
    {
        $allcv->name      = $request->name;
        $allcv->doccument = $fileUrl;
        $allcv->save();
    }

    public static function newallcv($request)
    {
        $fileUrl = $request->file('doccument') ? self::getFileUrl($request) : ' ';

        $allcv = new allcv();
        self::saveBasicInfo($allcv, $request, $fileUrl);

    }

    public static function updateallcv($request, $allcv)
    {
        if ($request->file('doccument')) {
            if (file_exists($allcv->doccument)) {
                unlink($allcv->doccument);
            }
            $fileUrl = self::getFileUrl($request);
        } else {
            $fileUrl = $allcv->doccument;
        }

        self::saveBasicInfo($allcv, $request, $fileUrl);
    }

    public static function deleteallcv($allcv)
    {
        if (file_exists($allcv->doccument)) {
            unlink($allcv->doccument);
        }
        $allcv->delete();
    }

}
