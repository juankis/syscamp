<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PlayerUpdateRequest extends Request
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
            'id_kardex' => 'required|numeric',
            'name' => 'required',
            'second_name_p' => 'required',
            'second_name_m' => 'required',
            'birthday' => 'required|date',
            'place_of_birth' => 'required',
            'ci' => 'required|numeric',
            'nationality' => 'required',
            'home' => 'required',
            'phone' => 'numeric',
            //'movil' => 'required',
            //'email' => 'required|unique:players,email,'.$player->id,
            'profession' => 'string',
            'picture' => 'required'
        ];
    }

    public function messages()
    {

        return [
            'id_kardex.required' => 'El campo Id Kardex es requerido',
            'id_kardex.numeric' => 'El campo Id Kardex deberia ser numerico',
            'name.required' => 'El campo Nombre es requerido',
            'second_name_p.required' => 'El campo Apellido paterno es requerido',
            'second_name_m.required' => 'El campo Apellido Materno es requerido',
            'birthday.required' => 'El campo Fecha de Nacimiento es requerido',
            'birthday.date' => 'El campo Fecha de Nacimiento no es valido',
            'place_of_birth.required' => 'El campo Lugar de nacimiento es requerido',
            'ci.required' => 'El campo CI es requerido',
            'ci.numeric' => 'El campo CI deberia ser nuemerico',
            'nationality.required' => 'El campo Nacionalidad es requerido',
            'home.required' => 'El campo Domicilio es requerido',
            //'phone.required' => 'El campo Telefono es requerido',
            'phone.numeric' => 'El campo Telefono deberia ser numerico',
            //'movil.required' => 'El campo Celular es requerido',
            'email.required' => 'El campo Email es requerido',
            'email.unique' => 'El Email ya esta en uso',
            'profession.required' => 'El campo Profesion deberia ser solo texto',
            'picture.required' => 'El campo Fotografia es requerido'
        ];
        
    }
}
