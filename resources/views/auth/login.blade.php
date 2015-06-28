@extends('master')

@section('body')
    <div class="container">
        <h1>Login</h1>
        <hr/>

        <div class="row col-md-5">
            <form action="{{ route('auth.login')  }}" method="POST">
                <strong>Email</strong><br/>
                <input class="form-control" type="text" value="{{ old('email') }}" name="email"><br/>

                <strong>Password</strong><br/>
                <input class="form-control" type="password" name="password"><br/>

                <input type="submit" value="Login" class="btn btn-info">

                {!! csrf_field() !!}

            </form>
        </div>


    </div>
@endsection