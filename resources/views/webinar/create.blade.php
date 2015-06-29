@extends('master')

@section('body')
    <div class="container">
        <h1>Add Webinar</h1>
        <hr/>


        {!! Form::open(['route' => 'webinar.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

        @include('webinar.fields')

                <!-- Submit Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('webinar.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection