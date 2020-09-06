<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_SalaryRequests extends FormRequest
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
            'name'  => 'required|min:3',
            'salary'      => 'required'
        
        ];
    }

    public function messages(){

        return [
            'name.required'  => "name can't be empty",
            'name.min'  => "name can't be less than three characters",
			'salary.required'  => "salary can't be empty",
			
        ];
    }
}
