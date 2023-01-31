<?php

namespace App\Http\Requests;

use App\Models\Record;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('record_create');
    }

    public function rules()
    {
        return [
            'status' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'company' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'industry' => [
                'string',
                'nullable',
            ],
            'turnover' => [
                'string',
                'nullable',
            ],
            'employment' => [
                'string',
                'nullable',
            ],
            'bv' => [
                'string',
                'nullable',
            ],
            'bs' => [
                'string',
                'nullable',
            ],
            'tpt' => [
                'string',
                'nullable',
            ],
            'tc' => [
                'string',
                'nullable',
            ],
            'emp' => [
                'string',
                'nullable',
            ],
            'lc' => [
                'string',
                'nullable',
            ],
            'wh' => [
                'string',
                'nullable',
            ],
            'wc' => [
                'string',
                'nullable',
            ],
            'inv' => [
                'string',
                'nullable',
            ],
            'gfs' => [
                'string',
                'nullable',
            ],
        ];
    }
}
