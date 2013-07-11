<?php
use Robbo\Presenter\PresentableInterface;

class Company extends Eloquent implements PresentableInterface{
    protected $guarded = array();

    public static $rules = array(
		'brand' => 'required',
		'phone' => 'required',
		'menus' => 'required'
	);

	public function getPresenter()
    {
        return new CompanyPresenter($this);
    }
}