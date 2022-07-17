<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\File;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $path = 'uploads\images';
        $name = 'qrcode.png';

        if (File::exists(public_path($path))) {
            unlink(public_path($path));
        }

        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path($path));
        return response()->download(public_path($path), $name);

    }
}
