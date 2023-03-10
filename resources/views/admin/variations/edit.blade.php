@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.variation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.variations.update", [$variation->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.variation.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $variation->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.variation.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="values">{{ trans('cruds.variation.fields.values') }}</label>
                <input class="form-control {{ $errors->has('values') ? 'is-invalid' : '' }}" type="text" name="values" id="values" value="{{ old('values', $variation->values) }}">
                @if($errors->has('values'))
                    <span class="text-danger">{{ $errors->first('values') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.variation.fields.values_helper') }}</span>
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