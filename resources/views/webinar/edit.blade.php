@extends('master')

@section('body')
    <div class="container">
        <h1>Edit Webinar</h1>
        <hr/>


        {!! Form::model($webinar, ['method' => 'put', 'route' => ['webinar.update', $webinar->id], 'class' => 'form-horizontal', 'role' => 'form']) !!}

        @include('webinar.fields')

                <!-- Submit Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('webinar.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection