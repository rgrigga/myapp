<?php

class AdminDashboardController extends AdminController {
    
    /**
     * Blog Model
     * @var Blog
     */
    protected $blog;

    /**
     * Inject the models.
     * @param blog $blog
     */
    public function __construct(Blog $blog)
    {
        parent::__construct();
        $this->blog = $blog;
    }

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex()
	{

		$posts=$this->blog->getIndex('admin',3)
		//show list of recent posts

        return View::make('admin/dashboard')->with($posts);
	}

}