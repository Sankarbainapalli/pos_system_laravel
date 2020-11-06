<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'mobile' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A Name is required',
            'location.required' => 'A Location is required',
            'mobile.required' => 'A Mobile is required',
        ];
    }
}
