<div class="top-bar grid-x grid-padding-x">
    <div class="cell medium-2 sitename">
        <button data-toggle="sidebar" class="menu-icon hide-for-medium"></button>
        <a>the WEJDES collective</a>
    </div>
    <div class="cell medium-9 navbar-search">
        <input class="app-dashboard-search" type="search" placeholder="Search">
    </div>
    <div class="cell medium-1 sign-out">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                Sign Out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    </div>
</div>