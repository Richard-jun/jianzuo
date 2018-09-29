<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            'url' => 'required|url',
			'image' => 'required|image'
        ];
    }

	public function messages()
	{
		return [
			'url.required'=>'链接地址不能为空',
			'url.url'=>'链接地址格式不正确',
			'image.required'=>'图片不能为空',
			'image.image'=>'图片格式不正确',
		];
    }
}
