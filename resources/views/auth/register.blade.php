@extends('student.master')
@section('title','ลงทะเบียนใช้งาน')
@section('content')
<div class="container">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading"><i class="fa fa-user-plus" aria-hidden="true" id="icon"></i>{{ __('ลงทะเบียนใช้งาน') }}</div>
               <div class="card-body">
                  <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                     @csrf
                     <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('ชื่อนักศึกษา ') }}<span style=" font-size: 20px;color: red;">*</span></label>
                        <div class="col-md-6">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  name="name" value="{{ old('name') }}" required autofocus placeholder="(นาย, นาง, นางสาว) ชื่อ-นามสกุล">
                           </div>
                           @if ($errors->has('name'))
                           <span class="invalid-feedback" role="alert" >
                           <strong>{{ $errors->first('name') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน ') }} <span style=" font-size: 20px;color: red;">*</span></label>
                        <div class="col-md-6">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                              </span>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="รหัสผ่าน">
                           </div>
                           @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('password') }}</strong>
                           </span>
                           @endif
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน ') }} <span style=" font-size: 20px;color: red;">*</span></label>
                        <div class="col-md-6">
                           <div class="input-group">
                              <span class="input-group-addon">
                              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                              </span>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="ยืนยันรหัสผ่าน">
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="form-group row ">
                        <div class="col-md-6 col-md-offset-4">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                           {{ __('สมัครสมาชิก') }} 
                           </button>
                           <button class="btn btn-danger" type="reset"><i class="fa fa-times-circle-o" aria-hidden="true"></i> ยกเลิก</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <footer class="footer">
      <div class="col-md-12" style="margin-top: 50px"></div>
      <div class="container">
         <div class="">
            <p>Copyright <i class="fa fa-copyright"> 2018-Cooperative Education</i></p>
            Deverloped By Patiphan Uthang And Yuwa Saewang
         </div>
      </div>
      <div class="row" style="margin-top: 50px"></div>
   </footer>
</div>
@endsection