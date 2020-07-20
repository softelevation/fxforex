@extends('layouts.app')

@section('content')
<div class="banner">
<div class="container">
<h3>Learn how to trade confidently with FXFOREX
 </h3>
<a class="banner-a"href="http://forex.kbihm.com/register" class="clear-btn">Open account</a>
<p class="header-wrapper-warning"><span class="risk-warning-mobile" style="font-size: 16px;"> <a href="#" style="text-decoration: underline; color: #0855b4; text-shadow: 1px 1px black; font-size: 16px;">Risk Warning:</a>&nbsp;<span style="text-shadow: 1px 1px 5px black; font-weight: bold; color: white; font-size: 16px;">75.59% of retail CFD accounts lose money</span></span></p>
</div>
</div>
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8 login-page">
		 <div class="row">
		 <div class="col-md-6">
            <div class="card">
                <p class="form-title">Already a client?</p> 
               <span class="required">*Required Fields</span>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="*email"  required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                           
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="*password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                           
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>

                        <div class="form-group" id="login-form-pass">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                           
                        </div>
                    </form>
                </div>
            </div>
			</div>
			<div class="col-md-6">
			<div class="login-section-right">
			<h5>New to FXFOREX?</h5>
			<p>open a trading account in a few simple steps</p> 
			<a href="http://forex.kbihm.com/register" id="btn-open-account">Open Account</a>
			<span class="risk-warning-mobile" style="font-size: 16px;"> <a href="#" style="text-decoration: underline; color: #0855b4; font-size: 16px;">Risk Warning:</a>&nbsp;<span style="text-shadow: 1px 1px 5px black; font-weight: bold; color: white; font-size: 16px;">75.59% of retail CFD accounts lose money</span></span>
			</div>
			</div>
			
			</div>
			
        </div>
    </div>
</div>
@endsection 

<style>
#login-form-pass a.btn.btn-link{padding: 10px;}#login-form-pass button{    margin: 0px auto 0;}
</style>