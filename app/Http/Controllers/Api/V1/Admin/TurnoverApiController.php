<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTurnoverRequest;
use App\Http\Requests\UpdateTurnoverRequest;
use App\Http\Resources\Admin\TurnoverResource;
use App\Models\Turnover;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TurnoverApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('turnover_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TurnoverResource(Turnover::all());
    }

    public function store(StoreTurnoverRequest $request)
    {
        $turnover = Turnover::create($request->all());

        return (new TurnoverResource($turnover))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Turnover $turnover)
    {
        abort_if(Gate::denies('turnover_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TurnoverResource($turnover);
    }

    public function update(UpdateTurnoverRequest $request, Turnover $turnover)
    {
        $turnover->update($request->all());

        return (new TurnoverResource($turnover))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Turnover $turnover)
    {
        abort_if(Gate::denies('turnover_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $turnover->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
