<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyEmploymentRequest;
use App\Http\Requests\StoreEmploymentRequest;
use App\Http\Requests\UpdateEmploymentRequest;
use App\Models\Employment;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmploymentController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Employment::query()->select(sprintf('%s.*', (new Employment())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'employment_show';
                $editGate = 'employment_edit';
                $deleteGate = 'employment_delete';
                $crudRoutePart = 'employments';

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
            $table->editColumn('employment', function ($row) {
                return $row->employment ? $row->employment : '';
            });
            $table->editColumn('factor', function ($row) {
                return $row->factor ? $row->factor : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.employments.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.create');
    }

    public function store(StoreEmploymentRequest $request)
    {
        $employment = Employment::create($request->all());

        return redirect()->route('admin.employments.index');
    }

    public function edit(Employment $employment)
    {
        abort_if(Gate::denies('employment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.edit', compact('employment'));
    }

    public function update(UpdateEmploymentRequest $request, Employment $employment)
    {
        $employment->update($request->all());

        return redirect()->route('admin.employments.index');
    }

    public function show(Employment $employment)
    {
        abort_if(Gate::denies('employment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.employments.show', compact('employment'));
    }

    public function destroy(Employment $employment)
    {
        abort_if(Gate::denies('employment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employment->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmploymentRequest $request)
    {
        Employment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
