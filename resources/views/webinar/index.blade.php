@extends('master')

@section('body')
    <div class="container">
        <h1>
            Webinar List
            <a href="{{ route('webinar.create') }}" class="btn btn-default pull-right">Add New</a>
        </h1>
        <hr/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($webinars as $webinar)
                <tr>
                    <td>{{ $webinar->title }}</td>
                    <td>{{ $webinar->date_time }}</td>
                    <td>
                        <a href="{{ route('webinar.edit', $webinar->id) }}" class="btn btn-info btn-xs">Edit</a>

                        {!! Form::open(['route' => ['webinar.destroy', $webinar->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                        {!! Form::hidden('id', $webinar->id) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection