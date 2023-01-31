@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employment.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employment.fields.id') }}
                        </th>
                        <td>
                            {{ $employment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employment.fields.employment') }}
                        </th>
                        <td>
                            {{ $employment->employment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employment.fields.factor') }}
                        </th>
                        <td>
                            {{ $employment->factor }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employments.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection