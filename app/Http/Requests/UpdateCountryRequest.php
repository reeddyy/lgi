<?php

namespace App\Http\Requests;

use App\Models\Country;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCountryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('country_edit');
    }

    public function rules()
    {
        return [
            'country' => [
                'string',
                'required',
                'unique:countries,country,' . request()->route('country')->id,
            ],
            'region' => [
                'string',
                'nullable',
            ],
        ];
    }
}
