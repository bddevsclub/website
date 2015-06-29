@extends('master')

@section('body')
    <div class="container">
        <h1>Edit Facebook Group</h1>
        <hr/>


        {!! Form::model($fbgroup, ['method' => 'put', 'route' => ['fbgroup.update', $fbgroup->id], 'class' => 'form-horizontal', 'role' => 'form']) !!}

        @include('fbgroup._form')

        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Update Group', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('fbgroup.index') }}" class="btn btn-warning">Cancel</a>

            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection