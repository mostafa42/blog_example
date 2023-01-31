<?php

namespace App\Http\Requests\Province;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "province_code" => "required",
            "province_name_en" => "required",
            "province_name_ar" => "required"
        ];
    }
}
