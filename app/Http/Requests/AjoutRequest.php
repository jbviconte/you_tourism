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
            'nom'           => 'required|min:5|max:50',
            'description'   => 'required|min:5|max:1000'
        ];
    }

    public function messages()
    {
       return [
          'nom.required'         => 'Veuillez indiquer le nom de votre lieu',
          'description.required' => 'Une petite description, voyageur ?'
       ];
    }

}
