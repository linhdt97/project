<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangKyKhachRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->session()->flash('loiDangKyKhach',true);
        return [
            'hoten' => 'required|max:100|min:4',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|max:30|min:6',
            'passwordAgain' => 'same:password',
            'sodienthoai' => 'required|max:11|min:10'
        ];
    }

    public function messages()
    {
        return [
            'hoten.required' => 'Họ tên không được để trống.',
            'hoten.min' => 'Họ tên tối thiểu 4 ký tự.',
            'hoten.max' => 'Họ tên quá dài.',
            'email.required' => 'Email không được để trống.',
            'email.max' => 'Email quá dài.',
            'email.email' => 'Định dạng email không đúng.',
            'email.unique' => 'Email này đã có người sử dụng.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.max' => 'Mật khẩu tối đa 30 ký tự.',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự.',
            'passwordAgain.same' => 'Mật khẩu xác nhận không chính xác.',
            'sodienthoai.required' => 'Số điện thoại không được để trống.',
            'sodienthoai.numeric' => 'Số điện thoại phải là chữ số.',
            'sodienthoai.max' => 'Số điện thoại tối đa là 11 chữ số.',
            'sodienthoai.min' => 'Số điện thoại tối thiểu là 10 chữ số.'
        ];
    }
}
