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

        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path('uploads\images\qrcode.png'));

        $path = Storage::disk('images')->path('uploads\images\qrcode.png');
        // $content = file_get_contents($path);

        return response()->download($path, 'qrcode.png', ['Content-Type' => mime_content_type($path)]);
    }
}
