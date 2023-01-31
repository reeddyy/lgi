@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.record.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.records.update", [$record->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="status">{{ trans('cruds.record.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('status', $record->status) }}">
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.record.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $record->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.record.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $record->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.record.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $record->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="designation">{{ trans('cruds.record.fields.designation') }}</label>
                <input class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', $record->designation) }}">
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.record.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', $record->company) }}">
                @if($errors->has('company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.record.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $record->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="industry">{{ trans('cruds.record.fields.industry') }}</label>
                <input class="form-control {{ $errors->has('industry') ? 'is-invalid' : '' }}" type="text" name="industry" id="industry" value="{{ old('industry', $record->industry) }}">
                @if($errors->has('industry'))
                    <div class="invalid-feedback">
                        {{ $errors->first('industry') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.industry_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="turnover">{{ trans('cruds.record.fields.turnover') }}</label>
                <input class="form-control {{ $errors->has('turnover') ? 'is-invalid' : '' }}" type="text" name="turnover" id="turnover" value="{{ old('turnover', $record->turnover) }}">
                @if($errors->has('turnover'))
                    <div class="invalid-feedback">
                        {{ $errors->first('turnover') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.turnover_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employment">{{ trans('cruds.record.fields.employment') }}</label>
                <input class="form-control {{ $errors->has('employment') ? 'is-invalid' : '' }}" type="text" name="employment" id="employment" value="{{ old('employment', $record->employment) }}">
                @if($errors->has('employment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.employment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bv">{{ trans('cruds.record.fields.bv') }}</label>
                <input class="form-control {{ $errors->has('bv') ? 'is-invalid' : '' }}" type="text" name="bv" id="bv" value="{{ old('bv', $record->bv) }}">
                @if($errors->has('bv'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bv') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.bv_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bs">{{ trans('cruds.record.fields.bs') }}</label>
                <input class="form-control {{ $errors->has('bs') ? 'is-invalid' : '' }}" type="text" name="bs" id="bs" value="{{ old('bs', $record->bs) }}">
                @if($errors->has('bs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.bs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tpt">{{ trans('cruds.record.fields.tpt') }}</label>
                <input class="form-control {{ $errors->has('tpt') ? 'is-invalid' : '' }}" type="text" name="tpt" id="tpt" value="{{ old('tpt', $record->tpt) }}">
                @if($errors->has('tpt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tpt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.tpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tc">{{ trans('cruds.record.fields.tc') }}</label>
                <input class="form-control {{ $errors->has('tc') ? 'is-invalid' : '' }}" type="text" name="tc" id="tc" value="{{ old('tc', $record->tc) }}">
                @if($errors->has('tc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.tc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emp">{{ trans('cruds.record.fields.emp') }}</label>
                <input class="form-control {{ $errors->has('emp') ? 'is-invalid' : '' }}" type="text" name="emp" id="emp" value="{{ old('emp', $record->emp) }}">
                @if($errors->has('emp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('emp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.emp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lc">{{ trans('cruds.record.fields.lc') }}</label>
                <input class="form-control {{ $errors->has('lc') ? 'is-invalid' : '' }}" type="text" name="lc" id="lc" value="{{ old('lc', $record->lc) }}">
                @if($errors->has('lc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.lc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="wh">{{ trans('cruds.record.fields.wh') }}</label>
                <input class="form-control {{ $errors->has('wh') ? 'is-invalid' : '' }}" type="text" name="wh" id="wh" value="{{ old('wh', $record->wh) }}">
                @if($errors->has('wh'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wh') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.wh_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="wc">{{ trans('cruds.record.fields.wc') }}</label>
                <input class="form-control {{ $errors->has('wc') ? 'is-invalid' : '' }}" type="text" name="wc" id="wc" value="{{ old('wc', $record->wc) }}">
                @if($errors->has('wc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('wc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.wc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="inv">{{ trans('cruds.record.fields.inv') }}</label>
                <input class="form-control {{ $errors->has('inv') ? 'is-invalid' : '' }}" type="text" name="inv" id="inv" value="{{ old('inv', $record->inv) }}">
                @if($errors->has('inv'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inv') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.inv_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gfs">{{ trans('cruds.record.fields.gfs') }}</label>
                <input class="form-control {{ $errors->has('gfs') ? 'is-invalid' : '' }}" type="text" name="gfs" id="gfs" value="{{ old('gfs', $record->gfs) }}">
                @if($errors->has('gfs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gfs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.gfs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comment">{{ trans('cruds.record.fields.comment') }}</label>
                <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{{ old('comment', $record->comment) }}</textarea>
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.record.fields.comment_helper') }}</span>
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