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
            'nama'=>'required',
            'nisn'=>'required',
            'tempat_lahir'=>'required',
            'sekolah_asal'=>'required',
            'alamat'=>'required',
            'nomor'=>'required|numeric',
            'wali'=>'required',
            'foto'=>'required|image|size:512|mimes:png,jpg,jpeg',
            'akta'=>'required|size:512|mimes:pdf',
            'kk'=>'required|size:512|mimes:pdf',
            'ijazah'=>'required|size:512|mimes:pdf',

        ];
    }
}
