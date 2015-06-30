@extends('master')

@section('body')
    <div class="container">
        <h1>{{ trans('pages.add' , ['model' => trans_choice('models.webinar',1)]) }}</h1>
        <hr/>
        
        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('webinar.store'))->method("POST") !!}
            @include('webinar.fields')
            {!! Former::actions()
                ->large_primary_submit(trans('buttons.create'))
                ->large_inverse_reset(trans('buttons.reset'))  !!}
            {!! Former::close() !!}
        </div>
        
    </div>
@endsection