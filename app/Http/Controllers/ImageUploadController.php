<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function showUploadForm()
    {
        $profile = Profile::where('id', 2)->first();
        return view('upload-image', ["profile"=> $profile]);
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Store the image in the 'public/images' directory
        $request->image->move(public_path('images'), $imageName);

        $profile = Profile::where("id", $request->id)->first();

        if ($profile) {
            $profile->updated_at = date("Y-m-d H:i:s");
            $profile->profile_image =  $imageName;
            $profile->save();
        }


        return back()
            ->with('success', 'Image uploaded successfully.')
            ->with('image', $imageName)
            ->with('profile', $profile);
    }
}
