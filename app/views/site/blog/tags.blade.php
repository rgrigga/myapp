@extends('site.layouts.default')

{{-- Content --}}
@section('main')
    @if (Session::has('message'))

        <div class="flash alert">
          <button type="button" class="close" data-dismiss="alert"> &times;</button>
          <p>{{ Session::get('message') }}</p>
        </div>

    @endif
<!-- <div class="hero-unit"> -->
<div>
<ul class="tag">
	<li><i class="icon-tag"></i></li>

		@foreach ($tags as $mytag)
			<li><a href='/tags/{{$mytag}}' class="badge badge-warning">{{$mytag}}</a></li>
		@endforeach	
</ul>
	<h1>Tags<small>Find what you came for:</small></h1>

Voila! {{$count}} posts about {{$tag}}.
</div>

{{View::make('site.posts.carousel')}}

<div class="span8">
<!-- <h1>Posts:</h1> -->

</div>

{{ $posts->links() }}
<!-- https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/issues/49 -->

@stop
