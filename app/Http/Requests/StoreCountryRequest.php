<?php

namespace App\Http\Requests;

use App\Models\Country;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCountryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('country_create');
    }

    public function rules()
    {
        return [
            'country' => [
                'string',
                'required',
                'unique:countries',
            ],
            'region' => [
                'string',
                'nullable',
            ],
        ];
    }
}
