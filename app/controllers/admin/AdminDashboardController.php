<?php

class AdminDashboardController extends AdminController {
    
    /**
     * Blog Model
     * @var Blog
     */
    protected $post;

        /**
     * Company Model
     * @var Company
     */
    protected $company;

    /**
     * Inject the models.
     * @param post $post
     * @param company $company
     */
    public function __construct(Post $post, Company $company)
    {
        parent::__construct();
        $this->post = $post;
        $this->company = $company;
    }

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex($tag='admin')
	{
        // die("ADMIN DASHBOARD GET INDEX");

		if($tag=="foobar"){
			die("Conratulations!");
		}

		// $posts=$this->post->getIndex('$tag',3);
        // $obj = DB::table('posts')->get();
        $company = DB::table('companies')->where('name','gristech')->first();
        // die(var_dump($obj));

		//show list of recent posts
        // $company=$this->company->where('name','gristech')->first();
        
        

        return View::make('admin.dashboard')->with(compact('company'));
	}

}