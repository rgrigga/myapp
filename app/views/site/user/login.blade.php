@extends('layouts.bootstrap3')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

@section('nav')
<!-- @ parent -->
@include('site.partials.nav-top-bs3')
@stop

{{-- Content --}}
@section('main')
<h1>
    {{{$company->brand}}}
</h1>


<div class="jumbotron">
    <div class="container">

        <form method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8" role="form" class="form-horizontal">

            <fieldset>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <legend>Log In</legend>
                <div class="form-group">
                    <label for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
                    <input class="form-control" tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">
                </div>

                <div class="form-group">
                <label for="password">
                    {{ Lang::get('confide::confide.password') }}
                    <small>
                        <a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
                    </small>
                </label>
                <input class="form-control" tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">
                </div>

                <div class="checkbox">
                    <label for="remember" class="checkbox">{{ Lang::get('confide::confide.login.remember') }}
                        <input type="hidden" name="remember" id="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </div>

                @if ( Session::get('error') )
                <div class="alert alert-error">{{ Session::get('error') }}</div>
                @endif

                @if ( Session::get('notice') )
                <div class="alert">{{ Session::get('notice') }}</div>
                @endif

                @if ( Session::get('info') )
                <div class="alert">{{ Session::get('info') }}</div>
                @endif

                <button tabindex="3" type="submit" class="btn btn-default">{{ Lang::get('confide::confide.login.submit') }}</button>
            </fieldset>
        </form>
    </div>
    <!-- container -->
</div>
<!-- /.jumbotron -->

<div class="jumbotron">
    <p>Not A Member?  Security and Privacy are of the utmost importance.  More about that later...</p>

    <a class="btn btn-large btn-primary" href="{{{ URL::to('user/create') }}}">Sign Up</a>
    <p>No spam, etc.</p>
<!-- // Popup form here?-->
</div>
<!-- jumbotron -->

@stop
