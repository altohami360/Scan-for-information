<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    public function download(Request $request)
    {

        if (File::exists(public_path('uploads\images\qrcode.png'))) {
            unlink(public_path('uploads\images\qrcode.png'));
        }
        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path('uploads\images\qrcode.png'));
        return response()->download(public_path('uploads\images\qrcode.png'));
    }
}
