<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'=>'required',
            'birthday'=>'required',
            'phoneNumber'=>'required|numeric',
            'address'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'không được để trống các trường',
            'phoneNumber.numeric'=>'Số điện thoại không phải kiểu số'
        ];
    }
}
