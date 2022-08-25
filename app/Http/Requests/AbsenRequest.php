<?php

namespace App\Http\Requests;

use App\Helpers\ResponseFormatter;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AbsenRequest extends FormRequest
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
            'lat' => 'required',
            'lng' => 'required',
            'tipe' => 'required',
            'is_dilokasi' => 'required',
            'alasan' => 'required_if:is_dilokasi,false',
        ];
    }

    public function messages()
    {
        return [
            'lat.required' => 'Belum dapat menemukan latitude Anda',
            'lng.required' => 'Belum dapat menemukan longitude Anda',
            'tipe.required' => 'Tipe absen tidak diketahui',
            'is_dilokasi.required' => 'belum dapat menentukan posisi Anda',
            'alasan.required_if' => 'Alasan wajib disertakan karena Anda berada di luar lokasi absen',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            ResponseFormatter::error($validator->errors()->first()),
        );
    }
}
