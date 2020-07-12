<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::firstWhere('userid', Auth::user()->id);
        return view('profile.index')->with('profile', $profile);
    }

    public function edit()
    {
        $profile = Profile::firstWhere('userid', Auth::user()->id);
        return view('profile.edit')->with('profile', $profile);
    }

    public function save(Request $request)
    {
        $profile = Profile::firstWhere('userid', Auth::user()->id);

        $profile->userid = Auth::user()->id;
        $profile->street_address =  $request['street_address'];
        $profile->city = $request['city'];
        $profile->state = $request['state'];
        $profile->zipcode = $request['zipcode'];

        $profile->save();

        return view('profile.index')->with('profile', $profile);
    }
}
