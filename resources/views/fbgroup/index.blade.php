@extends('master')

@section('body')
    <div class="container">
        <h1>
            {{ trans('pages.list' , ['model' => trans_choice('models.fbgroup',1)]) }}
            <a href="{{ route('fbgroup.create') }}" class="btn btn-default pull-right">{{ trans('buttons.add') }}</a>
        </h1>
        <hr/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('validation.attributes.fbgroup_name') }}</th>
                <th>{{ trans('validation.attributes.fbgroup_url') }}</th>
                <th>{{ trans('texts.action_header') }}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($groupList as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->url }}</td>
                    <td>
                        <a href="{{ route('fbgroup.edit', $group->id) }}" class="btn btn-info btn-xs">{{trans('buttons.edit')}}</a>

                        {!! Form::open(['route' => ['fbgroup.destroy', $group->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                            {!! Form::hidden('id', $group->id) !!}
                            {!! Form::submit(trans('buttons.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection