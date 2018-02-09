<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'nom'     => 'required|min:5|max:10',
          'email'   => 'required|email',
          'sujet'   => 'required|min:5|max:100',
          'message' => 'required|min:5|max:1000',
        ];
    }
}
