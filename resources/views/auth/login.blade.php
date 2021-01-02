
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in | Chicken Shop</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background: url({{asset('public/img/login4.jpg')}}) no-repeat 30% center / cover !important; align-items: unset;">

<div class="container">
  <div class="row">
    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 ml-auto">
      <div class="login-box" style="width:100%;">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary" style="background-color: #ffffff85 !important;">
          <div class="card-header text-center">
            <a href="#" class="h1"><img src="{{asset('public/img/logo.png')}}" width="140" height="110" alt="logo"></a>
          </div>
          <div class="card-body">
            <!-- <p class="login-box-msg">Sign in to start your session</p> -->

          <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="input-group col-md-6">
                                <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> -->

                                <!-- <div class="input-group mb-3"> -->
  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary hide" id="show_password" type="button"><i class="far fa-eye-slash"></i></button>
    <!-- <button class="btn btn-outline-secondary show" id="show_password" type="button"><i class="fas fa-eye"></i></button> -->
  <!-- </div> -->
</div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <!-- <badge type="button" id="show_password" name="show_password" class="btn bnt-sm btn-default">Show Password</badge> -->

                        </div>

                       <!--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.login-box -->

    </div>
  </div>
</div>

<!-- jQuery -->
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>

<script>  
$(document).ready(function(){  
 $('#show_password').on('click', function(){  
  var passwordField = $('#password');  
  var passwordFieldType = passwordField.attr('type');
  if(passwordField.val() != '')
  {
   if(passwordFieldType == 'password')  
   {  
    passwordField.attr('type', 'text');  
    $(this).html('<i class="far fa-eye"></i>');  
    // $('#hide').hide();  
   }  
   else  
   {  
    passwordField.attr('type', 'password');  
    $(this).html('<i class="fas fa-eye-slash"></i>');  
    // $('#show').show();  
   }
  }
  else
  {
   alert("Please Enter Password");
  }
 });  
});  
</script>

</body>
</html>

