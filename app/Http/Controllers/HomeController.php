<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path('uploads\images\qrcode.png'));

        return view('dashboard');
    }
}
