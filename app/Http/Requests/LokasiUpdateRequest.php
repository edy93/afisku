<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LokasiUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nm_lokasi' => 'required',
            'koordinat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nm_lokasi.required' => 'Nama Lokasi wajib diisi!',
            'koordinat.required' => 'Koordinat wajib dibuat!',
        ];
    }
}
