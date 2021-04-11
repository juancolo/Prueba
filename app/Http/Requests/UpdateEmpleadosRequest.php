<?php

namespace App\Http\Requests;

use App\Constants\GenderConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmpleadosRequest extends FormRequest
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
            'nombre' => ['required', 'min:10','max:124','regex:/^[^\{\}\[\]\;\<\>]*$/'],
            'email' => ['required','email:rfc',Rule::unique('empleados')->ignore($this->empleado)],
            'area_id' => ['numeric','exists:areas,id'],
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id',
            'sexo' => ['required','numeric',Rule::in(GenderConstants::MUJER, GenderConstants::HOMBRE)],
            'descripcion' => ['required', 'regex:/^[^\{\}\[\]\;\<\>]*$/'],
        ];
    }
}
