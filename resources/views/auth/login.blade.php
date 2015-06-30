@extends('master')

@section('body')
    <div class="container">
        <h1>{{ trans('pages.login') }}</h1>
        <hr/>

        <div class="row col-md-5">
            <form action="{{ route('auth.login')  }}" method="POST">
                <strong>{{ trans('validation.attributes.email') }}</strong><br/>
                <input class="form-control" type="text" value="{{ old('email') }}" name="email"><br/>

                <strong>{{ trans('validation.attributes.password') }}</strong><br/>
                <input class="form-control" type="password" name="password"><br/>

                <input type="submit" value="{{ trans('buttons.login') }}" class="btn btn-info">

                {!! csrf_field() !!}

            </form>
        </div>
    </div>
@endsection