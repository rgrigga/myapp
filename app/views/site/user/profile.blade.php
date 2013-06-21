@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>User Profile</h1>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Signed Up</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{{$user->id}}}</td>
        <td>{{{$user->username}}}</td>
        <td>{{{$user->joined()}}}</td>
    </tr>
    </tbody>
</table>

<div id="usertodo" class="todo">
    <h2>To do:</h2>
    <ul>
        <li>Photo</li>
        <li>Gravatar</li>
        <li>Sync with Facebook</li>
        <li>Sync with Twitter</li>
        <li>sync with LinkedIn</li>

    </ul>
</div>
@stop
