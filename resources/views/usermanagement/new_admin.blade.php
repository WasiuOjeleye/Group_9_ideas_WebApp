@extends('layouts.master')
@section('menu')
@extends('sidebar.user_activity_log')
@endsection
@section('content')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Add a System Admin</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-8">
                <form method="POST" action="{{ route('storeAdmin') }}" class="md-float-material">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Admin Full Name">
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
                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">
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
                        <input type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Phone Number">
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

                    {{-- <div class="form-group position-relative has-icon-left mb-4">
                        <fieldset class="form-group"> --}}
                            <select class="form-select @error('role_name') is-invalid @enderror" name="investment" id="investment" hidden>
                                {{-- <option selected disabled>Select Investment Idea</option> --}}
                                <option value="Real Estate">Real Estate</option>
                                <option value="Equities">Equities</option>
                                <option value="Crypto">Crypto</option>
                                <option value="All" selected>Crypto</option>
                            </select>
                           
                        </fieldset>
                        @error('role_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    {{-- </div> --}}
                    {{-- <div class="form-group position-relative mb-4">
                        <fieldset class="form-group"> --}}
                            <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name" hidden>
                                {{-- <option selected disabled>Select Role Name</option> --}}
                                <option value="Admin">Admin</option>
                                <option value="Super Admin" selected>Super Admin</option>
                                <option value="Normal User">Normal User</option>
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
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><i class="bi bi-person-plus-fill"></i> Add</button>
                </form>      
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; investment ideas</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="#">Group 9</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection