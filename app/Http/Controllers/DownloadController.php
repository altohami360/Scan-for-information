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

        // $path = 'uploads\images';
        // $name = 'qrcode.png';
        // $file = 'uploads\images\qrcode.png';
        // $headers = ['Content-Type: image/png'];
        // if (File::exists(public_path($file))) {
        //     unlink(public_path($file));
        // } 

        $file = "\uploads\images\qrcode.png";

        $headers = ['Content-Type: image/jpeg'];

        if (file_exists(public_path($file))) {
            unlink(public_path($file));
        }
        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path($file));
        return response()->download(public_path($file), 'qrcode.png', $headers);

    }
}
