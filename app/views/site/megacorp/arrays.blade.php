@extends('site.layouts.bs3')
<!-- @ extends('layouts.bootstrap3') -->
<!-- @ extends('site.layouts.bs3') -->
<!-- @ extends('site.layouts.bs3') -->
<!-- @ extends('layouts.demo') -->



		<!-- @ stylesheets('gristech') -->

		<link rel="stylesheet/less" type="text/css" href="/assets/css/less/demo.less" />
		<script src="/assets/js/less.js" type="text/javascript"></script>
		
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

@section('content')
<h1>Arrays:</h1>
<?php 
$desired=array(5,4,6,7); 
$array1=
array(
	"4"=>"foo",
	"5"=>"bar",
	"6"=>"baz",
	"7"=>"zed"
	);


//$desired=array(5,4,6,7) //WILL NOT WORK!!!
$desired=array("5","4","6","7");
$ex1=$desired;
array_multisort($desired,$array1,SORT_STRING);
//This works ONLY using an array of strings in $desired. Will NOT work using integers.
$ex2=$desired;
// $desired2=array("5","4","6","7");

$desired=array_flip($desired);
$ex3=$desired;

// function sortArrayByArray($array,$orderArray) {

//     $ordered = array();
//     foreach($orderArray as $key) {
//     	if(array_key_exists($key,$array)) {
//     		$ordered[$key] = $array[$key];
//     		unset($array[$key]);
//     	}
//     }
//     return $ordered + $array;
// }

$sorted=sortArrayByArray($array1,$desired);
$ex4=$sorted;

// $sortedposts=sortArrayByArray($posts,$desired);
// $ex5=$sortedposts;

$desired=array("69","63","70");
// $posts=$posts->toArray();
// $sorted=sortArrayByArray($myarray,array_flip($desired));
// die(print_r($sorted));

// array_multisort($desired,$posts,SORT_STRING);
?>





<?php
// $posts=new PostPresenter($posts);
// 	foreach ($posts as $post) {
// 		$post=new PostPresenter($post);
// 	}
// die();
// https://github.com/robclancy/presenter#array-usage

// $posts=new PostPresenter($posts);

// $desired=array_flip($desired);

// die(print_r($sorted));

function myposts($mylist){

	function build_sorter($key) {
	    return function ($a, $b) use ($key) {
	        return strnatcmp($a[$key], $b[$key]);
	    };
	}

	function cmp($a, $b) {
	    if ($a == $b) {
	        return 0;
	    }
	    return ($a < $b) ? -1 : 1;
	}

}

?>


Here's what I want:
<pre class="prettyprint">
{{{print_r($ex4)}}}</pre>

Consider this data:

<pre class= "prettyprint">
$array1=array(
	"4"=>"foo",
	"5"=>"bar",
	"6"=>"baz",
	"7"=>"zed"
	);</pre>

Now, consider this list:
<pre class="prettyprint">$desired=array(5,4,6,7);</pre>

Consider how else the computer sees the data:
<pre class="prettyprint">
print_r($desired);
{{{print_r($ex1)}}}</pre>

What we really want is 
<pre class="prettyprint">
print_r($desired);
{{{print_r($ex2)}}}</pre>

What we really, really want is 
<pre class="prettyprint">
$desired=array_flip($desired);
print_r($desired);
{{{print_r($ex3)}}}</pre>


How about this:
<pre class="prettyprint">
	function sortArrayByArray($array,$orderArray) {
	    $ordered = array();
	    foreach($orderArray as $key) {
	    	if(array_key_exists($key,$array)) {
	    		$ordered[$key] = $array[$key];
	    		unset($array[$key]);
	    	}
	    }
	    return $ordered + $array;
	}

$sorted=sortArrayByArray($array1,$desired);
{{{print_r($ex4)}}}</pre>

$myArray=$posts->toArray();


@stop

@section('secondary')
<h1>Objects</h1>
Next problem:
We can sort an array, but what about the post object?
Let's try:

<pre class="prettyprint">
$sorted=sortArrayByArray($posts,$desired);
</pre>

Sadly, this results in an error:
<pre class="prettyprint">
Object of class Illuminate\Database\Eloquent\Collection could not be converted to int
</pre>

@stop

@section('posts')

<h1>POSTS</h1>
{{--View::make('site.posts.well')--}}

<pre class="prettyprint">
{{var_dump($posts)}}
</pre>

posts:{{{$count}}}
{{--$postcount--}}
{{"COUNT: ".count($posts)}}

	@foreach($posts as $post)
	<?php $post=new PostPresenter($post) ?>
	{{View::make('site.post.article')->with(compact('post'))}}
	@endforeach
@stop