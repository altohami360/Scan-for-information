<?php

namespace App\Traits;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

trait GenerateQrCodeTrait {

    public function generateQrCodeSVG()
    {
        return QrCode::format('svg')
            ->size(200)
            ->generate(route('information', auth()->user()->id));
    }

    public function generateQrCodePNG($img_path)
    {
        QrCode::margin(1)
            ->format('png')
            ->size(200)
            ->generate(route('information', auth()->user()->id), public_path($img_path));
        
        return public_path($img_path);
    }

}