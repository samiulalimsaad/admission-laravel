<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            // 'hsc_roll' => 'nullable|string|max:255',
            // 'hsc_board' => 'nullable|string|max:255',
            // 'hsc_year' => 'nullable|in:2023,2024',
            // 'ssc_roll' => 'nullable|string|max:255',
            // 'ssc_board' => 'nullable|string|max:255',
            // 'ssc_year' => 'nullable|in:2023,2024',
        ];
    }
}
