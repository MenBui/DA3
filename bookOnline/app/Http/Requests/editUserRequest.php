<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUserRequest extends FormRequest
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
            'email'=>'required|unique:users,email',
            'address'=>'required',
            'password'=>'required',
            'confirm_password'=>'same:password',
            'phone'=>'required'

        ];
    }
    public function messages(){
        return [
            'name.required'=>'Vui lòng nhập tên tài khoản',
            'email.required'=>'Vui lòng nhập email của bạn',
            'email.unique'=>'Email này đã được sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'confirm_password.same'=>'Mật khẩu nhập lại không đúng',
            'phone.required'=>'Vui lòng nhập số điện thoại'
        ];
    }
}
