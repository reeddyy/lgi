@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.turnover.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.turnovers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="turnover">{{ trans('cruds.turnover.fields.turnover') }}</label>
                <input class="form-control {{ $errors->has('turnover') ? 'is-invalid' : '' }}" type="text" name="turnover" id="turnover" value="{{ old('turnover', '') }}" required>
                @if($errors->has('turnover'))
                    <div class="invalid-feedback">
                        {{ $errors->first('turnover') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.turnover.fields.turnover_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="factor">{{ trans('cruds.turnover.fields.factor') }}</label>
                <input class="form-control {{ $errors->has('factor') ? 'is-invalid' : '' }}" type="number" name="factor" id="factor" value="{{ old('factor', '') }}" step="1">
                @if($errors->has('factor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('factor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.turnover.fields.factor_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection