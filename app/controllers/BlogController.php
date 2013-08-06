<?php

// http://flatuicolors.com/

//http://www.coderanch.com/t/443740/patterns/UML-multiple-inheritance-domain-model

// http://www.vogella.com/articles/Git/article.html
// http://www.vogella.com/articles/Git/article.html#gitpushbranch

//  In general using the stash command should be the exception in using Git. Typically you would create new branches for new features and switch between branches. You can also commit frequently in your local Git repository and use interactive rebase to combine these commits later before pushing them to another Git repository.
// Tip

// You can avoid using the git stash command. In this case you commit the changes you want to put aside and use the git commit --amend command to change the commit later. If you use the approach of creating a commit, you typically put a marker in the commit message to mark it as a draft, e.g. "[DRAFT] implement feature x".

// http://gitref.org/branching/



// class PostBuilder extends BaseController{

// 	function 

// }

class SearchComposer{
    public function compose($view){
        $view->with('searchbar','this data passes through');
    }
}

class BlogController extends BaseController {

	// protected $layout = 'site.layouts.default';

    /**
     * Tags Model
     * Tost Model
     * @var Tags
     */
    protected $tags;
 
    /**
     * Post Model
     * @var Post
     */
    protected $post;

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Company Model
     * @var Company
     */
    protected  $company;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(Post $post, User $user, Company $company)
    {
        parent::__construct();

        // $env=App::environment();
        // die(var_dump($company));
        // $company = App::make('company');
    	// die(var_dump($company));

        $this->post = $post;//Think of these as basically empty objects.
        $this->user = $user;
        $this->company = $company;
		
		$env=App::environment();
		//recycling this variable
		$company = $this->company->where('brand','like',$env)->first();
		$this->company=$company;


        // $this->todo = array('hello','bar','make list');
    // $c=App::make('company');

        // View::share('posts',$posts);

        View::share('company',$this->company);
        View::share('posts',$this->post);
        View::share('heading','Posts');
        View::share('alltags',$this->getAllTags());
// $heading="Posts";
		// ->with(compact('heading'))
		
		// View::composer('*','SearchComposer');
		// View::composer('index',function($view){
		// 	$view->with('postcount',count($posts)
		// });

        // ->with(compact($posts));
    }

	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function show($tag="")
	{
		return self::getIndex('$tag');
	}

 //    public function buckeyeIndex($tag=""){
 //    	// $company=  Company::where('brand',"LIKE",'buckeye')->first();
	// 	return $this->getIndex($company,$tag);
	// }

// process a many to many relationship amongst tags

	private function home(){
		return View::make('site.'.strtolower($this->company->brand).'.home');
	}

// Route::get('search/{tag}','BlogController@getSearch');

	public function getSearch(){

		$tag=Input::get('tag');
		// die(var_dump($tag));
// return App::abort('404','Controller: I found no $tag');
	}

	public function postSearch(){
		$tag=Input::get('tag');
		// die(var_dump($tag));
		return $this->search($tag);
	}

	public function getRecent(){
		$posts = $this->post
			->where('meta_keywords', 'LIKE', '%'.$this->company->brand.'%')
	        ->where('meta_keywords','LIKE','%public%')
	        ->orderBy('created_at', 'DESC')
	        // ->where('content','LIKE','%'.$tag.'%')
			// ->get()
			->paginate(5);

	// $posts = $this->post->orderBy('created_at', 'DESC')->paginate(5);


		// die(var_dump(count($posts)));
		return $posts;
		// View::share('posts',$posts);
	}

