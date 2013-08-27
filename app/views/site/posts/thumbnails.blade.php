<!-- thumbnails -->
@foreach($posts as $post)
<div class="thumbnail span3">
	<img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="G5"> 

<div class="caption">
		


	<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>


	<p>
		{{ String::tidy(Str::limit($post->meta_description, 158)) }}
	</p>
	<p>
		<a class="btn btn-info" href="{{{ $post->url() }}}">More</a>
	</p>

</div>

<ul class='tag'>
<li>
		<!-- //copy and edit buttons -->
@if (Auth::check())
@if (Auth::user()->hasRole('admin'))
<div class="admin-buttons">
	<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
	<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
</div>
@endif
@endif
</li>
	<li><i class="icon-tag"></i></li>
	@foreach($post->tags() as $tag)

	<li><a href="{{ $tag }}">{{ $tag }}</a></li>
	@endforeach

</ul>
</div>
@endforeach
<!-- /// -->