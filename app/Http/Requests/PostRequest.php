<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:70',
            'content' => 'nullable|max:300',
            'post_images' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048'
        ];
    }


    public function messages(): array
    {
        return [
            // category_id
            'category_id.required' => 'Please select a category.',
            'category_id.integer'  => 'Invalid category selection.',
            'category_id.exists'   => 'The selected category does not exist.',

            // title
            'title.required' => 'The post title is required.',
            'title.string'   => 'The post title must be a string.',
            'title.max'      => 'The post title may not be greater than 70 characters.',

            // content
            'content.max'    => 'The content may not be greater than 300 characters.',

            // post_images
            'post_images.image' => 'The uploaded file must be an image.',
            'post_images.mimes' => 'The image must be a file of type: png, jpg, jpeg, gif.',
            'post_images.size' => 'The image must be 2MB size.',
        ];
    }
}