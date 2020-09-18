@extends("layouts.basicApp")

@section("content")
    <div class="d-flex flex-column flex-fill justify-content-start align-items-center body" style="width: 550px;margin-top: 96px;">
        <div style="width: 100%;padding-bottom: 16px;">
            <h1 class="display-1 d-flex justify-content-center align-items-center" style="font-size: 40px;margin: 0px;height: 100px;width: 100%;color: #ebebeb;background: #e72352;box-shadow: 0px 6px 0px rgba(255,255,255,0.1);border-radius: 25px;margin-bottom: 32px;">Login</h1>
            <div class="row loginCont" style="margin: 0px;">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <form id="signin" class="d-flex flex-column justify-content-center align-items-center" method="POST" action="{{ route('login') }}" style="/*margin: 64px;*/width: 60%;">
                        
                        <!-- csrf_token -->
                        {{csrf_field()}}

                        <!-- email login -->
                        <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Email</h3>
                        <input id="email" type="email" placeholder="email" style='margin-bottom:16px;' class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        <!-- password login -->
                        <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Password</h3>
                        <input id="password" type="password" placeholder="******" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> 
                        
                        <div class="d-flex justify-content-center align-items-center loginBtn" onclick="$('form#signin').submit()">
                            <h1 style="font-size: 18px;color: #ebebeb;margin: 0px;">Login</h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-fill justify-content-center align-items-start justify-content-sm-start align-items-sm-center signupProp" style="margin-top: 16px">
            <h1 class="text-center d-flex justify-content-center align-items-center" style="font-size: 24px;color: #ebebeb;font-weight: initial;/*padding-bottom: 16px;*/">Or</h1>
            <div class="d-flex flex-column flex-fill justify-content-center align-items-center signupCont" style="width: 100%;background: #e72352;cursor: pointer;border-radius: 25px 25px 0 0;">
                <h4 class="signupText" style="margin-top: 8px;margin-bottom: 8px;color: #ebebeb;transition: all 300ms ease;opacity: 1;">Sign up</h4>
                <div class="row" style="width: 100%;height: 100%;">
                    <div class="col d-sm-flex flex-column justify-content-sm-center align-items-sm-center proposition"><img src="img/icons/shopping-cart.svg" style="width: 42px;margin-bottom: 16px;margin-top: 8px;" />
                        <h1 class="text-center" style="color: #ebebeb;font-size: 18px;margin-bottom: 8px;">Personal <br />Cart<br /></h1>
                    </div>
                    <div class="col d-sm-flex flex-column justify-content-sm-center align-items-sm-center proposition middleProp"><img src="img/icons/shopping-bag.svg" style="width: 42px;margin-bottom: 16px;margin-top: 8px;" />
                        <h1 class="text-center" style="color: #ebebeb;font-size: 18px;margin-bottom: 8px;">Save your favourite items</h1>
                    </div>
                    <div class="col d-sm-flex flex-column justify-content-sm-center align-items-sm-center proposition"><img src="img/icons/bar-chart-2.svg" style="width: 42px;margin-bottom: 16px;margin-top: 8px;" />
                        <h1 class="text-center" style="color: #ebebeb;font-size: 18px;margin-bottom: 8px;">Price drop watchlist</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="signupFormCont" style="position: absolute;height: 100%;width: 100%;transform: translateY(40px);opacity: 0;pointer-events: none;">
            <div style="width: 100%;padding-bottom: 16px;z-index: 0;">
                <div class="d-flex justify-content-center align-items-center" style="position: relative;margin-bottom: 32px;">
                    <div class="d-flex justify-content-center align-items-center signupBackBtn" style="position: absolute;left: 0px;height: 72px;width: 72px;cursor: pointer;"><img src="img/icons/chevron-left.svg" /></div>
                    <h1 class="display-1 d-flex justify-content-center align-items-center" style="font-size: 40px;margin: 0px;height: 100px;width: 100%;color: #ebebeb;background: #e72352;box-shadow: 0px 6px 0px rgba(255,255,255,0.1);border-radius: 25px;">Sign Up</h1>
                </div>
                <div class="row loginCont" style="margin: 0px;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <form id="signup" class="d-flex flex-column justify-content-center align-items-center" method="POST" action="{{ route('register') }}" style="/*margin: 64px;*/width: 60%;">
                            
                            <!-- csrf_token -->
                            {{csrf_field()}}
                            
                            <!-- name register -->
                            <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Name</h3>
                            <input id="register_name" type="text" style="margin-bottom: 16px;" class="form-control @error('register_name') is-invalid @enderror" name="register_name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
                            
                            <!-- email register -->
                            <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Email</h3>
                            <input id="register_email" type="email" style="margin-bottom: 16px;" class="form-control @error('register_email') is-invalid @enderror" placeholder="email" name="register_email" value="{{ old('email') }}" required autocomplete="email">
                            
                            <!-- password register -->
                            <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Password</h3>
                            <input id="register_password" type="password" style="margin-bottom: 16px;" class="form-control @error('register_password') is-invalid @enderror" placeholder="******" name="register_password" required autocomplete="new-password">
                            
                            <!-- confirm password register -->
                            <h3 class="d-flex justify-content-center align-items-center" style="color: #ebebeb;margin-bottom: 16px;">Confirm Password</h3>
                            <input id="password-confirm" type="password" class="form-control" placeholder="******" name="register_password_confirmation" required autocomplete="new-password">
                            
                            <div class="d-flex justify-content-center align-items-center loginBtn" onclick="$('form#signup').submit()">
                                <h1 style="font-size: 18px;color: #ebebeb;margin: 0px;">Sign up</h1>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
