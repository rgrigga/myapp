<?php
class VivioController extends BaseController {

	protected $layout = 'site.viviosoft.layout';

	protected $post;
	protected $user;
	protected $company;

	public function __construct(Post $post, User $user, Company $company)
    {
        parent::__construct();
        
		$company = New Company;
	    $company = $company->where('brand','like','viviosoft')->first();

        // $company = App::make('company');
		$this->company = $company;

        $this->post = $post;
        $this->user = $user;
    
    	View::share('pages',$this->pageArray());
    	View::share('company',$this->company);
    }

    private function pageArray($path=""){

    	$ignore = array('analytics','layout','index');

		$brand=strtolower($this->company->brand);
    	if(!$path){
			$minipath='site/'.$brand.'/pages/';
			$path='../app/views/'.$minipath;
		}
		
		$minipath=str_replace('../app/views/', "", $path);

		$mypages=array();

	    foreach (glob($path."*.blade.php") as $filename) {
	        $filename=str_replace($path, "", $filename);
	        $filename=str_replace(".blade.php", "", $filename);
	    
	    	if(!in_array($filename, $ignore)){
	        	array_push($mypages,$filename);
	    	}
	    }

	    if(empty($mypages)){
	    	// die('man');
	    	$msg="$path is an empty directory.<br>";
			Session::flash('error', $msg);
			return false;
	    }
	    return $mypages;
    }

    public function getIndex(){
    	$pages=$this->pageArray();
    	$this->layout->content = View::make('site.viviosoft.index');
    	// ->with(compact('pages'));
    }

    public function getDemo($tag="",$path=""){
		$brand=strtolower($this->company->brand);
    	if(!$path){
			$minipath='site/'.$brand.'/demo/';
			$path='../app/views/'.$minipath;		
		}
		$mypages=$this->pageArray($path);
		if(!$tag){
			return View::make('site.viviosoft.demo.index')
			->with('pages',$mypages);
		}
    	return View::make($minipath.$tag);
    }

    public function getPage($tag="",$path=""){

		$brand=strtolower($this->company->brand);
		// $brand="viviosoft";
		
		if(!$path){
			$minipath='site/'.$brand.'/pages/';
			$path='../app/views/'.$minipath;		
		}

		//path should now be like:
		//..app/views/site/gristech/
		// die(var_dump($path));

		// return $path;
		// return View::make('site.viviosoft.'.$page);
		$minipath=str_replace('../app/views/', "", $path);
	    
	    $mypages = $this->pageArray();
	    // die(var_dump($mypages));

	    if(in_array($tag, $mypages)){

			// $posts=$this->post_public();
			// View::share('count',count($posts));		

	    	$this->layout->content = View::make($minipath.$tag)
	    	// ->with(compact('posts'))
	    	// ->nest('carousel','site.posts.carousel')

	    	//this is now handled in the template:
  			// ->nest('analytics','site.'.strtolower($this->company->brand).'.analytics')
	    	;
	    	return;
	    }
	    $msg="<br>Could not find '$tag' in $path.<br>";
	    $msg.=print_r($mypages);
		// Session::flash('info', $msg);
		return $msg;
	    // return("No page in $path by the name $tag!");
    }
}