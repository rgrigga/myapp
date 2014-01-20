<?php
class ResumeController extends BaseController{

    protected  $company;

    public function __construct(Company $company){

    	parent::__construct();

        $company = App::make('company');
		$this->company = $company;
		View::share('company',$this->company);
    }

	public function getIndex(){

		$email = "Ryan.Grissinger@Gmail.com"; // 
		// $email="fail";
		$hash = md5( strtolower( trim($email) ) );
		$aurl= "http://www.gravatar.com/avatar/".$hash."?d=identicon&s=200";
		// <img src="{{$aurl}}" alt="{{$email}} Avatar">

		return View::make('resume.index')
		->with(compact('email','aurl'));
	}

	public function getDoc(){
		// $this->layout="resume.doclayout";
		return View::make('resume.worddoc');
	}
}