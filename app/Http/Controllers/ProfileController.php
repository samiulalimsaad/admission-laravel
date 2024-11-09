<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {

        $profile = new Profile();
        $profile->name = fake()->name();
        $profile->father_name = fake()->name();
        $profile->mother_name = fake()->name();
        $profile->hsc_roll = $request->hsc_roll;
        $profile->hsc_board = $request->hsc_board;
        $profile->hsc_passing_year = $request->hsc_passing_year;
        $profile->hsc_result = $request->hsc_result;
        $profile->ssc_roll = $request->ssc_roll;
        $profile->ssc_board = $request->ssc_board;
        $profile->ssc_passing_year = $request->ssc_passing_year;
        $profile->ssc_result = $request->ssc_result;
        $profile->applicationId = rand(10000000, 99999999); // Generates an 8-digit random number
        $profile->created_at = date("Y-m-d H:i:s");
        $profile->updated_at = date("Y-m-d H:i:s");


        $profile->save();

        Log::info("HSC Board:". $profile->hsc_board ."") ;

        // return ["message" => "Profile created successfully","code"=> 0,$profile];
        return view("dashboard", ["profile"=>$profile]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Show the profile edit form
        if (Auth::check()) {
            $profile = Auth::user()->profile; // Assuming each user has one profile
            return view('profile.edit', compact('profile'));
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to edit your profile.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request)
    {
        // Validate and update the profile data
        $validated = $request->validated();

        // Assuming the logged-in user has a profile associated with them
        $profile = Auth::user()->profile;


        // Update the profile with validated data
        $profile->update($validated);

        // Redirect back with a success message
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
