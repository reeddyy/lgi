<?php

namespace App\Http\Requests;

use App\Models\Turnover;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTurnoverRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('turnover_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:turnovers,id',
        ];
    }
}
