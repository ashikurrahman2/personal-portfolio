<?php

namespace App\Http\Controllers;

use App\Models\ressume;
use App\Models\Service;
use App\Models\skills;
use App\Models\contact;
use App\Models\allcv;
use App\Models\link;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){

        //$links = Link::with('facebookProfile')->get();
        $links= link::all();
        $mycv = allcv::all();
        $contacts= contact::all()->first();
        $skills = skills::all();
        $services = Service::all();
        $ressumes = ressume::all();
        return view('frontend.pages.Home.home', compact('services', 'ressumes', 'skills', 'contacts', 'mycv', 'links'));
    }
    // For download CV from frontend
        public function downloadCV($id)
        {
            $cv = allcv::findOrFail($id);
    
            // Get the file contents from the database
            $fileContents = Storage::get($cv->doccument);
    
            // Set appropriate headers
            $headers = [
                'Content-Type' => 'application/pdf',  // Adjust content type based on file type
                'Content-Disposition' => 'attachment; filename="' . $cv->doccument . '"',
            ];
    
            // Return the file data as a response
            return response($fileContents, 200, $headers);
        }
}
