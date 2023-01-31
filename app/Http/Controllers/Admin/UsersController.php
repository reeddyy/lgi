<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Country;
use App\Models\Employment;
use App\Models\Industry;
use App\Models\Role;
use App\Models\Turnover;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = User::with(['country', 'industry', 'turnover', 'employment', 'roles'])->select(sprintf('%s.*', (new User())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'user_show';
                $editGate = 'user_edit';
                $deleteGate = 'user_delete';
                $crudRoutePart = 'users';

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
            $table->addColumn('country_country', function ($row) {
                return $row->country ? $row->country->country : '';
            });

            $table->addColumn('industry_industry', function ($row) {
                return $row->industry ? $row->industry->industry : '';
            });

            $table->addColumn('turnover_turnover', function ($row) {
                return $row->turnover ? $row->turnover->turnover : '';
            });

            $table->addColumn('employment_employment', function ($row) {
                return $row->employment ? $row->employment->employment : '';
            });

            $table->editColumn('two_factor', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->two_factor ? 'checked' : null) . '>';
            });
            $table->editColumn('roles', function ($row) {
                $labels = [];
                foreach ($row->roles as $role) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $role->title);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'country', 'industry', 'turnover', 'employment', 'two_factor', 'roles']);

            return $table->make(true);
        }

        return view('admin.users.index');
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('country', 'id')->prepend(trans('global.pleaseSelect'), '');

        $industries = Industry::pluck('industry', 'id')->prepend(trans('global.pleaseSelect'), '');

        $turnovers = Turnover::pluck('turnover', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employments = Employment::pluck('employment', 'id')->prepend(trans('global.pleaseSelect'), '');

        $roles = Role::pluck('title', 'id');

        return view('admin.users.create', compact('countries', 'employments', 'industries', 'roles', 'turnovers'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('country', 'id')->prepend(trans('global.pleaseSelect'), '');

        $industries = Industry::pluck('industry', 'id')->prepend(trans('global.pleaseSelect'), '');

        $turnovers = Turnover::pluck('turnover', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employments = Employment::pluck('employment', 'id')->prepend(trans('global.pleaseSelect'), '');

        $roles = Role::pluck('title', 'id');

        $user->load('country', 'industry', 'turnover', 'employment', 'roles');

        return view('admin.users.edit', compact('countries', 'employments', 'industries', 'roles', 'turnovers', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('country', 'industry', 'turnover', 'employment', 'roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
