@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card-left">
                <h4>PERSONAL DETAILS</h4>
                <p>To create your trading account, please fill in the form with your personal details</p>
                <p>All your information is safe with us and kept confidential</p>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h3>PERSONAL DETAILS</h3>
                    <p>All your information is safe with us and kept confidential </p>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                        @foreach($errors->all() as $error)
                            {{ $error }}<br/>
                        @endforeach
                    </div> 
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class=" col-form-label text-md-right">{{ __('First Name') }}</label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="First Name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group col-md-6">
                                <label for="second_name"
                                    class=" col-form-label text-md-right">{{ __('Second Name') }}</label>

                                <input id="second_name" type="text"
                                    class="form-control @error('second_name') is-invalid @enderror" name="second_name"
                                    placeholder="Second Name" required>

                                    @error('second_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone" class="col-form-label text-md-right">{{ __('Phone') }}</label>

                                <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    placeholder="Phone" required>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>


                            <div class="form-group col-md-6">
                                <label for="email"
                                    class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="E-Mail Address" Add value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>


                            <div class="form-group col-md-6">
                                <label for="dob" class="col-form-label text-md-right">{{ __('DOB') }}</label>


                                <input id="dob" type="date"
                                    class="form-control @error('dob') is-invalid @enderror" name="dob"
                                    required autocomplete="new-dob" placeholder="Date Of Birth">

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group col-md-6">
                                <label for="gender" class="col-form-label text-md-right">{{ __('Gender') }}</label>


                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                            <option value="">Select Gerder</option>        
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                    </select>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                            <div class="form-group col-md-6">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group col-md-6">
                                <label for="password-confirm"
                                    class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password">

                            </div>

                            <div class="card-footer-left col-md-9">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="receive_news_latters" >
                                        <p>I would like to receive newsletters, special promotions, emails, SMS and
                                            calls
                                        </p>
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="term_condition" >
                                        <p>I am over 18 years old. Once you click Open Account, you’ve ensured that you
                                            have read, understood and agreed with our <a href="# target=" _blank"
                                                rel="noopener">terms and conditions</a>, <a class="link" href="#"
                                                target="_blank" rel="noopener">privacy policy</a>, and&nbsp;<a href="#"
                                                target="_blank" rel="noopener">risk disclosure</a>
                                        </p>
                                    </label>
                                </div>
                                <p>
                                    <p>If you already have an account&nbsp;<a href="http://forex.kbihm.com/login">Click
                                            Here</a>.</p>
                            </div>

                            <div class="form-group col-md-3">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.2/css/intlTelInput.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.2/js/intlTelInput.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.2/js/intlTelInput-jquery.js"></script>

<script>
$("#phone").intlTelInput();
</script>

@endsection