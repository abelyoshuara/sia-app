<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAkun3Request extends FormRequest
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
            'kode' => 'required|unique:akun3s,kode,' . $this->akun3->id . ',id',
            'nama' => 'required',
            'akun1_kode' => 'required',
            'akun2_id' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'kode' => 'kode akun 3',
            'nama' => 'nama akun 3',
            'akun1_kode' => 'nama akun 1',
            'akun2_id' => 'nama akun 2'
        ];
    }
}
