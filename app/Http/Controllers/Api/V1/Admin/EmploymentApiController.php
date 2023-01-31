<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;
use App\Http\Resources\Admin\EmploymentResource;
use App\Models\Employment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmploymentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('employment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmploymentResource(Employment::all());
    }

    public function store(StoreEmploymentRequest $request)
    {
        $employment = Employment::create($request->all());

        return (new EmploymentResource($employment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Employment $employment)
    {
        abort_if(Gate::denies('employment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EmploymentResource($employment);
    }

    public function update(UpdateEmploymentRequest $request, Employment $employment)
    {
        $employment->update($request->all());

        return (new EmploymentResource($employment))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Employment $employment)
    {
        abort_if(Gate::denies('employment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employment->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
