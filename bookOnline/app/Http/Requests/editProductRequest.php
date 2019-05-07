<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProductRequest extends FormRequest
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
            'url'=>'required|unique:books,url',
            'title'=>'required',
            'keyword_seo'=>'required',
            'description_seo'=>'required',
            'image_seo'=>'required',
            'price'=>'required',
            'namxb'=>'required',
            'description1'=>'required',
            'count'=>'required',
            'images'=>'required'
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Vui lòng nhập tên sách',
            'url.required'=>'Vui lòng nhập tên link',
            'title.required'=>'Vui lòng nhập tiêu đề',
            'keyword_seo.required'=>'Vui lòng nhập keyword_seo',
            'description_seo.required'=>'Vui lòng nhập description_seo',
            'image_seo.required'=>'Vui lòng nhập image_seo',
            'price.required'=>'Vui lòng nhập giá sách',
            'namxb.required'=>'Vui lòng nhập năm xuất bản',
            'description1.required'=>'Vui lòng nhập thông tin sách',
            'count.required'=>'Vui lòng nhập số lượng',
            'images.required'=>'Vui lòng thêm ảnh'
        ];
        
    }
}
