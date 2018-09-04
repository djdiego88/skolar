<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
            'name' => 'alpha_dash|min:4|max:250|unique:options,name|required',
            'display_name' => 'min:4|max:250|required',
            'description' => 'min:12',
            'value' => 'required',
        ];
    }
}
