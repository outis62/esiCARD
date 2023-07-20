<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cyclerequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
  
            'cycle' => 'required', 
        ];
    }

    public function messages()
    {
        return [
  
            'cycle.required'=> 'le champ cycle est requis',
           
        ];
    }
}
