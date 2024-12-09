
<x-guest-layout>
    <section class="vh-100" style="background-color: #fff;" style="margin-top: 20px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block" style="    margin-top: 45px;">
                                <img src="{{ asset('assets/images/slidermain.jpg')}}" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form name="form-login" method="POST" action="{{route('password.email')}}">

                                        @csrf

                                        <h2 class="fw-normal mb-3 pb-3 text-center " style="letter-spacing: 1px;">Quên mật khẩu</h2>

                                        <div class="form-outline mb-4 wrap-input">
                                            <label class="form-label" for="form-login-uname">Email </label>
                                            <input type="email" id="form-login-uname" name="email" class="form-control form-control-lg" placeholder="Nhập email của bạn" :value="old('email')" required autofocus style="margin-bottom: 15px;" />
                                        </div>

                                      
                                        @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                        @endif

                                        <x-jet-validation-errors class="mb-4" />
                                        <div class="pt-3 mb-4">
                                            <button class="btn btn-primary btn-block" type="submit" value="Liên kết đặt lại mật khẩu email">Liên kết đặt lại mật khẩu email</button>
                                        </div>


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