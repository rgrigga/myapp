  <!-- /////// -->
  <!-- //BEGIN POSTS -->
@if(Auth::user('admin'))
	<div class="alert alert-danger">
		<h2>POSTCOUNT: <?php echo count($posts) ?></h2>
		@foreach($posts as $post)
		-{{{$post->title}}} 
		@endforeach
	</div>
@endif


  <div class="text-center">
    {{ $posts->links() }}
  </div>

  @foreach ($posts as $post)


  @if (Auth::check())
    <div class="row-fluid">
      <div class="span3 ">
          <div class="metabuttons pull-left">
            
            <!-- //if logged in -->

        <!-- TAGS -->
            <ul class='tag'>
              <li><i class="icon-tag"></i></li>
              @foreach($post->tags() as $tag)
                  <li><a href="{{ $tag }}">{{ $tag }}</a></li>
              @endforeach
            </ul>

<!-- COMMENTS -->

          &nbsp;<i class="icon-user"></i> by <span class="muted">{{{ $post->author->username }}}</span>
          | <i class="icon-calendar"></i> <!--Sept 16th, 2012-->{{{ $post->date() }}}
          | <i class="icon-comment"></i> <a href="{{{ $post->url() }}}#comments">{{$post->comments()->count()}} {{ \Illuminate\Support\Pluralizer::plural('Comment', $post->comments()->count()) }}</a>
<!-- Comments -->

<!-- Edit/Delete Buttons -->
              
                <p>
                  <a href="{{{ URL::to('admin/blogs/' . $post->id . '/edit' ) }}}" class="btn btn-mini">{{{ Lang::get('button.edit') }}}</a>
                 @if (Auth::user()->hasRole('admin'))
                  <a href="{{{ URL::to('admin/blogs/' . $post->id . '/delete' ) }}}" class="btn btn-mini btn-danger">{{{ Lang::get('button.delete') }}}</a>
                 @endif
                </p>
              

          </div>
          <!-- ./meta buttons -->
      </div>
      <!-- ./span3 -->
    </div>
    <!-- ./ row -->
    @endif




    <div class="featurette">
      <style>
/*      img.home{
        width:320px; 
      }*/
      </style>
      <img class="home featurette-image img-circle pull-left" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">

      <h2><strong><a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a></strong></h2>
      <p>
        <!-- <pre> -->
      {{ Str::limit($post->meta_description, 300) }}
        <!-- </pre> -->
      </p>
      <p>
      	{{ Str::limit($post->content, 300) }}
      </p>
      <p class="text-center">
        <a class="btn btn-info btn-large" href="{{{ $post->url() }}}">read more</a>
        <a href="#schedule" role="button" class="btn btn-large btn-warning" data-toggle="modal"><i class='icon-calendar'></i> Schedule Now</a>
      </p>
    </div>
    <!-- ./ featurette -->
          <hr class="featurette-divider">
  @endforeach
  {{ $posts->links() }}
<!-- </div> -->
      <!-- <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->


