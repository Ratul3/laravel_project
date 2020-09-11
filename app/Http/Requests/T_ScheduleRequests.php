<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_ScheduleRequests extends FormRequest
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
            'day'      => 'required',
			'time'      => 'required'
        
        ];
    }

    public function messages(){

        return [
            'name.required'  => "Name can't be empty",
            'name.min'  => "Name can't be less than three characters",
			'day.required'  => "Day can't be empty",
			'time.required'  => "Time can't be empty",
			
        ];
    }
}
