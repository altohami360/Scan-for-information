<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Spatie\Browsershot\Browsershot;

class DownloadController extends Controller
{
    public function download(Request $request)
    {

        // echo Storage::disk('images')->exists('uploads\images\qrcode.png');
        if (Storage::disk('images')->exists('uploads\images\qrcode.png')) {
            $path = Storage::disk('images')->path('uploads\images\qrcode.png');
            $content = file_get_contents($path);
            // dd($content);
            return response($content, ['Content-Type' => mime_content_type($path)]);
        }

        // $path = 'uploads\images';
        // $name = 'qrcode.png';
        // $file = 'uploads\images\qrcode.png';
        // $headers = ['Content-Type: image/png'];
        // if (File::exists(public_path($file))) {
        //     unlink(public_path($file));
        // } 

        // $file = "\uploads\images\qrcode.png";

        // $headers = ['Content-Type: image/jpeg'];

        // if (file_exists(public_path($file))) {
        //     unlink(public_path($file));
        // }

        // QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path($file));
        // echo Storage::disk('public')->get(public_path($file));


        // dd(gettype($image));

        // dd(Storage::download(public_path($file)));
        // return response()->download('qrcode.png', 'qrcode.png', $headers);
    }
}
