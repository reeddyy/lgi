<?php

namespace App\Http\Requests;

use App\Models\Turnover;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTurnoverRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('turnover_edit');
    }

    public function rules()
    {
        return [
            'turnover' => [
                'string',
                'required',
                'unique:turnovers,turnover,' . request()->route('turnover')->id,
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
