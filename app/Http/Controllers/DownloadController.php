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

        $path = 'uploads\images';
        $name = 'qrcode.png';
        $file = 'uploads\images\qrcode.png';

        if (File::exists(public_path($file))) {
            unlink(public_path($file));
        }

        // Browsershot::url(URL::current())
        // ->setScreenshotType('jpeg', 100)
        // ->save('qr.jpeg');

        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path($file));
        return response()->download(public_path($file), $name);
    }
}
