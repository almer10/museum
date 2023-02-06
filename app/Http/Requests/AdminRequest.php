<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $passwordRules = $this->isMethod('PUT') ? 'nullable|string' : 'required|string';
        return [
            'username' => 'required|string',
            'password' => $passwordRules,
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'status' => 'required|boolean',
            'pekerjaan' => 'required|string',
            'no_ktp' => 'required|string',
            'keterangan' => 'string',
            'aktif' => 'string',
        ];
    }
}
