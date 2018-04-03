@extends('layouts.admin', ['active' => $active])

@section('content')
<h3>Profile Area</h3>
<div class="cell submenu">
    <ul class="menu">
            <li><a class="nav-link" href="{{ route('admin.profile.settings')}}" @if($active == 'user-settings') class="is-active" @endif> User Settings</a></li>
            <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif> Social Services</a></li>
    </ul>
</div>

@endsection