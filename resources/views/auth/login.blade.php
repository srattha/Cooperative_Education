@extends('student.master')
@section('title','เข้าสู่ระบบ')
@section('css')

@endsection
@section('content')
<div class="container">
   <!--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-sm-4 col-form-label text-md-right">
                                {{ __('Username or Email') }}
                            </label>

                            <div class="col-md-6">
                                <input id="login" type="text"
                                       class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div> color: #333;
        </div>
    </div> -->
    <div class="row" style="padding-top: 20px; padding-right: 400px;">
        <div class=" col-lg-offset-6">
            <!-- Brand -->
            <div class="text-center" style="margin-bottom:0px;">
                <div><img src="https://regis.rmutl.ac.th/student/assets/image/logo/rmutl-logo.png" height="120px"></div>
                <h4 class="text-muted mt-5" style="padding-top: 5px;">ระบบบริหารจัดการข้อมูลสหกิจศึกษาออนไลน์ </h4>
                <h4 class="text-muted mt-5">มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</h4>
                <h4 class="text-muted mt-5" style="padding-top: 10px;">( สำหรับนักศึกษา )</h4>
            </div>
            <!--/ Brand -->
            <hr>
             <form class="panel" method="POST" action="{{ route('login') }}" style="position: relative;
            border-width: 1px;
            border-color: #cfd9db;
            border-bottom-width: 2px;
            border-bottom-color: #c0cdd1;
            border-radius: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;">
                        @csrf
            <div class="panel-body">
               @if (Session::has('user'))
               <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  <p>{{ Session::get('user') }}</p>
              </div>
              @endif
             <div class="form-group row">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="login" type="text" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                        name="login" value="{{ old('username') ?: old('email') }}" placeholder="Username" required autofocus>
                    </div>
                    @if ($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ<i class="fa fa-sign-in" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
        <div class="" style="margin-top: 50px"></div>
        <div class="container">
            <div class="">
                <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
                Deverloped By Patiphan Uthang And Yuwa Saewang
            </div>
        </div>
        <div class="row" style="margin-top: 50px"></div>
    </footer>
@endsection
