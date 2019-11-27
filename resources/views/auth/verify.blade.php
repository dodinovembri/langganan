@extends('layouts.app')

@section('content')
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <form method="POST" id="forgot_password_form" action="{{ route('verification.resend') }}">
                @csrf
                <!-- Forgot Password -->
                <div class="nk-block" id="l-forget-password">
                    <div class="nk-form">
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                        <div class="input-group">
                            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>

                        <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
                    </div>

                    <div class="nk-navigation nk-lg-ic rg-ic-stl">
                        <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                        <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                    </div>
                </div>
            </form>

            <div class="nk-navigation nk-lg-ic">
                <a href="{{ url('/register') }}"  data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
@endsection
