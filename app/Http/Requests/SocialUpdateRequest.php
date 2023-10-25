<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'facebook' => ['max:255'],
            'x' => ['max:255'],
            'leecode' => ['max:255'],
            'github' => ['max:255'],
            'stackoverflow' => ['max:255'],
            'linkedin' => ['max:255']
        ];
    }
}
