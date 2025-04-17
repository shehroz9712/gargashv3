<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => 'required|unique:brands,name',
            'slug' => 'required|unique:brands,slug',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|',
            'heading' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => ['required', Rule::in(['draft', 'published', 'archived'])],
            'sections' => 'nullable|array',
            'sections.*.heading' => 'required|string|distinct',
            'sections.*.image' => 'nullable|',
            'sections.*.description' => 'nullable|string',
            'sections.*.link' => 'nullable|string',
            'sections.*.btn_text' => 'nullable|string',
            'sections.*.another_link' => 'nullable|string',
            'sections.*.another_btn_text' => 'nullable|string',
        ];
    }
}
