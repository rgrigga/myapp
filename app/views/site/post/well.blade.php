<div class="well">
	{{$post->title}}
<img class="featurette-image" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="G5"> 


	<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>


	<p>
		{{ String::tidy(Str::limit($post->meta_description, 158)) }}
	</p>
	<p>
		<a class="btn btn-info" href="{{{ $post->url() }}}">more</a>
	</p>



<ul class='tag'>
<li>
		<!-- //copy and edit buttons -->
@if (Auth::check())
	@if (Auth::user()->hasRole('admin'))
	<div class="admin">
		<div class="admin-buttons">
			<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
			<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn annoying">{{{ Lang::get('button.delete') }}}</a>
		</div>
	</div>

	@endif
@endif
</li>
	<li><i class="icon-tag"></i></li>
	@foreach($post->tags() as $tag)

	<li><a href="tags/{{ $tag }}">{{ $tag }}</a></li>
	@endforeach

</ul>
</div>