<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class PostRequest
 *
 * @package App\Http\Requests
 */
class PostRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
        ];
    }
    
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => '尚未输入文章标题',
            'content.required' => '尚未输入文章内容',
        ];
    }
}