	public function search($tag=""){

		// $this->post=$posts;

		$view="";
		// $this->init();
		// var_dump($this->company);
		// if(!$tag){
		// 	return View::make()
		// }
// die(var_dump($tag));
		// BuilderClass
		View::share('tag',$tag);
		if($tag){
			

			$view.=$this->getPage($tag);
			$view.=$this->companyPages($tag);
			$view.=$this->stdpages($tag);

			$posts=$this->searchcontent($tag);
			// die(var_dump(count($posts)));
			if($posts){
				
				$count=$this->wordcount($posts,$tag);
				View::share('count',$count);
				// View::share('postlist','site.partials.postlist');
				$view.=
					View::make('site.partials.postlist')
					->with('posts',$posts)
					->with(compact('count'))
					;
					// die(var_dump($view));
			}
			// $view.=$this->searchcontent($tag);

			if(!$view){
				$view="I searched for '$tag' but found Nuthin.";
				$posts=$this->getRecent();
				View::share('posts',$posts);
				Session::flash('warning','Sorry, Charlie!  Google '.$tag.'!');
				// Session::flash('info','ERROR');
				// Session::flash('error','ERROR');
				// Session::flash('success','ERROR');
				// die(var_dump($view));
				// return App::abort('404','Shall I search for $tag ?');
			}
			else{
	// die(var_dump($view));

				Session::flash('success','I found a page for '.$tag.'!');
			    // return View::make('site.pages.search')
			    // return $view;
			    $posts=$this->getRecent();
			    // return View::make('')
				View::share('posts',$posts);
				// ->nest('results',$view)
				;
			}
		}
		// die("no tag");
		else{ //there is no tag
			$count=0;
			View::share('count',$count);
	
			$posts=$this->getRecent();
			View::share('posts',$posts);
			$view.=
					View::make('site.partials.postlist')
					->with('posts',$posts)
					;

			// $view.='site.partials.postlist';
							
		}
// die(var_dump(count($posts)));


		// View::share('results','site.partials.postlist');
		return View::make('site.pages.search')
	    	// ->with('message',"admin message")
			// ->nest('searchbar','site.partials.search')
			->with('results',$view)
			
			// ->with('heading','Posts')
			;

	}


	private function wordcount($posts,$tag){
		
		$mycount=0;

		// if(is_array($posts)){
			foreach ($posts as $post) {
				$mycount+=substr_count(strtolower($post->content), strtolower($tag));
				echo $mycount;
			}
		// }
		// else $mycount+=substr_count(strtolower($posts->content), strtolower($tag));
		return $mycount;
	}

	private function searchcontent($tag){
		// tag is a word or phrase
		// die(var_dump($tag));
		$posts=$this->post->where('content', 'like', '%'.$tag.'%')->get();
		// die(var_dump(count($posts)));
		// View::share('posts',$posts);

		// endforeach;
		// echo $mycount;

		return $posts;
	}

	private function companyPages($tag){
			$path='../app/views/company/';
			return $this->getPage($tag,$path);
	}

	private function stdpages($tag){
			// $path='../app/views/pages/';
			return $this->getPage($tag);
			//from default path, specified in the method

// 		    $mypages = array();
// 		    foreach (glob($path."*.blade.php") as $filename) {
// 		        $filename=str_replace($path, "", $filename);
// 		        $filename=str_replace(".blade.php", "", $filename);
// 		        array_push($mypages,$filename);
// 		        // echo "$filename" . "<br>";
// 		    }
// // die(var_dump($path,$mypages));
// 		    $msg="";
// 		    if(empty($mypages)){
// 		    	$msg.="Could not find any pages in $path.<br>";
// 				Session::flash('error', $msg);
// 				return false;
// 		    }
// 		    if(in_array($tag, $mypages)){
// 		    	return View::make('company.'.$tag);
// 		    }
// 		    else return false;
	}

