<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_buku' => 'required|string',
            'id_penulis' => 'required|integer',
            'id_genre' => 'required|integer',
            'tahun' => 'required|integer',
            'desc' => 'required',
            'photo' => 'nullable|image',

        ];
    }
}
