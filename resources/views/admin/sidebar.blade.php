
<ul id="admin-sidebar" class="vertical menu accordion-menu" data-accordion-menu data-submenu-toggle="true">
    <li class="show-or-hide show">
        <button id="close-sidebar" data-toggle="sidebar" class="sidebar-close show-for-medium" aria-label="Close menu" type="button">
            <i class="fa fa-eye-slash" title="Hide sidebar"></i>
        </button>
        <button id="open-sidebar" data-toggle="sidebar"  class="sidebar-open show-for-medium" aria-label="Close menu" type="button">
            <i class="fa fa-eye" title="Show sidebar"></i>
        </button>
    </li>
    <li @if($active == 'dash') class="current" @endif>
        <a href="{{route('admin')}}">
            <i class="fa large fa-home"></i><span class="sidebar-text">Dashboard</span>
        </a>
    </li>
    <li @if($active == 'user' || $active == 'user-settings'|| $active == 'user-social') class="current" @endif>
        <a href="{{route('admin.profile')}}">
            <i class="large fa fa-user-circle"></i><span class="sidebar-text">User</span>
        </a>
        <ul class="vertical menu nested">
            <li @if($active == 'user-settings') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.settings')}}">
                    <i class="fa fa-wrench"></i>&emsp;User Settings
                </a>
            </li>
            <li @if($active == 'user-social') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.social')}}">
                    <i class="fa fa-share-alt"></i>&emsp;Social Services
                </a>
            </li>
        </ul>
    </li>
    <li @if($active == 'posts' || $active == 'new-post'|| $active == 'post-categories'|| $active == 'post-tags') class="current" data-disable-hover @endif>
        <a href="{{route('admin.posts')}}" >
            <i class="large fa fa-file"></i><span class="sidebar-text">Posts</span>
        </a>
        <ul class="vertical menu nested">
                <li @if($active == 'new-post') class="current" @endif>
                    <a class="nav-link" href="{{ route('admin.posts.add')}}">
                        <i class="fa fa-plus-circle"></i>&emsp;New Post
                    </a>
                </li>
                <li @if($active == 'post-categories') class="current" @endif>
                    <a class="nav-link" href="{{ route('admin.posts.categories')}}">
                        <i class="fa fa-folder-open"></i>&emsp;Categories
                    </a>
                </li>
                <li @if($active == 'post-tags') class="current" @endif>
                    <a class="nav-link" href="{{ route('admin.posts.categories')}}">
                        <i class="fa fa-tags"></i>&emsp;Tags
                    </a>
                </li>
        </ul>
    </li>
    <li @if($active == 'comments') class="current" @endif>
        <a href="{{route('admin.comments')}}">
            <i class="large fa fa-comments"></i><span class="sidebar-text">Comments</span>
        </a>
    </li>
    <li @if($active == 'newsletter') class="current" @endif>
        <a href="{{route('admin.newsletter')}}">
            <i class="large fa fa-users"></i><span class="sidebar-text">Newsletter</span>
        </a>
    </li>
    <li @if($active == 'settings'|| $active == 'settings-general' || $active == 'settings-menu' || $active == 'settings-admin'|| $active == 'settings-new-admin'|| $active == 'settings-sharing') class="current" @endif>
        <a href="{{route('admin.settings')}}">
            <i class="large fa fa-cog"></i><span class="sidebar-text">Settings</span>
        </a>
        <ul class="vertical menu nested">
            <li @if($active == 'settings-general') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.settings')}}">
                    <i class="fa fa-cogs"></i>&emsp;General
                </a>
            </li>
            <li @if($active == 'settings-menu') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.social')}}">
                    <i class="fa fa-bars"></i>&emsp;Menu
                </a>
            </li>
            <li @if($active == 'settings-admin') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.social')}}">
                    <i class="fa fa-user-alt"></i>&emsp;Admins
                </a>
                <ul class="vertical menu nested">
                    <li @if($active == 'settings-new-admin') class="current" @endif>
                        <a class="nav-link" href="{{ route('admin.profile.social')}}">
                            <i class="fa fa-plus-circle"></i>&emsp;New Admin
                        </a>
                    </li>
                </ul>
            </li>
            <li @if($active == 'settings-sharing') class="current" @endif>
                <a class="nav-link" href="{{ route('admin.profile.social')}}">
                    <i class="fa fa-share-alt"></i>&emsp;Sharing
                </a>
            </li>
        </ul>
    </li>
</ul>