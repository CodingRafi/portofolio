<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'role' => 'required',
            'deskripsi' => 'required',
            'skills' => 'required',
            'utama' => 'required|mimes:jpg,jpeg,png|file|max:5120',
            'preview' => 'required',
            'preview.*' => 'mimes:jpg,jpeg,png|file|max:5120',
        ];
    }
}
