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
        $brandId = $this->route('brands')?->id;

        return [
            'name' => [
                'required',
                Rule::unique('brands', 'name')->ignore($brandId),
            ],
            'slug' => [
                'required',
                Rule::unique('brands', 'slug')->ignore($brandId),
            ],
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
            'heading' => 'nullable|string',
            'description' => 'nullable|string',
            'status' => ['required', Rule::in(['draft', 'published', 'archived'])],

            'sections' => 'nullable|array',
            'sections.*.heading' => 'nullable|string|distinct',
            'sections.*.image' => 'nullable|image|max:2048',
            'sections.*.description' => 'nullable|string',
            'sections.*.link' => 'nullable|string',
            'sections.*.btn_text' => 'nullable|string',
            'sections.*.another_link' => 'nullable|string',
            'sections.*.another_btn_text' => 'nullable|string',
        ];
    }
}