	public function getPage($tag="",$path="")
	{
		// die(var_dump($this->company));
			
			$brand=strtolower($this->company->brand);

			if(!$path){
				$minipath='site/pages/';
				$path='../app/views/'.$minipath."/";
			}

			$minipath=str_replace('../app/views/', "", $path);
		    
		    $mypages = array();
		    foreach (glob($path."*.blade.php") as $filename) {
		        $filename=str_replace($path, "", $filename);
		        $filename=str_replace(".blade.php", "", $filename);
		        array_push($mypages,$filename);
		        // echo "$filename" . "<br>";
		    }

		    if(empty($mypages)){
		    	$msg="Could not find any pages in $path.<br>";
		    	// die(var_dump($msg,$path,$mypages));
				Session::flash('error', $msg);
				return false;
		    }
		    if(in_array($tag, $mypages)){
		    	$company=$this->company;
		    	return View::make($minipath.$tag);
		    	// return Redirect::to($tag);
		    	// die('found!');
		    	// return $this->show($tag,$path);
		    	// return View::make('site/'.$brand.'/pages/'.$tag)
		    	// ->with(compact($company));
		    	// ->with('company',$this->company)
		    	;
		    }
		    else return false;
	}

	public function advantage($tag=""){
		$this->company = $this->company->where('brand','like','advantage')->first();
		return $this->getIndex($tag);
	}

	public function buckeye($tag=""){
		$this->company = $this->company->where('brand','like','buckeye')->first();
		return $this->getIndex($tag);
	}



