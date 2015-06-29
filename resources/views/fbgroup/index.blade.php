@extends('master')

@section('body')
    <div class="container">
        <h1>
            Facebook Group List
            <a href="{{ route('fbgroup.create') }}" class="btn btn-default pull-right">Add New</a>
        </h1>
        <hr/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($groupList as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->url }}</td>
                    <td>
                        <a href="{{ route('fbgroup.edit', $group->id) }}" class="btn btn-info btn-xs">Edit</a>

                        {!! Form::open(['route' => ['fbgroup.destroy', $group->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                            {!! Form::hidden('id', $group->id) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection