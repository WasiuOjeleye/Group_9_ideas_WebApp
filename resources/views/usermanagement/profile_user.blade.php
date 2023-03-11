@extends('layouts.master')
@section('menu')

@extends('sidebar.user_activity_log')
@endsection
@section('content')

<style>
    h6 span{
        font-weight: normal;
    }
</style>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>My Profile</h3>
                <p class="text-subtitle text-muted">Update my profile</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-pencil-square"></i>  Edit
                          </button> --}}

                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                          data-bs-target="#staticBackdrop">
                          <i class="bi bi-pencil-square"></i>  Edit
                      </button>

                      <!-- disabled animation Modal -->
                      <div class="modal text-left" id="staticBackdrop" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
                          aria-labelledby="myModalLabel6" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                              role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title" id="myModalLabel6">Edit your details
                                      </h4>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                     <div class="col-md-12">
                                        <form method="POST" action="{{ route('profile_user/store', $users->id) }}" class="md-float-material">
                                            @csrf
                                            @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-12 mb-1">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                                    <input type="text" class="form-control" name="name" value="{{ $users->name }}"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-1">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                                    <input type="text" class="form-control" name="email" value="{{ $users->email }}"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-1">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"  id="basic-addon1">Date Of Birth</span>
                                                    <input type="date" class="form-control" name="birth_date" required
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-1">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">Phone Number</span>
                                                    <input type="number" class="form-control" name="phone" value="{{ $users->phone_number }}"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-1">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select @error('role_name') is-invalid @enderror" name="ideas" id="investment">
                                                        <option selected value="{{ $users->ideas }}">{{ $users->ideas }}</option>
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
                                            
                                        </div>
                                     </div>
                                       
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-light-secondary"
                                          data-bs-dismiss="modal">
                                          <i class="bx bx-x d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Close</span>
                                      </button>
                                      <button type="submit" class="btn btn-primary ml-1">
                                          <i class="bx bx-check d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Update</span>
                                      </button>
                                  </div>
                                </form>
                                    
                              </div>
                          </div>
                      </div>
                      
                        {{-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Modal -->

    {{-- message --}}
    {!! Toastr::message() !!}

    <div id="auth">

        <div class="row h-100">            
            <div class="col-lg-6 col-6">
                     <div class="card bg-col">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="avatar avatar-xl pl-4">
                                <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card-body">
                                    <h6>Name: <span>{{ $users->name }} </span></h6>                                                       
                                    <h6>Email: <span>{{ $users->email }} </span></h6> 
                                    <h6>Role: <span>{{ $users->role_name }}</span> </h6>                                                     
                                  
                                </div>
                            </div>
                        </div>
                        
                        
                      </div>
                  
            </div>
            <div class="col-lg-6 col-6">           
                                
                <div class="card bg-col">
                    <div class="card-body">
                        <h6>Phone Number: <span>{{ $users->phone_number }}</span></h6>
                        <h6>Date of Birth: <span>{{ $users->birth_date }}</h6>                        
                        <h6>Ideas: <span>{{ $users->ideas }}</span> </h6>                          
                      
                    </div>
                  </div>
              
        </div>
            {{-- <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div> --}}
        </div>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; Group 9</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="#">Group 9</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection