<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all()->where('userid', Auth::user()->id);
        return view('profile.index')->with('profile', $profile);
    }

    public function edit()
    {
        $profile = Profile::all()->where('userid', Auth::user()->id);

        if ($profile->isEmpty())
        {
            $profile[0] = new Profile();
        }

        return view('profile.edit')->with('profile', $profile);
    }

    public function save(Request $request)
    {
        $profile = Profile::all()->where('userid', Auth::user()->id);

        if ($profile->isEmpty())
        {
            $profile[0] = new Profile();
        }

        $profile[0]->userid = Auth::user()->id;
        $profile[0]->street_address =  $request['street_address'];
        $profile[0]->city = $request['city'];
        $profile[0]->state = $request['state'];
        $profile[0]->zipcode = $request['zipcode'];

        $profile[0]->save();

        return view('profile.index')->with('profile', $profile);
    }
}
