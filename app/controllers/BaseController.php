<?php

// GOOGLE DOCS:
// http://www.google.com/intx/en/enterprise/apps/business/

class BaseController extends Controller {

    /**
     * Initializer.
     *
     * @access   public
     * @return \BaseController
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
		// $this->beforeFilter('auth', array('except' => $this->whitelist));
        
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}

// first dot last @ gmail dot com