<?php


function img($name,$type="png",$company="gristech"){
	// $string= "<img src=\"asset
	// 	('assets/'.".$company.".'/".$name.".".$type."')}}\" alt=\"foobar\">";

	// types could be: jpg, png, svg, gif

	$url= asset('assets/'.$company.'/'.$name.'.'.$type);
	$alt=$company." ".$name;
	
	$str="<img src='".$url."' alt='".$alt."'>";
	// die(var_dump($str));
	// echo $str;
	// string="img src"
	return $str;
}
// http://packalyst.com/packages/package/thapp/jitimage