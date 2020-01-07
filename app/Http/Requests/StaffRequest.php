<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            "staffCode" => "required",
            "name" => "required",
            "day_of_birth" => "required|date_format:d/m/Y",
            "phone" => "required|digits:10",
            "id_card" => "required|digits:10",
            "email" => "required|email",
            "address" => "required"
        ];
    }
}
