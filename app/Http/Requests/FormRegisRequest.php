<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRegisRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            /* 'nama'=>'required',
            'nisn'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'sekolah_asal'=>'required',
            'alamat'=>'required',
            'nomor'=>'required',
            'wali'=>'required',
            'foto'=>'required|mimes:pdf|max:1000',
            'kk'=>'required|mimes:pdf|max:1000',
            'akta'=>'required|mimes:pdf|max:1000',
            'ijazah'=>'required|mimes:pdf|max:1000',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'pend_terakhir'=>'required', */
        ];
    }
}
