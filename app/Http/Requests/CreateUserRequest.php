<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'username'=>'required|email|unique:users,username',
            'password'=>'required|min:6|confirmed',
            'name'=>'required',
            'birthday'=>'required',
            'phoneNumber'=>'required|numeric',
        ];
    }
    public function messages()
    {
     return [
         'required'=>'không được để trống các trường',
         'phoneNumber.numeric'=>'Số điện thoại không hợp lệ',
         'confirmed'=>'Nhập lại mật khẩu sai',
         'email'=>'Email không đúng định dạng',
         'password.min'=>'Mật khẩu nhỏ hơn 6 ký tự',
         'username.unique'=>'Email đã tồn tại'
     ];
    }
}
