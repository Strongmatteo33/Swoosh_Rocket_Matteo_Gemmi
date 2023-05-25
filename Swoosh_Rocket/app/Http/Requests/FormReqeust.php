<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormReqeust extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

            return [
                'title' => 'required|min:2',
                'size' => 'required|min:2',
                'price' => 'required|min:2',
                'style' => 'required|min:2',
                'colorway' => 'required|min:2',                
                'cover' => 'required|image',
            ];

    }
}
