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
        $user_id = auth()->user()->id;
        $img_path = 'uploads\images\\' . $user_id . 'qrcode.png';

        QrCode::margin(1)->format('png')->size(200)->generate(route('information', $user_id), public_path($img_path));

        
        $filePath = public_path($img_path);
        $fileName = $user_id . 'qrcode.png';
        $headers = ['Content-Type' => mime_content_type($img_path)];

        return response()->download($filePath, $fileName, $headers)->deleteFileAfterSend();
    }
}
