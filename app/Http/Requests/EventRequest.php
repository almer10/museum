<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $fotoRules = $this->isMethod('PUT') ? 'nullable|image' : 'required|image';

        return [
            'name_event' => 'required|string',
            'tanggal_event' => 'required|date',
            'deskripsi' => 'required|string',
            'foto' => $fotoRules,
        ];
    }
}
