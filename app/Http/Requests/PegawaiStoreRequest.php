<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiStoreRequest extends FormRequest
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
            'nip' => 'required|unique:pegawai,nip',
            'nm_pegawai' => 'required',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'Nomor Induk Pegawai wajib diisi!',
            'nip.unique' => 'Nomor Induk Pegawai sudah ada!',
            'nm_pegawai.required' => 'Nama Lengkap wajib diisi!',
            'password.required' => 'Password belum diisi!',
            'password.min' => 'Password minimal :min karakter!',
            'password.confirmed' => 'Password tidak cocok!',
        ];
    }
}
