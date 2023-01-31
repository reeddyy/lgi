@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.record.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.id') }}
                        </th>
                        <td>
                            {{ $record->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.status') }}
                        </th>
                        <td>
                            {{ $record->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.name') }}
                        </th>
                        <td>
                            {{ $record->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.email') }}
                        </th>
                        <td>
                            {{ $record->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.phone') }}
                        </th>
                        <td>
                            {{ $record->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.designation') }}
                        </th>
                        <td>
                            {{ $record->designation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.company') }}
                        </th>
                        <td>
                            {{ $record->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.country') }}
                        </th>
                        <td>
                            {{ $record->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.industry') }}
                        </th>
                        <td>
                            {{ $record->industry }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.turnover') }}
                        </th>
                        <td>
                            {{ $record->turnover }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.employment') }}
                        </th>
                        <td>
                            {{ $record->employment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.bv') }}
                        </th>
                        <td>
                            {{ $record->bv }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.bs') }}
                        </th>
                        <td>
                            {{ $record->bs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.tpt') }}
                        </th>
                        <td>
                            {{ $record->tpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.tc') }}
                        </th>
                        <td>
                            {{ $record->tc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.emp') }}
                        </th>
                        <td>
                            {{ $record->emp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.lc') }}
                        </th>
                        <td>
                            {{ $record->lc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.wh') }}
                        </th>
                        <td>
                            {{ $record->wh }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.wc') }}
                        </th>
                        <td>
                            {{ $record->wc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.inv') }}
                        </th>
                        <td>
                            {{ $record->inv }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.gfs') }}
                        </th>
                        <td>
                            {{ $record->gfs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.record.fields.comment') }}
                        </th>
                        <td>
                            {{ $record->comment }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection