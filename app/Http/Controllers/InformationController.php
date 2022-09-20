<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show(Request $request)
    {
        $user = User::findOrFail($request->id);

        return view('information', compact('user'));
    }
}
