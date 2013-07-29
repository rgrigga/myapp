<?php

// http://laravel.com/docs/responses
// https://github.com/symfony/HttpFoundation
// class Buckeyeontroller ext
// They say there is no tighter coupling than inheritance
class CompanyController extends UserController {

	// protected $layout = 'site.layouts.company';
	protected $layout = 'layouts.scaffold';
    /**
     * Tags Model
     * @var Post
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
     * User Model
     * @var Company
     */
    protected $company;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     * @param Tags $tags
     * @param Tags $tags    
     */
    public function __construct(Company $company, Post $post)
    {

    	// parent::construct();
// die(var_dump($company));
        $this->post = $post;
        $this->company = $company;


        // App::abort(404,'company controller construct'.var_dump($this->company));

		// $env=;
		// var_dump($env);
        // var_dump($c);

        // die();
    // die("bam");
        // $this->tags = $post->tags();
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */

	public function buckeye(){
		// $company = $this->company->where('brand', 'LIKE', 'buckeye')->first();
		return $this->getIndex('buckeye',5);
	}

	public function sewcute(){

		return $this->getIndex('sewcute',5);
	}

	public function gristech(){

		return $this->getIndex('gristech',5);
	}

	public function getIndex($brand="",$num='10')
	{
		
		if(empty($brand)){
			$brand=App::environment();
		}
		$brand=strtolower($brand);

		$company = $this->company->where('brand','like',$brand)->first();

		// die(var_dump($brand));
		// die(var_dump(App::environment()));
		// die(var_dump($company));
		
		// if(empty($company)){
			// $company = $this->company->where('brand','like','gristech')->first();
			// App::abort(404,'CompanyController@getIndex: no company');
			// App::error(function(RuntimeException $exception){
			//     Log::error($exception);
			//     var_dump($company);
			// });
		// }
		

		
		if(is_null($brand)){
			// return "controller has no brand!";
			die('CompanyCntroller get index');

			return App::error(function(RuntimeException $exception){
			    Log::error($exception);
			    var_dump($company);
			    App::abort(404,'Company not present.');
			    // return die('Sorry! Something is wrong with this account!');
			});

			// $brand=strtolower($brand);
			// $company = $this->company->where('brand', 'LIKE', $brand)->first();
			// $brand='buckeye';
		}
		// else{
			
		// }
		// die('CompanyController@getIndex $company:' var_dump($company));
		// $company = $this->company->where('brand', 'LIKE', $brand)->first();

		// if(!$company){
		// 	// die("FAIL");
		// }
		
		else{
			View::share('company', $company);
		
			// $posts=$this->company->posts;
			$posts = $this->post->where('meta_keywords', 'LIKE', '%'.$brand.'%')->paginate($num);

			// $views=array('foo','bar');
			return View::make('site/'.$brand.'/home')
				// die();
				//this works, but it confused me.
				->nest('about','company.about')

				->with(compact('company'))
				->with(compact('tags'))
				->with(compact('alltags'))
				->with(compact('posts'))
				// ->with(compact('brand'))
				;
		}

	}

    public function show($id)
    {
        $company = $this->company->findOrFail($id);
// die(var_dump($company));
        $name=strtolower($company->brand);
        // die($name);

        return View::make('site.'.$name.'.home')
        	// ->with(compact('company'));
        	->with(compact('company'))
			->with(compact('tags'))
			->with(compact('alltags'))
			->with(compact('posts'));

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
			// If we ended up in here, it means that
			// a page or a blog post didn't exist.
			// So, this means that it is time for
			// 404 error page.
			return App::abort(404);
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
}