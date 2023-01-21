<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BendaPusakaRequest extends FormRequest
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
        $fotoRules = $this->isMethod('PUT') ? 'nullable|image|max:12288' : 'required|image|max:12288';

        return [
            'kategori' => 'required|string',
            'nama_benda' => 'required|string',
            'jumlah' => 'required|numeric',
            'kondisi_dahulu' => 'required|string',
            'kondisi_sekarang' => 'required|string',
            'deskripsi' => 'required|string',
            'asal_perolehan' => 'required|string',
            'tanggal_perolehan' => 'required|date',
            'tempat_penyimpanan' => 'required|string',
            'foto' => $fotoRules,
        ];
    }
}
