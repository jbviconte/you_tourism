<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      // $comment = $comment::findOrFail($this->route('lieux-commentaire-new-action'));
      // return $comment->user_id = 1;

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
            'commentaire' => 'required|min:5|max:50|commentvalid:tadaaa',
            'content'     => 'required|min:5|max:150',
        ];
    }
}
