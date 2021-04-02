<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreFormRequest extends FormRequest
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

            //
            'titre' => 'required|min:3|max:100', 
            'auteur' => 'required|min:5',
            'prix' => 'required|digits_between:2,5', 
            'quantite' => 'required|digits_between:1,3', 
        ];
    }
}
