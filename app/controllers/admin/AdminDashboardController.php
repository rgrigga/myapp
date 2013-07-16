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

		// if(!$tag){
		// 	$tag='admin';
		// }

		// $posts=$this->post->getIndex('$tag',3);

		//show list of recent posts
        return View::make('admin/dashboard');
	}

}