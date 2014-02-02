@extends('layouts.master')
<style>
/*	.alert{
        position:relative;
	}*/
.page-header{
	margin-bottom: 50px !important;
}
#gravatar{
	padding:10px;
}
.img-center{
	margin-left: auto;
	margin-right: auto;
}
.center{
	text-align: center;
}
</style>


@section('page-header')
<h1>Blog Index</h1>
<code>views.blog.index</code>
<div class="center">
	{{$company->logo('center')}}
	
	<img class="img-responsive img-center" src="{{asset('packages/rgrigga/'.strtolower($company->brand).'/logo.png')}}" alt="{{$company->brand}}">
</div>
@stop



@section('main')
{{$accordion}}
{{--View::make('site.gristech.partials.about')--}}
{{--View::make('site.gristech.md5form')--}}
<pre><code>
	.page-header{
		margin-bottom: 50px !important;
	}
	#gravatar{
		padding:10px;
	}
	.img-center{
		margin-left: auto;
		margin-right: auto;
	}
</code></pre>

@stop

@section('footer')

@stop