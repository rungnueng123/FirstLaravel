@extends('admin.layout.register')

@section('content')

    <div class="col-md-6">
        <div class="card mx-4">
            {!! Form::open(['url' => '/saveregister']) !!}
            <div class="card-body p-4">
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-user"></i>
                      </span>
                    </div>
                    {{--{!! Form::text('username','Username') !!}--}}

                    {{--<input class="form-control" type="text" placeholder="Username">--}}
                    {{Form::text('Username', '' , ['class' => 'form-control' , 'placeholder' => 'Username'])}}

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    {{--<input class="form-control" type="text" placeholder="Email">--}}
                    {{Form::text('Email', '' , ['class' => 'form-control' , 'placeholder' => 'Email'])}}
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    {{--<input class="form-control" type="password" placeholder="Password">--}}
                    {{Form::text('Password', '' , ['class' => 'form-control' , 'placeholder' => 'Password'])}}
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    {{--<input class="form-control" type="password" placeholder="Password">--}}
                    {{Form::date('Birth', '' , ['class' => 'form-control' , 'placeholder' => 'Birth'])}}
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="icon-lock"></i>
                      </span>
                    </div>
                    <select name="Gender" class="form-control" id="">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>
                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                <button class="btn btn-block btn-back-login" type="button" onclick="window.location='{{url('login')}}';">Back to Login</button>
            </div>
            <div class="card-footer p-4">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-block btn-facebook" type="button">
                            <span>facebook</span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-block btn-twitter" type="button">
                            <span>twitter</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection