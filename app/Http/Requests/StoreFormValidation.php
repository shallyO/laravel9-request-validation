<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required|max:35'
        ];
    }

    public function messages()
    {
        #customize messages per error
      return
          [
            'name.required' => 'Name is required',
            'name.max' => 'Name is more than 20 characters',
            'email.required' => 'Email is required'
          ];
    }
}
