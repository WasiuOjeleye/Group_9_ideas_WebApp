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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>New Information</h3>
                <p class="text-subtitle text-muted">New information</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ideas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    {{-- message --}}
    {!! Toastr::message() !!}

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit idea Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{ route('ideas/update_idea', $ideas->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                {{-- <div class="col-md-4">
                                    <label>Full Name</label>
                                </div> --}}
                                <div class="col-md-8">
                                    <label>Target Audience</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <select class="form-select" name="target_group" aria-label="Default select example">
                                                <option selected value="{{ $ideas->target_group }}">{{ $ideas->target_group }}</option>
                                                <option value="Real Estate">Real Estate</option>
                                                <option value="Equities">Equities</option>
                                                <option value="Crypto">Crypto</option>
                                              </select>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-check-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                placeholder="Enter Idea title" name="posted_by" value="{{ Auth::user()->name }}" hidden>
                                <div class="col-md-8">
                                    <label>Amount</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number" class="form-control @error('department') is-invalid @enderror" 
                                                placeholder="Enter Amount" name="amount" value="{{ $ideas->amount }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <label>Region</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                                placeholder="Enter Region" name="region" value="{{ $ideas->region }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label>Country</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                                placeholder="Enter Country" name="country" value="{{ $ideas->country }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label>Title</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                                placeholder="Enter Idea title" name="title" value="{{ $ideas->title }}">
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-heading"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                {{-- <div class="col-md-4">
                                    <label>Salary</label>
                                </div> --}}
                                <div class="col-md-8">
                                    <label>Content</label>
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <textarea  class="form-control @error('salary') is-invalid @enderror" name="description"
                                                placeholder="Enter idea description" name="desc" rows="30"> {{ $ideas->descriptions }} </textarea>
                                            
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cannel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2023 &copy; investment ideas</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="#">Group 5</a></p>
            </div>
        </div>
    </footer>
</div>
@endsection