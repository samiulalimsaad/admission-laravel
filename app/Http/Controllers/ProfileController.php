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

    public function phone(StoreProfileRequest $request)
    {

        $profile = Profile::where("id", $request->id)->first();
        if ($profile) {
            $profile->updated_at = date("Y-m-d H:i:s");
            $profile->phone_number = $request->phone_number;
            $profile->temp_otp = 123;
            $profile->save();
        }

        return redirect('/profile/phone/verify/'.$profile->id)->with('profile', $profile);
    }

    public function otp(StoreProfileRequest $request)
    {

        $profile = Profile::where("id", $request->id)->first();
        if ($profile&& $profile->temp_otp==$request->otp) {
            $profile->updated_at = date("Y-m-d H:i:s");
            $profile->is_phone_number_verified = true;
            $profile->temp_otp = random_int(100000, 999999);
            $profile->save();
        }

        // return ["message" => "Profile created successfully","code"=> 0,$profile];
        return redirect('/profile/units/'.$profile->id)->with('profile', $profile);

    }

    public function units(StoreProfileRequest $request)
    {

        $profile = Profile::where("id", $request->id)->first();

        if ($profile) {
            $profile->updated_at = date("Y-m-d H:i:s");
            $profile->units = $request->units;
            $profile->save();
        }

        // return ["message" => "Profile created successfully","code"=> 0,$profile];

        return redirect("/upload-image/".$profile->id)->with(["profile"=>$profile]);
    }

    public function quota(StoreProfileRequest $request)
    {

        $profile = Profile::where("id", $request->id)->first();

        if ($profile) {
            $profile->updated_at = date("Y-m-d H:i:s");
            $profile->quota = $request->quota;
            $profile->save();
        }

        // return ["message" => "Profile created successfully","code"=> 0,$profile];

        return view("confirmation", ["profile"=>$profile]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
