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
        <div class="top-bar grid-x grid-padding-x">
            <div class="cell medium-2 sitename">
                <button data-toggle="sidebar" class="menu-icon hide-for-medium"></button>
                <a>the WEJDES collective</a>
            </div>
            <div class="cell medium-9 navbar-search">
                <input class="app-dashboard-search" type="search" placeholder="Search">
            </div>
            <div class="cell medium-1 sign-out">
                <a href="{{route('logout')}}">Sign Out</a>
            </div>
        </div>
        <div class="content grid-x grid-padding-x">
            
            <div class="small-12 grid-x">
            <div id="sidebar" class="cell medium-2 reveal-for-medium">

                <ul class="vertical dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="{{route('admin')}}" @if($active == 'dash') class="is-active" @endif>
                            <i class="fa large fa-home"></i><span class="app-dashboard-sidebar-text">&emsp;Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.profile')}}" @if($active == 'user' || $active == 'user-settings'|| $active == 'user-social') class="is-active" @endif>
                            <i class="large fa fa-user-circle"></i><span class="app-dashboard-sidebar-text">&emsp;User</span>
                        </a>
                        <ul class="vertical menu nested">
                                <li><a class="nav-link" href="{{ route('admin.profile.settings')}}" @if($active == 'user-settings') class="is-active" @endif> User Settings</a></li>
                                <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif> Social Services</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.posts')}}" @if($active == 'posts') class="is-active" @endif>
                            <i class="large fa fa-file"></i><span class="app-dashboard-sidebar-text">&emsp;Posts</span>
                        </a>
                        <ul class="vertical menu nested">
                                <li><a class="nav-link" href="{{ route('admin.posts.add')}}" @if($active == 'user-settings') class="is-active" @endif><i class="fa fa-plus-circle"></i>&emsp; New Post</a></li>
                                <li><a class="nav-link" href="{{ route('admin.posts.categories')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-folder-open"></i>&emsp; Categories</a></li>
                                <li><a class="nav-link" href="{{ route('admin.posts.categories')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-tags"></i>&emsp; Tags</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.comments')}}" @if($active == 'comments') class="is-active" @endif>
                            <i class="large fa fa-comments"></i><span class="app-dashboard-sidebar-text">&emsp;Comments</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.newsletter')}}" @if($active == 'newsletter') class="is-active" @endif>
                            <i class="large fa fa-users"></i><span class="app-dashboard-sidebar-text">&emsp;Newsletter</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.settings')}}" @if($active == 'settings') class="is-active" @endif>
                            <i class="large fa fa-cog"></i><span class="app-dashboard-sidebar-text">&emsp;Settings</span>
                        </a>
                        <ul class="vertical menu nested">
                                <li><a class="nav-link" href="{{ route('admin.profile.settings')}}" @if($active == 'user-settings') class="is-active" @endif><i class="fa fa-cogs"></i>&emsp;General</a></li>
                                <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-bars"></i>&emsp;Menu</a></li>
                                <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-user-alt"></i>&emsp;Admins</a>
                                    <ul class="vertical menu nested">
                                        <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-plus-circle"></i>&emsp;New Admin</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif><i class="fa fa-share-alt"></i>&emsp;Sharing</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <main role="main" class="content-area medium-10 cell">
                @yield('content')
            </main>
        </div>
        </div>
    </div>
</body>
</html>