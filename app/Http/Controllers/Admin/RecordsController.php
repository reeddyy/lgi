<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRecordRequest;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use App\Models\Record;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RecordsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Record::with(['created_by'])->select(sprintf('%s.*', (new Record())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'record_show';
                $editGate = 'record_edit';
                $deleteGate = 'record_delete';
                $crudRoutePart = 'records';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? $row->status : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('designation', function ($row) {
                return $row->designation ? $row->designation : '';
            });
            $table->editColumn('company', function ($row) {
                return $row->company ? $row->company : '';
            });
            $table->editColumn('country', function ($row) {
                return $row->country ? $row->country : '';
            });
            $table->editColumn('industry', function ($row) {
                return $row->industry ? $row->industry : '';
            });
            $table->editColumn('turnover', function ($row) {
                return $row->turnover ? $row->turnover : '';
            });
            $table->editColumn('employment', function ($row) {
                return $row->employment ? $row->employment : '';
            });
            $table->editColumn('bv', function ($row) {
                return $row->bv ? $row->bv : '';
            });
            $table->editColumn('bs', function ($row) {
                return $row->bs ? $row->bs : '';
            });
            $table->editColumn('tpt', function ($row) {
                return $row->tpt ? $row->tpt : '';
            });
            $table->editColumn('tc', function ($row) {
                return $row->tc ? $row->tc : '';
            });
            $table->editColumn('emp', function ($row) {
                return $row->emp ? $row->emp : '';
            });
            $table->editColumn('lc', function ($row) {
                return $row->lc ? $row->lc : '';
            });
            $table->editColumn('wh', function ($row) {
                return $row->wh ? $row->wh : '';
            });
            $table->editColumn('wc', function ($row) {
                return $row->wc ? $row->wc : '';
            });
            $table->editColumn('inv', function ($row) {
                return $row->inv ? $row->inv : '';
            });
            $table->editColumn('gfs', function ($row) {
                return $row->gfs ? $row->gfs : '';
            });
            $table->editColumn('comment', function ($row) {
                return $row->comment ? $row->comment : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $users = User::get();

        return view('admin.records.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.records.create');
    }

    public function store(StoreRecordRequest $request)
    {
        $record = Record::create($request->all());

        return redirect()->route('admin.records.index');
    }

    public function edit(Record $record)
    {
        abort_if(Gate::denies('record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->load('created_by');

        return view('admin.records.edit', compact('record'));
    }

    public function update(UpdateRecordRequest $request, Record $record)
    {
        $record->update($request->all());

        return redirect()->route('admin.records.index');
    }

    public function show(Record $record)
    {
        abort_if(Gate::denies('record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->load('created_by');

        return view('admin.records.show', compact('record'));
    }

    public function destroy(Record $record)
    {
        abort_if(Gate::denies('record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $record->delete();

        return back();
    }

    public function massDestroy(MassDestroyRecordRequest $request)
    {
        Record::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
