<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRommsRequest extends FormRequest
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
            'List_Classes.*.Name' => 'required|string|max:255' . $this->id,
            'List_Classes.*.Name_class_en' => 'required|string|max:255' . $this->id,
            'List_Classes.*.Grade_id' => 'required|exists:grades,id' . $this->id,
        ];
    }

    public function messages()
    {

        return [

            'List_Classes.*.Name.required' => trans('validation.required'),
            'List_Classes.*.Name_class_en.required' => trans('validation.required'),
            'List_Classes.*.Grade_id.required' => trans('validation.exists'),
        ];
    }
}
