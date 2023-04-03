<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                {{-- <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div> --}}
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
          
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>             

                @if (Auth::user()->role_name=='Super Admin')
                     
                <li class="sidebar-item active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li> 
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                          
                            @if (Auth::user()->role_name=='Super Admin' && Auth::user()->role_name=='Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-info">Relationship Manager</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>
                    {{-- <li class="sidebar-title">Page &amp; Controller</li> --}}
                   
                    <li class="sidebar-item">
                        <a href="{{ route('ideas') }}" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Briefing Ideas</span>
                        </a>
                      
                    </li>
                    {{-- <li class="sidebar-item">
                        <a href="/add_Admin" class='sidebar-link'>
                            <i class="bi bi-people"></i>
                            <span>Add Admins</span>
                        </a>
                      
                    </li> --}}
                    <li class="sidebar-item">
                        <a href="{{ route('ratings') }}" class='sidebar-link'>
                            <i class="bi bi-star"></i>
                            <span>Ratings</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('allusers') }}" class='sidebar-link'>
                            <i class="bi bi-people"></i>
                            <span>All Users</span>
                        </a>
                      
                    </li>
                    @endif
                    @if (Auth::user()->role_name=='Admin')
                    {{-- <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span> --}}
                    <hr>
                    <span>Role Name:</span>
                    <span class="badge bg-success">Idea Creater</span>
                    <li class="sidebar-item">
                        <a href="{{ route('ideas/add/new') }}" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Briefing Ideas</span>
                        </a>
                      
                    </li>
                    @endif   
                    @if (Auth::user()->role_name=='Normal User')

                    <li class="sidebar-item">
                        <a href="{{ route('related') }}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>My Suggestions</span>
                        </a>
                      
                    </li>
                @endif

                <li class="sidebar-item">
                    <a href="/profile_user" class='sidebar-link'>
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>


                {{-- <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="sidebar-item">
                    <a href="{{ route('lock_screen') }}" class='sidebar-link'>
                        <i class="bi bi-lock-fill"></i>
                        <span>Lock Screen</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>