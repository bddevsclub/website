@extends('master')

@section('body')
    <div class="container">
        <h1>Add New Facebook Group</h1>
        <hr/>

        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('fbgroup.store'))->method("POST") !!}
            @include('fbgroup.fields')
            {!! Former::actions()
                ->large_primary_submit('create')
                ->large_inverse_reset('reset')  !!}
            {!! Former::close() !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection