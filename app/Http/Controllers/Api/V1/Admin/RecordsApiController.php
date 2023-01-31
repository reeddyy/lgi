<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Http\Resources\Admin\RecordResource;
use App\Models\Record;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordResource(Record::with(['created_by'])->get());
    }

    public function store(StoreRecordRequest $request)
    {
        $record = Record::create($request->all());

        return (new RecordResource($record))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Record $record)
    {
        abort_if(Gate::denies('record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RecordResource($record->load(['created_by']));
    }

    public function update(UpdateRecordRequest $request, Record $record)
    {
        $record->update($request->all());

        return (new RecordResource($record))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Record $record)
    {
        abort_if(Gate::denies('record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
