@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.turnover.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.turnovers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.turnover.fields.id') }}
                        </th>
                        <td>
                            {{ $turnover->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.turnover.fields.turnover') }}
                        </th>
                        <td>
                            {{ $turnover->turnover }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.turnover.fields.factor') }}
                        </th>
                        <td>
                            {{ $turnover->factor }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.turnovers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection