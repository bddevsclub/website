@extends('master')

@section('body')
    <div class="container">
        <h1>{{ trans('pages.edit' , ['model' => trans_choice('models.webinar',1)]) }}</h1>
        <hr/>

        <div class="col-md-8 col-md-offset-2">
            {!! Former::horizonal_open()->action(route('webinar.update', $webinar['id']))->method("PUT") !!}
            {!! Former::populate($webinar) !!}
            @include('webinar.fields')
            {!! Former::actions()
                ->large_primary_submit(trans('buttons.update'))
                ->large_inverse_reset(trans('buttons.reset'))  !!}
            {!! Former::close() !!}
        </div>

    </div>
@endsection