	private function post_public($tag=""){
		$posts=$this->post
			->where('meta_keywords', 'LIKE', '%'.$this->company->brand.'%')
			->where('meta_keywords','LIKE','%public%')
	        ->where('content','LIKE','%'.$tag.'%')
	        ->paginate(5);
	        View::share('posts',$posts);
	        return $posts;
	}
	private function post_company($tag){
		$posts=$this->post
			->where('meta_keywords', 'LIKE', '%'.$this->company->brand.'%')
			// ->where('meta_keywords','LIKE','%public%')
	        // ->where('content','LIKE','%'.$tag.'%')
	        ->paginate(5);
	        View::share('posts',$posts);
	}
	private function post_admin($tag){
		$posts=$this->post
			->get()
			// ->where('meta_keywords', 'LIKE', '%'.$this->company->brand.'%')
			// ->where('meta_keywords','LIKE','%public%')
	        // ->where('content','LIKE','%'.$tag.'%')
	        ->paginate(5);
	        View::share('posts',$posts);
	}

	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex($tag="")
	{
		
		// if auth admin, show all
		// die(var_dump(Auth::user('fail')));

		// if auth company, show company
		
		// else auth guest, show public
// else{
// 	die('fail');
// }
/**
 *	Here's the general idea.
 *	Check the input to see if it's a company.  If it is, return the company homepage.
 * 	next, check to see if it's a standard company view.  If it is, return that view.
 *	Next, check to see if a page exists in the company directory.  If it is, retun that.
 *	Next, check to see if there is a post by this name.  If there is, return that.
 *  Check tags- see if there is are posts with this tag...
 *  Finally, return a 404
 *
*/
		// echo ($this->stdpages($tag));
		$mycompany=$this->company;
		// var_dump($mycompany);
		// echo ($this->stdpages($tag));
		$env=App::environment();
		$msg="";

	// singleton versus dependency injection?
    // $company=App::make('company');
		if($tag){
			View::share('tag',strtoupper($tag));
			$company = $this->company->where('brand','like',$tag)->first();
			if(empty($company)){
				// die("company not found - (BlogController getIndex)");
				$company = $this->company->where('brand','like','gristech')->first();
			}
			// $company=$this->company;

// This little block handles the pages.  
// Change the default director in the getPage method. otherwise,
// this sends back the page if it exists in the specified directory.

				$mypage=$this->getPage($tag);
				if($mypage){
					return View::make('site.pages.'.$tag)
				    	->with(compact('company'))
					// return $mypage
					;
				}

/////////////// TAGS AND POSTS

			$posttitle='%'.$tag.'%';
			$posts = $this->post
				->where('meta_keywords', 'LIKE', '%'.$company->brand.'%')
		        ->where('meta_keywords','LIKE','%public%')
				->where('title', 'LIKE', "$posttitle")
				->orWhere('meta_keywords','LIKE', "$posttitle")
		        
		        // ->where('content','LIKE','%'.$tag.'%')
				->paginate(5);

			// $pages = 					
			// die(var_dump(count($posts)));
			$count=count($posts);
			View::share('count',$count);

			if ($count===0) {

				$posts = $this->post
					->where('meta_keywords', 'LIKE', '%'.$company->brand.'%')
			        ->where('meta_keywords','LIKE','%public%')
			        // ->where('content','LIKE','%'.$tag.'%')
					// ->get()
					->paginate(5);

				// die(var_dump(count($posts)));
				View::share('posts',$posts);

				$tags=array();		
				foreach ($posts as $post) {
					foreach ($post->tags() as $mytag) {
						if(!in_array($mytag, $tags)){
							array_push($tags, trim($mytag));
						}
					}
				}
				$tags=array_unique($tags);


				// return $this->getPage();

				// Session::flash('message', 'Sorry, I couldn\'t find anything with tag matching <strong>'.$tag.'</strong>');
					

				//SEARCH

				// $count=count($posts);
				// View::share('count',$count);
				return View::make('site/blog/tags')
						// ->nest('index','site.blog.index')
						->nest('search','site.partials.search')
						->nest('carousel','site.partials.carousel')
						->with(compact('company'))
						->with(compact('tags'))
						->with(compact('alltags'))
						// ->with(compact('posts'))

						;
					// die('posts not found');
					// no post with this title
					// continue
			}
						
			if($count===1){
				// die("found1");
				$post=$this->post->first();
				// Get this post comments
				$comments = $post->comments()->orderBy('created_at', 'ASC')->get();

		        // Get current user and check permission
		        $user = $this->user->currentUser();
		        $canComment = false;
		        if(!empty($user)) {
		            $canComment = $user->can('post_comment');
		        }
				
				return View::make('site/blog/view_post', 
				compact('company','post', 'comments', 'canComment'));

				return $this->getView($tag);
				// return $this->getView($tag);
				// return View::make('site.blog.view_post')
				// ->with(compact('company'))
				// ->with('post',$this->post->first())
				// ;
			}

			//else count > 1
			$this->post = $posts;
				// die(var_dump($this->post));
			// View::share('search','site.partials.search');
        // View::share('carousel','site.partials.carousel');
			//otherwise, count of posts is greater than 1

			$tags=array();		
			foreach ($posts as $post) {
				foreach ($post->tags() as $mytag) {
					if(!in_array($mytag, $tags)){
						array_push($tags, trim($mytag));
					}
				}
			}
			$tags=array_unique($tags);
			$str="";
			$str.="I found ".$count." posts.";


			// $c=View::make('site.partials.carousel')->with(compact('posts'));

			View::share('posts',$posts);
			// echo $c;
			// die();
			return View::make('site/blog/tags')
				->nest('search','site.partials.search')
				->nest('carousel','site.partials.carousel')
				->with(compact('company','tags','alltags','posts'))

				// ->with(compact('tags'))
				// ->with(compact('alltags'))
				// ->with(compact('posts'))
				->with('message',$str);
			//else there are many, so must be tag



		// return self::getByTag($tag);

		// die('blogcontroller index');
			// die(var_dump($company));

		}



		else{ //there is no tag
			//this is a request for the home page



			$company = $this->company->where('brand','like',$env)->first();
			View::share('company',$company);

// return $collection;
// die(var_dump($company));
// die(var_dump($company));			
			// die('there is no tag!');
			if(!is_null($company)){
				
				$posts=$this->post_public();
// die(var_dump($posts));

				$collection=array();
				foreach ($company->menus() as $tag){
					if(!$post=$this->post_public($tag)){
						array_push($collection, $post);
					}
				};

				// $posts=$this->post
				// ->where('meta_keywords', 'LIKE', $company->brand)
				// ->paginate(10);

				View::share('posts',$posts);
				// return Redirect::action('CompanyController@getIndex',$tag);
				return View::make('site.'.strtolower($company->brand).'.home')
				->nest('about','company.about')
				->nest('contact','site.partials.contact')
				->with(compact('collection'))
				// ->with(compact('posts'))
				;
			}
			else die ('Blog index Probelm ~617!');
		}

////////////////////////////////////////////////////
		/**
		junk








		**/
		
// die("BAM!");


	if($myview=$this->getView($tag)){
		return $myview;
	}
// die("bam");
	if($myview=$this->getPage($tag)){
		return $myview;
	}

	if($myview=$this->getTag($tag)){
		return $myview;
	}

	if($myview=$this->getHome($tag)){
		return View::make($brand.'.home');
	}
		//otherwise, the company exists.
		View::share('company',$company);
		//there must be a better way to check if company exists?

		$brand = strtolower($company->brand);
		$names = array();
		
		//This next block just checks to see if the company exists, it's dumb, should delete.
		// seems necessary for the next step
		// var_dump($companies->brand);
		$companies=$this->company->get();
		foreach ($companies as $c) {
			// var_dump($c->brand);
			$lbrand=strtolower($c->brand);
			array_push($names, $lbrand);
		}		

		if(in_array($brand, $names)){
			//We know that the company exists.

			if($tag==strtolower($brand)){

				//the request is "$company/$tag"

				// look for a public page within this company's posts

				// die(var_dump($company, $brand, $names, $tag));

// DRY
// private function fetchtags($brand=""){
// ???
// }


				// http://stackoverflow.com/questions/4361553/php-public-private-protected
				// $posts = $this->post->where('meta_keywords', 'LIKE', '%'.$brand.'%')->paginate(5);
				
				// $posts=$company->posts('public');
				// return $this->show();
				//check for post title
				//check for 
				// die(var_dump($posts));

				return View::make('site.'.$brand.'.home')
					->with(compact('company'))
					->with(compact('posts'));
			}

			//Here, the company exists, but the request is something different.

// 1. check standard views

			if($this->stdpages($tag)){
				// return View::make('site.'.$brand.'.home'.'#'.$tag)
				// 	->nest('about','company.about')
				// 	->with(compact('company'))
				// 	->with(compact('posts'));
				die('blog index 316');

			}

			// if($this->company->has($tag)){
			// 	return View::make('site.'.$brand.'.home')
			// 		->with(compact('company'))
			// 		->with(compact('posts'));
			// }
// 2. check company pages


			$path='../app/views/site/pages/';
		    // if($env=="local"){
		    // 	$path='../app/views/site/pages/';
		    // }
		    // else{
		    // 	$path='../app/views/site/'.$brand.'/';
		    // }

		    // if(1){
		    	
		    // }
// die(var_dump(file_exists($path.$tag)));
// die(var_dump($path));

		    $mypages = array();
		    foreach (glob($path."*.blade.php") as $filename) {
		        $filename=str_replace($path, "", $filename);
		        $filename=str_replace(".blade.php", "", $filename);
		        array_push($mypages,$filename);
		        // echo "$filename" . "<br>";
		    }
// die(var_dump($path,$mypages));
		    if(empty($mypages)){

		    	$msg="Could not find any pages in $path.<br>";
				Session::flash('message', $msg);
		    }

		    // if services.blade.php exists, it will be returned.  Otherwise, 
		    // we'll send the user to the search page.
	        if(in_array($tag, $mypages)){
	        	// die("BAM");

// die(var_dump($company));
	            return View::make('company.'.$tag)
	            // ->nest('nav','site.partials.nav-top-min',compact('company'))
	            ->with(compact('company'))
				->with(compact('tags'))
				->with(compact('alltags'))
				->with(compact('posts'));
	             // $view;
	        }
	        // elseif (condition) {
	        	# code...
	        // }
			// }
			




			// $brand = $company->brand;
			// $posts=$this->posts->where('has',array('tag'=>'$brand'))->paginate(10);


			// die("exist! ".var_dump($brand));


		// else{
		// //Here, the request is NOT gristech, buckeye, advantage, megacorp...
		// also, we do not have a company.  This should not happen.

		// //Loads the default company?
		// 	// $company = $this->company->findOrFail(3);

		// // die("does not exist! ".var_dump($brand));

		// }
		// die(var_dump($names));


		
		// die(var_dump($company));

		//prepare the alltags collection

		//alltags now contains the list of tags within this set of posts.
			
		//let's check to see if a page exists for this tag:

        // else{
        // 	die($tag." Not Found in ".$path);
        //     return Redirect::to('search/'.$tag);
        // }

		//check to see if the tag works
		//
		// http://stackoverflow.com/questions/13386774/using-eloquent-orm-in-laravel-to-perform-search-of-database-using-like
			if($tag){

				$strtag='%'.$tag.'%';
				$posts = $this->post->where('meta_keywords', 'LIKE', "$strtag")->paginate(5);					
				$tags=array();

				foreach ($posts as $post) {

					foreach ($post->tags() as $mytag) {
						if(!in_array($mytag, $tags)){
							array_push($tags, trim($mytag));
						}
					}

				}			
// http://php.net/manual/en/language.oop5.interfaces.php
			// http://forums.laravel.io/viewtopic.php?id=839
			// die(var_dump(count($posts)));

				if(count($posts)==0){




						// ->with('message','I couldn\'t find anything');
				}
				//else

			}

		// $posts = $this->post->where('tag','seo');
		// Get all the blog posts
			else{
				// $myphotos=self::listImages("screen/");
				// $photos=Paginator::make($myphotos,count($myphotos),10);
					// $myphotos->paginate(10);
				$posts = $this->post->where('meta_keywords', 'LIKE', "$tag")->paginate(5);
				// $posts = $this->post->orderBy('created_at', 'DESC')->paginate(5);
				// $data = array(compact('posts'),compact('tags'),compact('alltags'),$company);

				return View::make('site/blog/index')
					->with(compact('company'))
					->with(compact('tags'))
					->with(compact('alltags'))
					->with(compact('posts'));
			}
		// Show the page
		// return View::make('site/blog/index', compact('posts'));
		}
	}

	
	public function getAllTags(){
		$alltags=array();		

		foreach ($this->post->get() as $post) {

			foreach ($post->tags() as $mytag) {
				if(!in_array($mytag, $alltags)){
					array_push($alltags, trim($mytag));
				}
			}

		}
		return array_filter($alltags);
	}

