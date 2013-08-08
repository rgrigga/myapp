@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

@section('nav')
<!-- @ parent -->
@include('site.partials.nav-top')
@stop

{{-- Content --}}
@section('main')
<h1>
    {{{$company->brand}}}
</h1>

<style>
    .page-header{
        padding-top:+40px;
        color:white;
    }

    .thumbnail img{
/*        max-width: 200px;
        max-height: 200px;*/
    }
    .navbar a{

        padding: 3px;
        color:orange;
    }
    
    .navbar a:hover, .navbar a:focus{
        text-decoration: none;
        color:red;
        /*font-size: 1.2em;*/
    }

    @media screen and (max-width: 779px) {
        .page-header{
            padding: 10px;
        }
    }
    .featurette{

    }

</style>

<div class="page-header">
    <div class="featurette">
        <h3>Public</h3>
        <p>These posts have tag "public" and are visible to anyone.  They can be weaved into other parts of the site, marketing materials, etc.</p>
        <p>Posts that do NOT have a 'public' tag are considered 'private' or 'draft'.</p>
        <p>You can also manage other group permissions and roles (manager, salesperson, customer, partner)</p>
    </div>

	<ul class="thumbnails">
        
        @foreach($posts as $post)
        <li class="span3">
            <div class="thumbnail">
                <!-- <img src="holder.js/200x200"> -->
                <img class="thumby" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
                <div class="caption">
                    <h3>{{$post->title}}</h3>
                    <p>{{Str::limit($post->meta_description,200,'...')}}</p>
                    <p align="center"><a href="{{{URL::to('/blog/'.$post->slug)}}}" class="btn btn-primary btn-block">Open Full View</a></p>
                </div>
                <!-- <img src="{{$post->image}}" alt=""> -->            
            </div>
        </li>
        @endforeach
    </ul>
</div>


<form method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <label for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
        <input tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">

        <label for="password">
            {{ Lang::get('confide::confide.password') }}
            <small>
                <a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
            </small>
        </label>
        <input tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">

        <label for="remember" class="checkbox">{{ Lang::get('confide::confide.login.remember') }}
            <input type="hidden" name="remember" value="0">
            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
        </label>

        @if ( Session::get('error') )
        <div class="alert alert-error">{{ Session::get('error') }}</div>
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        @if ( Session::get('info') )
        <div class="alert">{{ Session::get('info') }}</div>
        @endif

        <button tabindex="3" type="submit" class="btn btn-large btn-warning">{{ Lang::get('confide::confide.login.submit') }}</button>
    </fieldset>
</form>

<p>Not A Member?  Security and Privacy are of the utmost importance.  More about that later...</p>

        <a class="btn btn-large btn-primary" href="{{{ URL::to('user/create') }}}">Sign Up</a>
        <p>No spam, etc.</p>
<!-- // Popup form here?-->

@stop
