
<x-guest-layout>
<!-- <main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">						
                    <div class="login-form form-item form-stl">
                    <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" method="POST" action="{{route('login')}}">
                            @csrf
                            <fieldset class="wrap-title">
                                <h3 class="form-title">Log in to your account</h3>										
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Email Address:</label> 
                                <input type="email" id="frm-login-uname" name="email" placeholder="Type your email address" :value="old('email')" required autofocus>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-pass">Password:</label>
                                <input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
                            </fieldset>
                            
                            <fieldset class="wrap-input">
                                <label class="remember-field">
                                    <input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                </label>
                                <a class="link-function left-position" href="{{route('password.request')}}" title="Forgotten password?">Forgotten password?</a>
                            </fieldset>
                            <input type="submit" class="btn btn-submit" value="Login" name="submit">
                        </form>
                    </div>												
                </div>
            </div>
        </div>
        <style>
    .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
</style>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
    </div>

</div>

</main> -->
<section class="vh-100" style="background-color: #fff;" style="margin-top: 20px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="    margin-top: 45px;">
              <img src="{{ asset('assets/images/slidermain.jpg')}}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
           
                <form name="form-login" method="POST" action="{{route('login')}}">

                  @csrf

                  <h2 class="fw-normal mb-3 pb-3 text-center " style="letter-spacing: 1px;">Đăng nhập</h2>

                  <div class="form-outline mb-4 wrap-input">
                      <label class="form-label" for="form-login-uname">Email </label>
                    <input type="email" id="form-login-uname" name="email" class="form-control form-control-lg" placeholder="Nhập email của bạn" :value="old('email')" required autofocus style="margin-bottom: 15px;"/>
                  </div>

                  <div class="form-outline mb-4 wrap-input" >
                      <label class="form-label" for="form-login-pass">Mật khẩu</label>
                    <input type="password" id="form-login-pass" name="password" class="form-control form-control-lg" placeholder="***********" required autocomplete="current-password" style="margin-bottom: 15px;"/>
                  </div>

                  <x-jet-validation-errors class="mb-4" />
                  <div class="pt-3 mb-4">
                    <button class="btn btn-primary btn-block" type="submit" value="Login">Login</button>
                  </div>

                  <a class="small text-muted" href="{{route('password.request')}}">Quên mật khẩu</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Bạn chưa có tài khoản ? <a href="{{route('register')}}"
                      style="color: #393f81;">Đăng kí tại đây</a></p>
                 
                </form>

             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</x-guest-layout>