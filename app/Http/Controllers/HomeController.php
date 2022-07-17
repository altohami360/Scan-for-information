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

        $path = 'uploads\images\\' . auth()->user()->id . '.png';

        if (!file_exists(public_path($path))) {
            QrCode::margin(1)
                ->format('png')
                ->size(200)
                ->generate(route('information', auth()->user()->id), public_path($path));
        }
        // return $path;
        return view('dashboard', compact('path'));
    }
}
