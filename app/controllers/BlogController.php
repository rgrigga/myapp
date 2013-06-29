<?php

//http://www.coderanch.com/t/443740/patterns/UML-multiple-inheritance-domain-model

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
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(Post $post, User $user)
    {
        parent::__construct();

        $this->post = $post;//These are basically empty objects.
        $this->user = $user;
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
    
// process a many to many relationship amongst tags

	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex($tag="")
	{
// <<<<<<< HEAD

		$alltags=array();		

		foreach ($this->post->get() as $post) {

			foreach ($post->tags() as $mytag) {
				if(!in_array($mytag, $alltags)){
					array_push($alltags, trim($mytag));
				}
			}

		}

		//check to see if the tag works
		//
		// http://stackoverflow.com/questions/13386774/using-eloquent-orm-in-laravel-to-perform-search-of-database-using-like
		if($tag){
			$tag='%'.$tag.'%';
			$posts = $this->post->where('meta_keywords', 'LIKE', "$tag")->paginate(5);		
			
			$tags=array();

			foreach ($posts as $post) {

				foreach ($post->tags() as $mytag) {
					if(!in_array($mytag, $tags)){
						array_push($tags, trim($mytag));
					}
				}

			}			
			
			
			// die(var_dump(count($posts)));

			if(count($posts)==0){

			return View::make('site/blog/tags', compact('posts'),compact('tags'),compact('alltags'));

			}

			return View::make('site/blog/tags', compact('posts'),compact('user')->with('error', 'There was a problem!'));
		}

		// $posts = $this->post->where('tag','seo');
		// Get all the blog posts
		else{
			// $myphotos=self::listImages("screen/");
			// $photos=Paginator::make($myphotos,count($myphotos),10);
				// $myphotos->paginate(10);
			$posts = $this->post->orderBy('created_at', 'DESC')->paginate(5);
			// $data = array();
			return View::make('site/blog/index', array(compact('posts'),compact('tags'),compact('alltags'),compact('photos')));
// =======

		$alltags=array();		

		foreach ($this->post->get() as $post) {

			foreach ($post->tags() as $mytag) {
				if(!in_array($mytag, $alltags)){
					array_push($alltags, trim($mytag));
				}
			}

		}

		//check to see if the tag works
		//
		// http://stackoverflow.com/questions/13386774/using-eloquent-orm-in-laravel-to-perform-search-of-database-using-like
		if($tag){
			$tag='%'.$tag.'%';
			$posts = $this->post->where('meta_keywords', 'LIKE', "$tag")->paginate(5);		
			
			$tags=array();

			foreach ($posts as $post) {

				foreach ($post->tags() as $mytag) {
					if(!in_array($mytag, $tags)){
						array_push($tags, trim($mytag));
					}
				}

			}			
			
			// die(var_dump(count($posts)));

			if(count($posts)==0){

			return View::make('site/blog/tags', compact('posts'),compact('tags'),compact('alltags'));

			}

			return View::make('site/blog/tags', compact('posts'),compact('tags'),compact('alltags'))->with('error', 'There was a problem!');
		}

		// $posts = $this->post->where('tag','seo');
		// Get all the blog posts
		else{

			$posts = $this->post->orderBy('created_at', 'DESC')->paginate(5);
			return View::make('site/blog/index', compact('posts'),compact('tags'),compact('alltags'));
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
		}
		// Show the page
		// return View::make('site/blog/index', compact('posts'));
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
// <<<<<<< HEAD
	}

	public function getTags($tag="")
	{
		// return Redirect::to("tags", "all");
		// 
		$alltags=array();		

		foreach ($this->post->get() as $post) {

			foreach ($post->tags() as $posttag) {
				if(!in_array($posttag, $alltags)){
					array_push($alltags, trim($posttag));
				}
			}

		}

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

		return View::make('site/blog/tags', compact('posts'),compact('tags'));
	}

// =======
	}

	public function getTags($tag="")
	{
		// return Redirect::to("tags", "all");
		// 
		$alltags=array();		

		foreach ($this->post->get() as $post) {

			foreach ($post->tags() as $posttag) {
				if(!in_array($posttag, $alltags)){
					array_push($alltags, trim($posttag));
				}
			}

		}

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

		return View::make('site/blog/tags', compact('posts'),compact('tags'));
	}

// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3

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
			return App::abort(404);
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

// =======
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
}
