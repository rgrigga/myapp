<?php
class CompanyController extends BaseController {

	protected $layout = 'site.layouts.company';

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
        parent::__construct();


        $this->post = $post;
        // $this->user = $user;
        $this->company = $company;

        // $this->tags = $post->tags();
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */

	public function getIndex($name="gristech")
	{
		$name=strtolower($name);
		// die(var_dump($id));
		// $str='%'.$company.'%';
		$company = $this->company->where('brand', '=', $name)->first();
		
		$posts = $this->post->where('meta_keywords', 'LIKE', "%".$company->brand."%")->paginate(5);
		// $posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);

// die(var_dump($company));

		// Show the page
		return View::make('site/'.$name.'/home')
			->with(compact('company'))
			->with(compact('tags'))
			->with(compact('alltags'))
			->with(compact('posts'));;
		
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