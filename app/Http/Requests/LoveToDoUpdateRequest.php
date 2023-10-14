<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoveToDoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image_one' => ['nullable', 'image', 'max:1000'],
            'image_two' => ['nullable', 'image', 'max:1000'],
            'image_three' => ['nullable', 'image', 'max:1000'],
            'image_four' => ['nullable', 'image', 'max:1000'],
            'title_one' => ['nullable', 'string', 'max:255'],
            'title_two' => ['nullable', 'string', 'max:255'],
            'title_three' => ['nullable', 'string', 'max:255'],
            'title_four' => ['nullable', 'string', 'max:255'],
        ];
    }
}
