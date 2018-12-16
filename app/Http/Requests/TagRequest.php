<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class TagRequest
 *
 * @package App\Http\Requests
 */
class TagRequest extends FormRequest
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
            'name' => 'required|unique:tags,name',
        ];
    }
    
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '请填写标签名称',
            'name.unique' => '标签名称已存在',
        ];
    }
}
