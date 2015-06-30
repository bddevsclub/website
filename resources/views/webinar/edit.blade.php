@extends('master')

@section('body')
    <div class="container">
        <h1>Edit Webinar</h1>
        <hr/>

        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('webinar.update', $webinar->id))->method("PUT") !!}
            {!! Former::populate($webinar) !!}
            @include('webinar.fields')
            {!! Former::actions()
                ->large_primary_submit('update')
                ->large_inverse_reset('reset')  !!}
            {!! Former::close() !!}
        </div>

    </div>
@endsection