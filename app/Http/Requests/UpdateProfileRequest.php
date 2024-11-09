<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set to true if the user is authorized to update their profile.
    }

    public function rules()
    {
        return [];
    }
}
