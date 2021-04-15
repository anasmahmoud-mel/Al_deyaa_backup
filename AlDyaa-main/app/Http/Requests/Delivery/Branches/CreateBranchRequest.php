<?php

namespace App\Http\Requests\Delivery\Branches;

use Illuminate\Foundation\Http\FormRequest;

class CreateBranchRequest extends FormRequest
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
            'name_en' => ['required', 'max:255'],
            'name_ar' => ['required', 'max:255'],
            'city' => ['required', 'not_in:0']
        ];
    }
}
