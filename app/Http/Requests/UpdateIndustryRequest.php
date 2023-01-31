<?php

namespace App\Http\Requests;

use App\Models\Industry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIndustryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('industry_edit');
    }

    public function rules()
    {
        return [
            'industry' => [
                'string',
                'required',
                'unique:industries,industry,' . request()->route('industry')->id,
            ],
        ];
    }
}
