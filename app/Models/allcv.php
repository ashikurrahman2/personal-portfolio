<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Allcv extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'doccument'];
    private static $directory = "upload/cv/";

    public static function newallcv($request)
    {
        if ($request->hasFile('doccument')) {
            $pdfUrls = self::getPdfUrls($request->file('doccument'));
        } else {
            $pdfUrls = null;
        }

        $allcv = new Allcv();
        self::saveBasicInfo($allcv, $request, $pdfUrls);
    }

    public static function updateallcv($request, $allcv)
    {
        if ($request->hasFile('doccument')) {
            if (Storage::exists($allcv->doccument)) {
                Storage::delete($allcv->doccument);
            }
            $pdfUrls = self::getPdfUrls($request->file('doccument'));
        } else {
            $pdfUrls = $allcv->doccument;
        }

        self::saveBasicInfo($allcv, $request, $pdfUrls);
    }

    private static function saveBasicInfo($allcv, $request, $pdfUrls)
    {
        $allcv->name = $request->name;
        $allcv->doccument = $pdfUrls;
        $allcv->save();
    }

    public static function deleteallcv($allcv)
    {
        if (Storage::exists($allcv->doccument)) {
            Storage::delete($allcv->doccument);
        }
        $allcv->delete();
    }

    private static function getPdfUrls($file)
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs(self::$directory, $fileName, 'public');
        return 'public/' . $filePath; // স্টোরেজ লিংকের রিলেটিভ পাথ
    }
}
