<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AjoutRequest extends FormRequest
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
            'lieu'    => 'required|min:5|max:50',
            'adresse' => 'required|min:5|max:150',
            'content' => 'required|min:5|max:1000',
            'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
       return [
          'lieu.required'     => 'Veuillez indiquer le nom de votre lieu',
          'adresse.required'  => 'Veuillez indiquer l\'adresse du lieu',
          'content.required'  => 'Une petite description, voyageur ?',
          'image.required'    => 'Une photo de votre lieu touristique doit être ajouter',
       ];
    }

}
