<?php
// try{
// 	// trigger_error("ERROR");
// 	// throw new Exception("Error Processing Request", 1);
	
// }
// catch(\Exception $e){
// 	print_r($e->getMessage());
// }
/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application;



/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name or HTTP host that matches a
| given environment, then we will automatically detect it for you.
|
*/

// http://programmers.stackexchange.com/questions/40373/so-singletons-are-bad-then-what

//insert image button
//redactor

$env = $app->detectEnvironment(array(

//this is case-sensitive
	// 'advantage' => array('domain'=>'advantage.gristech.com'),

	// 'sewcute' => array('domain'=>'sewcute.gristech.com'),
	// 'sewcute' => array('domain'=>'sewcute.dev'),

	// 'megacorp' => array('domain' => 'megacorp.dev'),

	// 'advantage' => array('prefix'=>'advantage'),
	// 'local' => array('Grisbuntu'),
	// 'megacorp' => 
	'dev' => array('Grisbuntu'),
	
	// 'buckeye' => array('domain' => 'buckeyemower.com'),

	// 'gristech' => array('domain' => 'myapp.dev'),
	// 'gristech' => array('domain' => 'myapp.gristech.com'),

));


/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/


try{
$app->bindInstallPaths(require __DIR__.'/paths.php');
}
catch(\Exception $e){
	print_r($e->getMessage());
}
/*
|--------------------------------------------------------------------------
| Load The Application
|--------------------------------------------------------------------------
|
| Here we will load the Illuminate application. We'll keep this is in a
| separate location so we can isolate the creation of an application
| from the actual running of the application with a given request.
|
*/

$framework = $app['path.base'];
// print_r($framework);

// try{
	require $framework.'/vendor/laravel/framework/src/Illuminate/Foundation/start.php';
// }
// catch(\Exception $e){
	// print_r($framework);
	
// }

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

// broken:
// $env=App::environment();
// $company = New Company;
// $company = $company->where('brand','like',$env)->first();
// dd($company);
// // $brand=strtolower($company->brand);
// View::share('company',$company);

return $app;
