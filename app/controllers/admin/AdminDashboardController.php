<?php

class AdminDashboardController extends AdminController {
    
    /**
     * Blog Model
     * @var Blog
     */
    protected $post;

    /**
     * Inject the models.
     * @param post $post
     */
    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
    }

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex($tag='admin')
	{

		// if(!$tag){
		// 	$tag='admin';
		// }

		$posts=$this->post->getIndex('$tag',3);
		//show list of recent posts

        return View::make('admin/dashboard')->with($posts);
	}

}