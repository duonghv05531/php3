<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'phone_number' => 'required|unique:customers',
            'email' => 'required|unique:customers',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên khách hàng không được để trống',
            'phone_number.required' => 'Số điện thoại không được để trống',
            'phone_number.unique' => 'Số điện thoại của khách hàng này đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email của khách hàng này đã tồn tại',
        ];
    }
}
