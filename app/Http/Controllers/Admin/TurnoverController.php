<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyTurnoverRequest;
use App\Http\Requests\StoreTurnoverRequest;
use App\Http\Requests\UpdateTurnoverRequest;
use App\Models\Turnover;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TurnoverController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('turnover_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Turnover::query()->select(sprintf('%s.*', (new Turnover())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'turnover_show';
                $editGate = 'turnover_edit';
                $deleteGate = 'turnover_delete';
                $crudRoutePart = 'turnovers';

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
            $table->editColumn('turnover', function ($row) {
                return $row->turnover ? $row->turnover : '';
            });
            $table->editColumn('factor', function ($row) {
                return $row->factor ? $row->factor : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.turnovers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('turnover_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.turnovers.create');
    }

    public function store(StoreTurnoverRequest $request)
    {
        $turnover = Turnover::create($request->all());

        return redirect()->route('admin.turnovers.index');
    }

    public function edit(Turnover $turnover)
    {
        abort_if(Gate::denies('turnover_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.turnovers.edit', compact('turnover'));
    }

    public function update(UpdateTurnoverRequest $request, Turnover $turnover)
    {
        $turnover->update($request->all());

        return redirect()->route('admin.turnovers.index');
    }

    public function show(Turnover $turnover)
    {
        abort_if(Gate::denies('turnover_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.turnovers.show', compact('turnover'));
    }

    public function destroy(Turnover $turnover)
    {
        abort_if(Gate::denies('turnover_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $turnover->delete();

        return back();
    }

    public function massDestroy(MassDestroyTurnoverRequest $request)
    {
        Turnover::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
