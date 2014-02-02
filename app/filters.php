<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{

	App::singleton('company', function($app)
	{
		$brand=strtolower(Config::get('company.brand'));
	    $company = Company::where('brand','like','%'.$brand.'%')->first();

	    if(!$company){
	    	trigger_error("Company is not set");
	        Session::flash("error","No company for ".$brand.".<br>".link_to_route('admin.companies'));
	    	$brand="gristech";
	    	$company = Company::where('brand','like','%'.$brand.'%')->first();
            return ("Company does not exist. Consider <a href=".URL::to("admin/companies").">admin/companies</a>");
	    }
		View::share('company',$company);

	    return $company;

	});

	$company=App::make('company');
	View::share('company',$company);
	Session::push('alerts',['warning'=>"Company was set to $company->brand "]);

	// Session::flash('info','Company is set to '.$company->brand);
	if (Auth::guest()) {
		Session::push('user.page',Request::path());
		Session::push('alerts',['info'=>"message You are NOT logged in."]);
    }
	
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
	see confide docs https://github.com/zizaco/confide
*/

Route::filter('auth', function()
{
	if (Auth::guest()) {
        Session::put('loginRedirect', Request::url());
        return Redirect::to('user/login/');
    }
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('user/login/');
});

/*
|--------------------------------------------------------------------------
| Role Permissions
|--------------------------------------------------------------------------
|
| Access filters based on roles.
|
*/

// Check for role on all admin routes
Entrust::routeNeedsRole( 'admin*', array('admin'));
Entrust::routeNeedsRole( 'companies*', array('admin'));
Entrust::routeNeedsRole( 'buckeye/*', array('admin','buckeye'));
/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::getToken() != Input::get('csrf_token') &&  Session::getToken() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});