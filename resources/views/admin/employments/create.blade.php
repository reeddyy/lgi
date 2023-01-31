@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employment">{{ trans('cruds.employment.fields.employment') }}</label>
                <input class="form-control {{ $errors->has('employment') ? 'is-invalid' : '' }}" type="text" name="employment" id="employment" value="{{ old('employment', '') }}" required>
                @if($errors->has('employment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employment.fields.employment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="factor">{{ trans('cruds.employment.fields.factor') }}</label>
                <input class="form-control {{ $errors->has('factor') ? 'is-invalid' : '' }}" type="number" name="factor" id="factor" value="{{ old('factor', '') }}" step="1">
                @if($errors->has('factor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('factor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employment.fields.factor_helper') }}</span>
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