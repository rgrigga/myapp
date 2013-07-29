<?php

// http://flatuicolors.com/

//http://www.coderanch.com/t/443740/patterns/UML-multiple-inheritance-domain-model

// http://www.vogella.com/articles/Git/article.html
// http://www.vogella.com/articles/Git/article.html#gitpushbranch


//  In general using the stash command should be the exception in using Git. Typically you would create new branches for new features and switch between branches. You can also commit frequently in your local Git repository and use interactive rebase to combine these commits later before pushing them to another Git repository.
// Tip

// You can avoid using the git stash command. In this case you commit the changes you want to put aside and use the git commit --amend command to change the commit later. If you use the approach of creating a commit, you typically put a marker in the commit message to mark it as a draft, e.g. "[DRAFT] implement feature x".

// http://gitref.org/branching/


class BlogController extends BaseController {

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

        $this->post = $post;//These are basically empty objects.
        $this->user = $user;
        $this->company = $company;

        $this->todo = array('hello','bar','make list');

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

	private function stdpages($tag){
			$path='../app/views/company/';

		    $mypages = array();
		    foreach (glob($path."*.blade.php") as $filename) {
		        $filename=str_replace($path, "", $filename);
		        $filename=str_replace(".blade.php", "", $filename);
		        array_push($mypages,$filename);
		        // echo "$filename" . "<br>";
		    }
// die(var_dump($path,$mypages));
		    $msg="";
		    if(empty($mypages)){
		    	$msg.="Could not find any pages in $path.<br>";
				Session::flash('error', $msg);
				return false;
		    }
		    if(in_array($tag, $mypages)){
		    	return true;
		    }
		    else return false;
	}

	public function getPage($tag="")
	{
			$path='../app/views/pages/';

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
				Session::flash('error', $msg);
				return false;
		    }
		    if(in_array($tag, $mypages)){
		    	return true;
		    }
		    else return false;
	}

	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex($tag="")
	{

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
		

		$env=App::environment();
		$msg="";
	// singleton versus dependency injection?
    // $company=App::make('company');
		if($tag){
			$company = $this->company->where('brand','like',$tag)->first();

			if(empty($company)){
				die("company not found - (BlogController getIndex)");
				$company = $this->company->where('brand','like','gristech')->first();
			}
		$posttitle='%'.$tag.'%';
		$posts = $this->post->where('title', 'LIKE', "$posttitle")->paginate(5);					

		// return self::getByTag($tag);

		// die('blogcontroller index');
			// die(var_dump($company));
		}

		else{
			die('there is no tag!');
		}


		if(!is_null($company)){
			// $posts=$this->posts->where('tags' company->);
			// return Redirect::action('CompanyController@getIndex',$tag);
			return View::make('site.'.strtolower($company->brand).'.home')
			->with(compact('company','posts'));
		}
		
		$company = $this->company->where('brand','like',$env)->first();



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
				die('bam');

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
			$alltags=array();		
			foreach ($this->post->get() as $post) {
				foreach ($post->tags() as $mytag) {
					if(!in_array($mytag, $alltags)){
						array_push($alltags, trim($mytag));
					}
				}
			}
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

					Session::flash('message', 'Sorry, I couldn\'t find anything with tag matching <strong>'.$tag.'</strong>');
					return View::make('site/blog/tags')
						// ->nest('index','site.blog.index')
						->nest('carousel','site.partials.carousel')
						->with(compact('company'))
						->with(compact('tags'))
						->with(compact('alltags'))
						->with(compact('posts'));


						// ->with('message','I couldn\'t find anything');
				}
				//else
				$str="";
				$str.="I found ".count($posts)." posts.";
				return View::make('site/blog/tags')
					->with(compact('company','tags','alltags','posts'))
					// ->with(compact('tags'))
					// ->with(compact('alltags'))
					// ->with(compact('posts'))
					->with('message',$str);
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
				

				// die("BAM");

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
		return $alltags;
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
    	$company = App::make('company');
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

		$posts = $this->post->where('tag','like');

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

		// Show the page
		return View::make('site/blog/view_post', compact('post', 'comments', 'canComment'));
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
			return Redirect::to($slug . '#comments')->with('error', 'You need to be logged in to post comments!');
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
				return Redirect::to($slug . '#comments')->with('success', 'Your comment was added with success.');
			}

			// Redirect to this blog post page
			return Redirect::to($slug . '#comments')->with('error', 'There was a problem adding your comment, please try again.');
		}

		// Redirect to this blog post page
		return Redirect::to($slug)->withInput()->withErrors($validator);
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

	    $path = base_path().'/public/uploads/img/posts/' . (int)$blogId;

	    $image = Input::file('photo');

	    if (Input::hasFile('photo'))
	    {
	        $fileName = $file->getClientOriginalName();

	        $image->move($path,$fileName);
	        $image = new Image;
	        $image->name = $fileName.name;
	        $image->save();

	        // resizing an uploaded file
	        Image::make($image->getRealPath())->resize(300, 200)->save($path.'thumb-'.$fileName);
	        Image::make($image->getRealPath())->resize(300, 200)->save($path.'thumb-'.$fileName);

	        // Return Image path as JSON
	       if ($file->move($path, $fileName))
	       {
	           return Response::json(array('filelink' => $path . '/' . $fileName));
	       }
	    }
	}
}
