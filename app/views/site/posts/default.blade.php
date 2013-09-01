<section class="posts-default">
	@foreach ($posts as $post)
		<div class="well">
			{{$post->title}}

			<img class="thumby pull-left" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this,200,200);">

			<h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
			<p>
				{{ String::tidy(Str::limit($post->meta_description, 158)) }}
			</p>
			<p>
				<a class="btn btn-info" href="{{{ $post->url() }}}">read more</a>
			</p>

		<!-- <div class="row"> -->
			<div class="meta">
				<!-- Edit/Delete Buttons -->
				<div class="metabuttons pull-left">
					@if (Auth::check())
					@if (Auth::user()->hasRole('admin'))
					<p>
						<a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
						<a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
						| </p>
					@endif
					@endif
				</div>

				<!-- Comments -->
				<div class="comments">
					&nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
					| <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
					| <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
				</div>


				
				<section class="tags">
					<ul class='tag'>
						<li><i class="icon-tag"></i></li>
						@foreach($post->tags() as $tag)

						<li><a href="{{ $tag }}">{{ $tag }}</a></li>

						@endforeach
					</ul>
				</section>
			</div>
		<!-- </div> -->

		</div>

	@endforeach
</section>