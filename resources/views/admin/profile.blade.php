@extends('layouts.admin', ['active' => $active])

@section('content')
<div class="cell grid-x">
    <div class="cell">
        <h3>{{ $user->name }}'s Profile</h3>
        <div class="submenu">
            <ul class="menu">
                    <li><a class="nav-link" href="{{ route('admin.profile.settings')}}" @if($active == 'user-settings') class="is-active" @endif> User Settings</a></li>
                    <li><a class="nav-link" href="{{ route('admin.profile.social')}}" @if($active == 'user-social') class="is-active" @endif> Social Services</a></li>
            </ul>
        </div>
    </div>
    <div class="cell">
    {!! Form::open(['action' => 'UsersController@update', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'file' => true]) !!}
        <div class="cell small-12">
            <fieldset class="fieldset medium-6">
                <legend>Profile Image</legend>
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <label for="exampleFileUpload" class="button">Upload File</label>
                <input type="file" id="exampleFileUpload" class="show-for-sr">
            </fieldset>
        </div>
        <div class="cell">
            <input id="commissions" type="checkbox" name="commissions"><label for="commissions">Accept Commissions?</label></input>
        </div>

        <div class="cell">
            <fieldset class="fieldset">
                <legend>Short Bio</legend>
                <p class="help-text">This will be shown at the end of your posts</p>
                {{ Form::textarea('short_bio') }}
            </fieldset>
        </div>
        <div class="cell">
            <fieldset class="fieldset">
                <legend>Long Bio</legend>
                <p class="help-text">This will be your 'About Me' page</p>
                {{ Form::textarea('body', '', ['id' => 'article-ckeditor']) }}
            </fieldset>
        </div>
        {{ Form::submit('Save', ['class' => 'button']) }}
    {!! Form::close() !!}
    </div>
</div> 

@endsection