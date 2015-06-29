@extends('master')

@section('body')
    <div class="container">
        <h1>Edit Facebook Group</h1>
        <hr/>

        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('fbgroup.update', $fbgroup->id))->method("PUT") !!}
            {!! Former::populate($fbgroup) !!}
            @include('fbgroup._form')
            {!! Former::actions()
                ->large_primary_submit('update')
                ->large_inverse_reset('reset')  !!}
            {!! Former::close() !!}
        </div>

    </div>
@endsection