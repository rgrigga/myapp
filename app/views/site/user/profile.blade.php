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
    <img src="{{$user->image}}" alt="user image">
</div>

    <div class="span4 well">
      <div class="row">
        <!-- http://critterapp.pagodabox.com/others/admin -->
        <div class="span1">
          <a href="image" class="thumbnail"><img src="http://critterapp.pagodabox.com/img/user.jpg" alt=""></a>
          <span class=" badge badge-warning">{{{$user->joined()}}}</span>
          <span class=" badge badge-info">
            @if($user->confirmed)
            {{'confirmed'}}
            @else
            {{'not confirmed'}}
            @endif
          </span> 
        </div>
        <div class="span3">
          <!-- <p>admin</p> -->
          <p><strong>{{{$user->username}}}</strong></p>
          <p>
            Roles: 
            @foreach ($user->roles as $u)
              <span>{{ $u->name }} </span>
            @endforeach
          </p>       
          <p>{{{$user->email}}}</p>
          {{--$user->permissions--}}


          {{{$user->img}}}
          <!-- <p>$user->password</p> -->
          
          <!--  -->

        </div>
      </div>
    </div>
    <div class="span2 well">
      <a href="facebook">Facebook</a>
    </div>
    <div class="span2 well">
      <a href="twitter">Twitter</a>
    </div>
    <div class="span2 well">
      <a href="google">Google</a>
    </div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Username</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{{$user->id}}}</td>
        <td>{{{$user->username}}}</td>

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

@section('footer')
<!-- http://laravelbook.github.io/ardent/#validation -->
<!-- https://github.com/Zizaco/entrust#concepts -->
<?php $env=App::environment(); ?>

<!-- // @ if($user->ability(array('admin',$env),'*')) -->
@if($user->ability('admin','*'))
<pre class="prettyprint">
{{var_dump($user)}}  
</pre>
@else
You are not {{$env}}.
@endif

@stop