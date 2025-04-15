<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:brands,name'],
            'slug' => ['required', 'string', 'max:255', 'unique:brands,slug'],
            'category_id' => ['required', 'exists:categories,id'],
            'user_id' => ['required', 'exists:users,id'],
            'status' => ['required', 'in:draft,published,archived'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'heading' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sections' => ['nullable', 'array'],
            'sections.*.heading' => ['nullable', 'string', 'max:255'],
            'sections.*.image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'sections.*.description' => ['nullable', 'string'],
            'sections.*.link' => ['nullable', 'url'],
            'sections.*.btn_text' => ['nullable', 'string', 'max:255'],
            'sections.*.another_link' => ['nullable', 'url'],
            'sections.*.another_btn_text' => ['nullable', 'string', 'max:255'],
        ];
    }
}
