@extends('master')

@section('body')
    <div class="container">
        <h1>
            {{ trans('pages.list' , ['model' => trans_choice('models.webinar',1)]) }}
            <a href="{{ route('webinar.create') }}" class="btn btn-default pull-right">{{ trans('buttons.add') }}</a>
        </h1>
        <hr/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ trans('validation.attributes.webinar_title') }}</th>
                <th>{{ trans('validation.attributes.webinar_date_time') }}</th>
                <th>{{ trans('texts.action_header') }}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($webinars as $webinar)
                <tr>
                    <td>{{ $webinar->title }}</td>
                    <td>{{ $webinar->date_time }}</td>
                    <td>
                        <a href="{{ route('webinar.edit', $webinar->id) }}" class="btn btn-info btn-xs">{{trans('buttons.edit')}}</a>

                        {!! Form::open(['route' => ['webinar.destroy', $webinar->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                        {!! Form::hidden('id', $webinar->id) !!}
                        {!! Form::submit(trans('buttons.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection