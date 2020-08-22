<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|min:16||unique:news,title',
            'summary' =>'required|min:16|',
            'content'=>'required',
            
            
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Không được để trống tiêu đề',
            'summary.required' => 'Không được để trống mô tả',
            'content.required' => 'Không được để trống nội dung tin',
            'title.min'=> 'Tiêu đề không được nhỏ hơn 16 ký tự',
            'summary.min'=> 'Tiêu đề không được nhỏ hơn 16 ký tự',
            'unique' => 'Tiêu đề đã bị trùng',
            
        ];
    }
}
