@extends('master')

@section('body')
    <div class="container">
        <h1>{{ trans('pages.edit' , ['model' => trans_choice('models.fbgroup',1)]) }}</h1>
        <hr/>

        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('fbgroup.update', $fbgroup['id']))->method("PUT") !!}
            {!! Former::populate($fbgroup) !!}
            @include('fbgroup.fields')
            {!! Former::actions()
                ->large_primary_submit(trans('buttons.update'))
                ->large_inverse_reset(trans('buttons.reset'))  !!}
            {!! Former::close() !!}
        </div>

    </div>
@endsection