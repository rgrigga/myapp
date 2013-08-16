<?php
use Robbo\Presenter\PresentableInterface;
// https://github.com/robclancy/presenter#usage

// class Company extends Eloquent implements PresentableInterface{
class Company extends Eloquent implements PresentableInterface{
    protected $guarded = array();

    public static $rules = array(
		'brand' => 'required',
		'name' => 'required',
		'phone' => 'required',
		'menus' => 'required'
	);

	public function getPresenter()
	    {
	        return new CompanyPresenter($this);
	    }


	public function img()
	
	{
		$asset=asset('assets/'.strtolower($this->brand).'/'.$this->image);
		return "<img src='".$asset."'>";
	}

    public function menus()
	{
		// var_dump($this->meta_keywords);
		$menus=array();
		$menus=explode(',', $this->menus);
		// var_dump($menus);
		if(!$menus){
		 array_push($menus, 'private');
		}
		//return $this->hasMany('Tag');
		return $menus;

		// foreach ($this->post->get() as $post) {

		// 	foreach ($post->tags() as $mytag) {
		// 		if(!in_array($mytag, $alltags)){
		// 			array_push($alltags, trim($mytag));
		// 		}
		// 	}

		// }
	}

	public function posts($tags="")
	{
		//tags could be an array or a single.  It is a has many 
		//relationship
		// $posts=
		// return $posts;
		die("COMPANY MODEL -> POSTS()");
	}

	public function directory(){
		return "assets/".strtolower($this->brand)."/";
	}
}