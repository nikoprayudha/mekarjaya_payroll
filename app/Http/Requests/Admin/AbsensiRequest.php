<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AbsensiRequest extends FormRequest
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
            // validation
            'id_karyawan' => 'required|integer',
            'jml_kerja' => 'required|integer',
            'jml_sakit' => 'required|integer',
            'jml_izin'  => 'required|integer',
            'jml_alfa'  => 'required|integer',
            'jml_cuti'  => 'required|integer'
        ];
    }
}
