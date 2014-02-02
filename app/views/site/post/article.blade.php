	<article>
		<section class="post-description">
<!--  -->		</section>
		<h1>{{{$post->title}}}</h1>
		
		<p class="muted">{{{$post->id}}} {{{$post->url()}}}</p>

		<img class="shape img-rounded img-responsive" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}" onerror="imgError(this);">

		<div>
			{{$post->description}}
		</div>
		<div>
			{{$post->content}}
		</div>

	</article>
