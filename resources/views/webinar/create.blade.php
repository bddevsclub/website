@extends('master')

@section('body')
    <div class="container">
        <h1>Add Webinar</h1>
        <hr/>
        
        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('webinar.store'))->method("POST") !!}
            @include('webinar.fields')
            {!! Former::actions()
                ->large_primary_submit('create')
                ->large_inverse_reset('reset')  !!}
            {!! Former::close() !!}
        </div>
        
    </div>
@endsection