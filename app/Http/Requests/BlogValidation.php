<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogValidation extends FormRequest
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

    /**A
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'blog_body' => 'required',
            'blog_hero_img' => 'sometimes|nullable|max:2048'
        ];
    }
}
