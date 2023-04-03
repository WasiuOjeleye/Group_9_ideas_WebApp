@extends('layouts.master')
@section('menu')
@extends('sidebar.user_activity_log')
@endsection
@section('content')
<style>
    .bg-col{
        background-color: rgb(22, 4, 86);
    }
    .bg-col p{
        color: whitesmoke;
    }
    .bg-col h5{
        color: rgb(35, 159, 236);
    }
    .bg-col .sign{
        float: right;
        font-size: 10px;
        font-style: italic;
    }
    span small{
        color: blue;
        font-weight: bold;
    }
</style>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    @if (Auth::user()->role_name=='Normal User')
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Related Ideas </h6>
                                        <h6 class="font-extrabold mb-0">{{  $spec_ideas->count()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Activity Log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $activity_logs }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                  
                
                    @if (Auth::user()->role_name=='Normal User')
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Posted Ideas </h6>
                                        <h6 class="font-extrabold mb-0">{{  $countideas }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Activity Log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $user_activity_logs }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        {{-- <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">User Activity log</h6>
                                        <h6 class="font-extrabold mb-0">{{ $user_activity_logs }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @else
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">User Total</h6>
                                        <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Posted Ideas </h6>
                                        <h6 class="font-extrabold mb-0">{{  $countideas }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                   
                </div>
             
            </div>
            <div class="col-12 col-lg-4">
                <div class="card" data-bs-toggle="modal" data-bs-target="#default">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ URL::to('/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- user profile modal --}}
                <div class="card-body">
                    <!--Basic Modal -->
                    <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="fullName" value="{{ Auth::user()->name }}" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Email Address</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Mobile Number</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" class="form-control" value="{{ Auth::user()->phone_number }}" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-md-4">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" value="{{ Auth::user()->status }}" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-bag-check"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Role Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" value="{{ Auth::user()->role_name }}" readonly>
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-exclude"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end user profile modal --}}
    
            </div>
        </section>

        <div class="row">
    <div class="col-md-12">
    
    @if (!$ideas->isEmpty())
    @if(Auth::user()->role_name=='Super Admin')
    <h6>Recent Ideas</h6>
    @foreach ($ideas as $item)

    
    <div class="recent-message d-flex py-3">        
        <div class="name ms-4">
            <a href="{{ route('read', $item->title) }}">
            <h6 class="mb-1 ">{{ $item->title }} <br> <span class="text-muted"> {{  Str::words($item->descriptions, '20') }} </span> </h6>
            </a>
            <p class="sign "><span>Posted By: {{ $item->posted_by }}  <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </small> </span> </p>
        </div>
    </div>
 
   </div>    
   @endforeach
   @elseif(Auth::user()->role_name=='Admin')
   @foreach ($admin_ideas as $item) 

   <div class="recent-message d-flex py-3">        
    <div class="name ms-4">
        <a href="{{ route('read', $item->title) }}">
        <h6 class="mb-1 ">{{ $item->title }} <br> <span class="text-muted"> {{  Str::words($item->descriptions, '20') }} </span> </h6>
        </a>
        <p class="sign "><span>Posted By: {{ $item->posted_by }}  <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </small> </span> </p>
    </div>
</div>

</div> 

   @endforeach
   @else
   @foreach ($spec_ideass as $item)    
   <div class="recent-message d-flex py-3">        
       <div class="name ms-4">
           <a href="{{ route('read', $item->title) }}">
           <h6 class="mb-1 ">{{ $item->title }} <br> <span class="text-muted"> {{  Str::words($item->descriptions, '20') }} </span> </h6>
           </a>
           <p class="sign "><span>Posted By: {{ $item->posted_by }}  <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </small> </span> </p>
       </div>
   </div>

  </div> 

  @endforeach
   @endif
   @else
   <div class="pt-4">
    <div class="alert bg-info">
       <strong> No recent ideas found</strong>
    </div>
   </div>
    @endif
        </div>
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