	// private function getByTag($tag){
	// 	$title= '%'.$tag.'%';
	// 	$posts = $this->post->where('title', 'LIKE', "$title")->first();
	// 	if(!empty($posts)){
	// 		return getView($tag);
	// 	}
	// }


	public function getTags($tag="",$brand="")
	{
		// return Redirect::to("tags", "all");
		// 
    	// $company = App::make('company');
    // die(var_dump($company));
		// die(var_dump($tag,$brand));
		$alltags=$this->getAllTags();		

		// $company=Company::where('brand','like',$brand)->first();

		// foreach ($this->post->get() as $post) {

		// 	foreach ($post->tags() as $posttag) {
		// 		if(!in_array($posttag, $alltags)){
		// 			array_push($alltags, trim($posttag));
		// 		}
		// 	}
		// }
		//$alltags now contains all the tags

		// $posts = $this->post->where('tag','like');

		$posts = $this->post->orderBy('created_at', 'DESC')->paginate(5);

		$tags=array();
		foreach ($posts as $post) {

			foreach ($post->tags() as $mytag) {
				if(!in_array($mytag, $tags)){
					array_push($tags, trim($mytag));
				}
			}

		}

		// $tags=array_unique($tags);
		// die(var_dump($tags));
		// return var_dump($tags);
// View::make($view, $data);

		// return View::make('site/blog/tags', compact('posts'),compact('tags'));
		// $company=Company::where('brand','like',$brand)->first();
		// 
		    $company = App::make('company');
    // die(var_dump($company));
		return View::make('site/blog/tags')
				->with(compact('company'))
				->with(compact('tags'))
				->with(compact('alltags'))
				->with(compact('posts'))
				// ->with('message','I couldn\'t find anything')
				;
	}



