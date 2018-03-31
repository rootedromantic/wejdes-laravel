<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="admin">
    <div id="app">
        <nav class="navbar sticky-top flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
            <input class="form-control w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{route('admin.profile')}}" aria-haspopup="true" aria-expanded>
                            <span data-feather="user"></span>
                            Profile
                            
                        </a>                        
                            <div class="dropdown-menu">
                                <a class="nav-link" href="{{ route('admin.profile.settings')}}">User Settings</a>
                                <a class="nav-link" href="{{ route('admin.profile.social')}}">Social Services</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.posts')}}">
                            <span data-feather="file"></span>
                            Posts
                        </a>
                        </li>
                        <!--<li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                        </li>-->
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.comments')}}">
                            <span data-feather="message-circle"></span>
                            Comments
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.newsletter')}}">
                            <span data-feather="users"></span>
                            Newsletter
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.settings')}}">
                                <span data-feather="settings"></span>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    @yield('content')
                </div>
                </div>
            </main>
            </div>
        </div>
    </div>



    <div class="admin app-dashboard shrink-medium">
        <div class="grid-x grid-padding-x top-bar">
            <div class="cell medium-2">
                <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
                <a>the WEJDES collective</a>
            </div>
            <div class="cell medium-9">
                <input class="app-dashboard-search" type="search" placeholder="Search">
                <i class="app-dashboard-search-icon fa fa-search"></i>
            </div>
            <div class="cell medium-1">
                <a href="{{route('logout')}}" class="sign-out">Sign Out</a>
            </div>
        </div>
        
        <div class="app-dashboard-body off-canvas-wrapper">
            <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas data-position="left">
            <div class="app-dashboard-sidebar-title-area">
                <div class="app-dashboard-close-sidebar">
                <!-- Close button -->
                    <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
                        <span aria-hidden="true"><a href="#">X</a></span>
                    </button>
                </div>
                <div class="app-dashboard-open-sidebar">
                    <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
                        <span aria-hidden="true"><a href="#">+</a></span>
                    </button>
                </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
                <ul class="vertical dropdown menu" data-dropdown-menu>
                <li><a href="{{route('admin')}}" class="is-active">
                        <i class="fa large fa-home"></i><span class="app-dashboard-sidebar-text">Dashboard</span>
                </a></li>
                <li>
                    <a href="{{route('admin.profile')}}">
                        <i class="large fa fa-user-circle"></i><span class="app-dashboard-sidebar-text">User</span>

                    </a>
                    <ul class="vertical menu nested">
                            <a class="nav-link" href="{{ route('admin.profile.settings')}}">User Settings</a>
                            <a class="nav-link" href="{{ route('admin.profile.social')}}">Social Services</a>
                    </ul>
                </li>
                <li><a href="{{route('admin.posts')}}">
                    <i class="large fa fa-file"></i><span class="app-dashboard-sidebar-text">Posts</span>
                </a></li>
                <li><a href="{{route('admin.comments')}}" class="is-active">
                    <i class="large fa fa-comments"></i><span class="app-dashboard-sidebar-text">Comments</span>
                </a></li>
                <li><a href="{{route('admin.newsletter')}}">
                    <i class="large fa fa-users"></i><span class="app-dashboard-sidebar-text">Newsletter</span>
                </a></li>
                <li><a href="{{route('admin.settings')}}">
                    <i class="large fa fa-cog"></i><span class="app-dashboard-sidebar-text">Settings</span>
                </a></li>
                </ul>
            </div>
            </div>
        
            <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
            <h2 class="text-center">Lorem Ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit ligula eget est feugiat viverra. Duis a arcu laoreet, rhoncus libero imperdiet, placerat velit. Vestibulum euismod mi et ornare sodales. Donec efficitur mattis blandit. Proin in massa elit. Praesent malesuada iaculis nisl, a venenatis dui. Nullam venenatis tincidunt placerat. Suspendisse egestas urna a aliquet pretium.</p>
        
            <p>Curabitur ullamcorper mollis lobortis. Integer a scelerisque turpis, sed dictum lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam quis placerat sem. Suspendisse vulputate, leo ac sollicitudin lobortis, dui dui blandit justo, ut molestie justo sem in ipsum. Vestibulum convallis ex ac est tristique tincidunt. Vivamus dui dui, viverra et urna vitae, aliquam facilisis erat. Nam lorem nibh, elementum semper commodo at, fermentum quis justo. Donec finibus sapien eget scelerisque rhoncus. Nullam at nisi sed mi congue vestibulum. Vivamus nec scelerisque orci, vel fringilla nisi. Sed dictum, leo in consectetur porttitor, quam nibh aliquet nisi, in pulvinar sapien ante id dui. Aliquam massa nisl, auctor eget nisl in, faucibus gravida lectus. Nullam mattis orci at turpis finibus egestas. Nam vitae lorem accumsan, tempus lectus vitae, rutrum diam. Integer pulvinar placerat magna aliquam scelerisque.</p>
        
            <p>Duis consectetur magna velit, nec porttitor velit fermentum pulvinar. Duis varius justo eu varius pellentesque. Curabitur aliquet velit mauris, quis aliquam leo pharetra in. Integer rhoncus ut dui in rhoncus. Maecenas nec libero neque. Duis ac lacus at justo ullamcorper efficitur. Praesent ornare urna ante. Aliquam dapibus posuere nisl sit amet vestibulum. Quisque dapibus iaculis justo non egestas. Curabitur interdum semper justo, eget condimentum orci bibendum nec.</p>
        
            <p>Vivamus pharetra massa non risus sollicitudin iaculis. Donec semper finibus hendrerit. Nam ut volutpat mauris, sit amet molestie nisi. Curabitur ac nisi urna. Nulla id turpis nec dui ornare tempor in ac justo. Cras quis cursus nisi. Donec vel pellentesque ante. Maecenas non nisi risus. Praesent posuere scelerisque varius. Cras vitae mollis quam. Etiam ut dui massa. Etiam mattis aliquam enim, eget facilisis erat elementum eu. Proin et lorem volutpat, pretium massa a, venenatis mi. Suspendisse quam orci, feugiat eget suscipit ac, vehicula a ante. Nam ut mauris at tortor cursus interdum.</p>
        
            <p>Nullam hendrerit tincidunt risus. Sed nec nibh vel nibh euismod lobortis sed a sem. Nulla nec libero dolor. Pellentesque non sodales orci. Phasellus odio ligula, varius non orci ac, fermentum pulvinar nibh. Aliquam erat volutpat. Curabitur vehicula varius porttitor. Integer purus sapien, placerat sodales eros et, interdum vestibulum sem. Duis faucibus felis vitae augue ultricies, aliquet tempor orci vestibulum. Duis eu justo mi. Praesent feugiat, ante interdum fringilla auctor, ex nibh aliquet neque, sed feugiat tellus tortor non dui. Suspendisse potenti. Aliquam fringilla sapien felis, at faucibus justo interdum congue.</p>
        
        
            </div>
        </div>
    </div>
</body>
</html>