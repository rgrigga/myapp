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
	public function getIndex($tag='')
	{
        die("ADMIN DASHBOARD GET INDEX");

        // $company = $this->company->where('brand','LIKE','%'.$tag.'%')->first();
        $company=App::make('company');
        return View::make('admin.dashboard')
        ->with(compact('company'));
	}

}


