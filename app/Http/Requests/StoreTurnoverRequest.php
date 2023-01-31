<?php

namespace App\Http\Requests;

use App\Models\Turnover;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTurnoverRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('turnover_create');
    }

    public function rules()
    {
        return [
            'turnover' => [
                'string',
                'required',
                'unique:turnovers',
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
