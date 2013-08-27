@foreach($posts as $post)
<article>
	<h1>{{{$post->title}}}</h1>
	<p class="muted">{{{$post->id}}}</p>
    <img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
	<section class="post-content">
		{{{$post->content}}}
	</section>
	
</article>
@endforeach