<?php

namespace App\Http\Controllers;

use App\Traits\GenerateQrCodeTrait;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    use GenerateQrCodeTrait;

    public function download(Request $request)
    {

        $img_name = auth()->user()->id . '-qrcode.png';

        $img_path = $this->generateQrCodePNG($img_name);
        
        $headers = ['Content-Type' => mime_content_type($img_path)];

        return response()->download($img_path, $img_name, $headers)->deleteFileAfterSend();
    }
}
