
@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    {{-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div> --}}
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form method="POST" action="{{ route('register') }}" class="md-float-material">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- insert defaults --}}
                        <input type="hidden" class="image" name="image" value="photo_defaults.jpg">

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Your Phone Number">
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control form-control-lg @error('birth_date') is-invalid @enderror" name="birth_date" >
                            <div class="form-control-icon">
                                <i class="bi bi-calendar-date"></i>
                            </div>
                            @error('birth_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <fieldset class="form-group">
                                <select class="form-select @error('role_name') is-invalid @enderror" name="investment" id="investment">
                                    <option selected disabled>Select Investment Idea</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Equities">Equities</option>
                                    <option value="Crypto">Crypto</option>
                                </select>
                                <div class="form-control-icon">
                                    <i class="bi bi-exclude"></i>
                                </div>
                            </fieldset>
                            @error('role_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group position-relative mb-4">
                            <fieldset class="form-group"> --}}
                                <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name" hidden>
                                    {{-- <option selected disabled>Select Role Name</option> --}}
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Normal User" selected>Normal User</option>
                                </select>
                                {{-- <div class="form-control-icon">
                                    <i class="bi bi-exclude"></i>
                                </div> --}}
                            {{-- </fieldset> --}}
                            @error('role_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        {{-- </div> --}}

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Choose Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Choose Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}"
                        class="font-bold">Login</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
@endsection

