<?php

namespace App\Http\Requests;

use App\Models\Employment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmploymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employment_edit');
    }

    public function rules()
    {
        return [
            'employment' => [
                'string',
                'required',
                'unique:employments,employment,' . request()->route('employment')->id,
            ],
            'factor' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
