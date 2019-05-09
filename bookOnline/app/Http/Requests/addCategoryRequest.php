<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class addCategoryRequest extends Request
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
            'url'=>'required|unique:url_categorys,url',
            'url'=>'required|unique:url_books,url',
            'title'=>'required',
            'keyword_seo'=>'required',
            'description_seo'=>'required',
            'image_seo'=>'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Vui lòng nhập lại tên danh mục sách',
            'url.required'=>'Vui lòng nhập link',
            'url.unique'=>'Url này đã được sử dụng',
            'keyword_seo.required'=>'Vui lòng nhập keyword_seo',
            'description_seo.required'=>'Vui lòng nhập description_seo',
            'image_seo.required'=>'Vui lòng thêm ảnh'

        ];
    }
}
