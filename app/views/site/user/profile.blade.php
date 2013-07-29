@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('main')
<div class="page-header">
	<h1>User Profile</h1>
    <h2>View</h2>
    <h3>Settings</h3>

<?php
function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

echo getRealIpAddr();

?>
<a href="http://stackoverflow.com/questions/55768/how-do-i-find-a-users-ip-address-with-php">source</a>
{{-- var_dump($user) --}}
    <img src="{{$user->img}}" alt="user image">
</div>

    <div class="span4 well">
    <div class="row">
    <div class="span1"><a href="http://critterapp.pagodabox.com/others/admin" class="thumbnail"><img src="http://critterapp.pagodabox.com/img/user.jpg" alt=""></a></div>
    <div class="span3">
    <p>admin</p>
    <p><strong>First Last Name</strong></p>
    <span class=" badge badge-warning">8 messages</span> <span class=" badge badge-info">15 followers</span>
    </div>
    </div>
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
    <ul class="thumbnails">
        <li class="thumbnail">Photo</li>
        <li>Avatar</li>
        <li>Sync with Facebook</li>
        <li>Sync with Twitter</li>
        <li>sync with LinkedIn</li>
    </ul>
</div>


@stop
