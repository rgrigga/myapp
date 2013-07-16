@section('posts')

<div class="posts">
	<h1>Posts:</h1>
	<div class="text-center">
	{{ $posts->links() }}
	</div>

	@foreach ($posts as $post)

		<div class="well">
			{{$post->title}}
			{{$post->img}}

			<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
			<p>
			{{ String::tidy(Str::limit($post->meta_description, 158)) }}
			</p>
			<p>
				<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
			</p>
		</div>

		<ul class='tag'>
			<li><i class="icon-tag"></i></li>
			@foreach($post->tags() as $tag)
				
			    <li><a href="{{ $tag }}">{{ $tag }}</a></li>
			    
			@endforeach
		</ul>

	@endforeach
	{{ $posts->links() }}
</div>
<!-- ************************************************ -->
@stop

