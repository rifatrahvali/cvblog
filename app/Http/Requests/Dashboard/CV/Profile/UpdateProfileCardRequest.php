<?php

namespace App\Http\Requests\Dashboard\CV\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profil_image' => 'nullable|string',
            'fullname' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
            'github_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'x_link' => 'nullable|url',
            'email' => 'nullable|email|max:255',
        ];
    }
}
