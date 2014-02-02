<div class="well">
	{{$post->title}}
	{{$post->img}}

	<h2><strong><a href="{{{ $post->url() }}}">{{ $post->title }}</a></strong></h2>
	<p>
		{{ str_limit($post->meta_description, 158) }}
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


@foreach($collection as $col)
	{{View::make('lima.menu',$col->posts);}}
	//h2
	@foreach($tag as $post)
	{{View::make('lima.submenu');}}
	//h3
	@endforeach
<!-- @ endforeach -->
	<?php $it=str_replace(" ", "", $item); ?>
	
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#{{$it}}1">
				<h2>{{$item}}</h2>
			</a>
		</div>
		<div id="{{$main}}1" class="accordion-body collapse">

			<div class="accordion-inner">
				<a href="#{{$sub}}" data-toggle="tab">
					<h3>{{$item}}</h3>
				</a>
				
				
				<div data-target="#{{{$it}}}"></div>
				Anim pariatur cliche reprehenderit, 
			</div>
		</div>
		<!-- ./collapse -->
	</div>
	<!-- ./ accordian-group -->

@endforeach