<?php

namespace App\Http\Requests;


use App\Http\Requests\Request;

class addUrlCategoryRequest extends Request
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
           'url'=>'required', 
           'title'=>'required',
           'keyword_seo'=>'required',
           'description_seo'=>'required'
        ];
    }
    public function messages(){
        return [
            'url.required'=>'Vui lòng nhập url',
            'title.required'=>'Vui lòng nhập title',
            'keyword_seo.required'=>'Vui lòng nhập keyword_seo',
            'description_seo.required'=>'Vui lòng nhập description_seo'
        ];
    }
}
