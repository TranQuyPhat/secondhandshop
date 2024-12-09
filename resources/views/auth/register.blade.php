 <x-guest-layout>
    <!--<x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> -->
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
           
                <form name="form-login" method="POST" action="{{route('register')}}">

                  @csrf

                  <h2 class="fw-normal mb-3 pb-3 text-center " style="letter-spacing: 1px;">Đăng kí tài khoản</h2>
                    
                  <div class="form-outline mb-4 wrap-input">
                      <label class="form-label" for="form-login-name">Họ tên </label>
                    <input type="text" id="form-login-name" name="name" class="form-control form-control-lg" placeholder="Nhập email của bạn" :value="name" required autofocus autocomplete="name" style="margin-bottom: 15px;"/>
                  </div>
                  <div class="form-outline mb-4 wrap-input">
                      <label class="form-label" for="form-login-uname">Email </label>
                    <input type="email" id="form-login-uname" name="email" class="form-control form-control-lg" placeholder="Nhập email của bạn" :value="email "  style="margin-bottom: 15px;"/>
                  </div>

                  <div class="form-outline mb-4 wrap-input" >
                      <label class="form-label" for="form-login-pass">Mật khẩu</label>
                    <input type="password" id="form-login-pass" name="password" class="form-control form-control-lg" placeholder="Mật khẩu của bạn" required autocomplete="new-password" style="margin-bottom: 15px;"/>
                  </div>
                  <div class="form-outline mb-4 wrap-input" >
                      <label class="form-label" for="form-login-pass-confirmation">Xác thực mật khẩu</label>
                    <input type="password" id="form-login-pass-confirmation" name="password_confirmation" class="form-control form-control-lg"  required autocomplete="new-password" placeholder="Nhập đúng mật khẩu ở trên" style="margin-bottom: 15px;"/>
                  </div>

                  <x-jet-validation-errors class="mb-4" />
                  <div class="pt-3 mb-4">
                    <button class="btn btn-primary btn-block" type="submit" value="Register">Đăng kí</button>
                  </div>

                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;margin-top: 10px;">Bạn muốn đăng nhập ? <a href="{{route('login')}}"
                      style="color: #393f81;">Đăng nhập tại đây</a></p>
                 
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