	/**
	 * View a blog post.
	 *
	 * @param  string  $slug
	 * @return View
	 * @throws NotFoundHttpException
	 */
	public function getView($slug)
	{

		// die(var_dump($slug));
		$env=App::environment();
		$company = $this->company->where('brand','like',$env)->first();
		View::share('company',$company);
		// Get this blog post data
		$post = $this->post->where('slug', '=', $slug)->first();

		// Check if the blog post exists
		if (is_null($post))
		{

			// $post = $this->post->where('tags', 'has', $slug);
			
			// if (is_null($post))

			// {


			// If we ended up in here, it means that
			// a page or a blog post didn't exist.
			// So, this means that it is time for
			// 404 error page.
			


			return $post;
			// }
		}


		

		// Get this post comments
		$comments = $post->comments()->orderBy('created_at', 'ASC')->get();

        // Get current user and check permission
        $user = $this->user->currentUser();
        $canComment = false;
        if(!empty($user)) {
            $canComment = $user->can('post_comment');
        }
// die(var_dump($canComment));
		// Show the page
		return View::make('site/blog/view_post', compact('company','post', 'comments', 'canComment'));
	}

	/**
	 * View a blog post.
	 *
	 * @param  string  $slug
	 * @return Redirect
	 */
	public function postView($slug)
	{

        $user = $this->user->currentUser();
        $canComment = $user->can('post_comment');
		if ( ! $canComment)
		{
			return Redirect::to('blog/'.$slug . '#comments')->with('error', 'You need to be logged in to post comments!');
		}

		// Get this blog post data
		$post = $this->post->where('slug', '=', $slug)->first();

		// Declare the rules for the form validation
		$rules = array(
			'comment' => 'required|min:3'
		);

		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);

