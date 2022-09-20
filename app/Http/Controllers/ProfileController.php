<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user =  Auth::user();

        $countries = Country::all(['id', 'country_name']);
        return view('profile',compact('user', 'countries'));
    }

    public function update(Request $request, User $user)
    {
        // dd($user);
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
        ]);

        $user->address()->update([
            'country_id' =>$request->country_id,
            'city' =>$request->city,
            'street' =>$request->street,
        ]);
    }
}
