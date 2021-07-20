<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|unique:products',
            'file_upload' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'sort_desc' => 'required',
            'detail' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Sản phẩm này đã tồn tại',
            'file_upload.required' => 'Ảnh sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'quantity.required' => 'Số lượng sản phẩm không được để trống',
            'sort_desc.required' => 'Mô tả sản phẩm không được để trống',
            'detail.required' => 'Mô tả sản phẩm không được để trống',
        ];
    }
}
