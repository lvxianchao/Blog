<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoryRequest
 *
 * @package App\Http\Requests
 */
class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories',
        ];
    }
    
    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '请填写分类名称',
            'name.unique' => '分类名称已存在',
        ];
    }
}
