<?php

namespace App\Http\Controllers;

use App\Traits\GenerateQrCodeTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    use GenerateQrCodeTrait;
    public function home()
    {
        
        $qr_code = $this->generateQrCodeSVG();
        
        return view('home', compact('qr_code'));
    }
}
