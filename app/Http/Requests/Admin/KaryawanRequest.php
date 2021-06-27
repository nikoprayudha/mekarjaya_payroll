<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            //
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'id_divisi' => 'required|integer|exists:tbl_divisi,id_divisi',
            'id_jabatan' => 'required|integer|exists:tbl_jabatan,id_jabatan',
            'tgl_masuk' => 'required|max:255',
            'foto' => 'required|image'
        ];
    }
}
