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
</style>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List of Ideas Briefings</h3>
                    {{-- <p class="text-subtitle text-muted">For Ideas Briefings</p> --}}
                </div>
                    
                
                <div class="col-12 col-md-6 order-md-2 order-first float-right pb-5 ml-5">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <div class="float-right">
                            <a href="{{ route('ideas/add/new') }}" class="btn btn-outline-success"><i class="bi bi-plus"></i>
                             Add New
                            </a>
                            
                         </div>
                    </nav>
                </div>
                
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                   Ideas Previews
                </div>
             <div class="container">
                <div class="row">
                    @foreach ($ideas as $key => $item)
                    
                    <div class="col-12 col-md-12 ">
                       
                        <div class="card bg-col">
                            <div class="card-body">
                                <h5>{{ $item->title }}</h5>
                               <p> {{ $item->descriptions }}</p>
                               <p class="sign"><span>Posted By: <br> {{ $item->posted_by }}</span>
                            </div>
                          </div>
                        
                    </div>
                   
                  @endforeach
                </div>
             </div>

            </div>
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
