@extends('layouts.auth')

@section('content')

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
        <!-- Register -->
        <form method="POST" id="register_form" action="{{ route('register') }}">
            @csrf
                <div class="nk-form">
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" name="name" placeholder="Username">
                        </div>
                    </div>

                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                        </div>
                    </div>

                    <a data-ma-block="#l-login" class="btn btn-login btn-success btn-float" onclick="register()"><i class="notika-icon notika-right-arrow"></i></a>
                </div>   
            </form>

            <div class="nk-navigation nk-lg-ic">
                <a href="{{ url('login') }}" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Login</span></a>
                <a href="{{ url('/password/reset') }}" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>
    </div>
    <!-- Login Register area End-->
@endsection
