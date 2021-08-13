<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitorRequest extends FormRequest
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
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'suffix_name' => 'required',
            'gender' => 'required',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'birth_year' => 'required',
            'primary_phone_number' => 'required',
            'secondary_phone_number' => 'required',
            'is_transient' => 'required',
            'user_id' => 'required',
            'address_id' => 'required'
        ];
    }
}