		// Check if the form validates with success
		if ($validator->passes())
		{
			// Save the comment
			$comment = new Comment;
			$comment->user_id = Auth::user()->id;
			$comment->content = Input::get('comment');

			// Was the comment saved with success?
			if($post->comments()->save($comment))
			{
				// Redirect to this blog post page
				return Redirect::to('blog/'.$slug . '#comments')->with('success', 'Your comment was added with success.');
			}

			// Redirect to this blog post page
			return Redirect::to('blog/'.$slug . '#comments')->with('error', 'There was a problem adding your comment, please try again.');
		}

		// Redirect to this blog post page
		return Redirect::to('blog/'.$slug)->withInput()->withErrors($validator);
	}

	//return posts where has tag

// <<<<<<< HEAD
	// public function catch_that_image() {
	// 	// global $post, $posts;
	// 	$first_img = '';
	// 	ob_start();
	// 	ob_end_clean();
	// 	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	// 	$first_img = $matches [1] [0];

	// 	if(empty($first_img)){ //Defines a default image
	// 	$first_img = "/img/thinker.png";
	// 	}
	// 	return $first_img;
	// }

//REDACTOR

// <script>$('#editor').redactor({ imageUpload: "/{{$post->id}}/postimage"});</script>

	// http://stackoverflow.com/questions/16736196/how-to-use-redactor-image-upload-in-laravel-4?rq=1

	public function postImage($blogId) 
	{

	    $path = base_path().'/public/assets/img/posts/' . (int)$blogId;

	    $image = Input::file('photo');

	    if (Input::hasFile('photo'))
	    {
	        $fileName = $file->getClientOriginalName();

	        $image->move($path,$fileName);
	        $image = new Image;
	        $image->name = $fileName.name;
	        $image->save();

	        // resizing an uploaded file
	        // Image::make($image->getRealPath())->resize(300, 200)->save($path.'thumb-'.$fileName);
	        Image::make($image->getRealPath())->resize(300, 200)->save($path.'thumb-'.$fileName);

	        // Return Image path as JSON
	       if ($file->move($path, $fileName))
	       {
	           return Response::json(array('filelink' => $path . '/' . $fileName));
	       }
	    }
	}
}
