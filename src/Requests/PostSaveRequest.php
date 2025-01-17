<?php

namespace Xmen\StarterKit\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title' => ['required', 'string', 'max:255','min:2'],
            'subtitle' => ['nullable', 'string', 'max:2048'],
            'body' => ['required', 'string','min:15'],
            'status' => ['required', 'boolean'],
            'is_breaking' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'icon' => ['nullable', 'string','min:3'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
