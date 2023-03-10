@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.variation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.variations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.variation.fields.id') }}
                        </th>
                        <td>
                            {{ $variation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.variation.fields.name') }}
                        </th>
                        <td>
                            {{ $variation->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.variation.fields.values') }}
                        </th>
                        <td>
                            {{ $variation->values }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.variations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection