@extends('layouts.master')
@section('menu')
@extends('sidebar.user_activity_log')
@endsection
@section('content')
<div id="main">
    <style>
        .avatar.avatar-im .avatar-content, .avatar.avatar-xl img {
            width: 40px !important;
            height: 40px !important;
            font-size: 1rem !important;
        }
        .form-group[class*=has-icon-].has-icon-lefts .form-select {
            padding-left: 2rem;
        }

    </style>
    
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>User Management View</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Mangement View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> 
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ratings Details</h4>
                </div>
               
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>S/NO</th>
                                <th>Client</th>                               
                                <th>Topic</th> 
                                <th>Idea</th>
                                <th>Ratings</th>                            
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ ++$key }}</td> 
                                    @php
                                    $id=$item->user_id;
                                    $idea_id=$item->idea_id;
                                    $user= DB::table('users')                                                
                                        ->where('users.id', $id)
                                        ->get();
                                    $ideas= DB::table('ideas')
                                        ->where('ideas.id', $idea_id)
                                        ->get();
                                    @endphp
                                    @foreach ($user as $details)
                                    <td>{{ $details->name }}</td>
                                    @endforeach                               
                                    @foreach ($ideas as $details)
                                    <td>{{ $details->target_group }}</td>
                                    <td>{{ $details->title }}</td>
                                    
                                    @endforeach 
                                    @if ($item->likes==1)
                                    <td>Liked</td>
                                    @else
                                    <td>Unliked</td>
                                    @endif
                                    
                                    
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               
            </div>
        </div>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2021 &copy; Soeng Souy</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="http://soengsouy.com">Soeng Souy</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection