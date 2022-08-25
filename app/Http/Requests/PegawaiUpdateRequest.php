<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiUpdateRequest extends FormRequest
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
            'nip' => 'required|unique:pegawai,nip,' . $this->pegawai_id,
            'nm_pegawai' => 'required',
            'password' => 'confirmed',
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'Nomor Induk Pegawai wajib diisi!',
            'nip.unique' => 'Nomor Induk Pegawai sudah ada!',
            'nm_pegawai.required' => 'Nama Lengkap wajib diisi!',
            'password.confirmed' => 'Password tidak cocok!',
        ];
    }
}
