<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {

        // $path = 'uploads\images\qrcode.png';

        // QrCode::margin(1)
        //     ->format('png')
        //     ->size(200)
        //     ->generate(route('information', auth()->user()->id), public_path($path));
        // return asset(public_path($path));
        
        return view('dashboard');
    }
}
