<div class="panel-group" id="accordion">

  @foreach($posts as $post)
    <div class="panel panel-default">
      <div class="panel-heading">
        
        <h4 class="panel-title">
          @if(Auth::user('admin'))
          <a class="badge" href="{{URL::to('/admin/blogs/'.$post->id.'/edit')}}"><i class="icon-pencil"></i> edit</a>
          @endif
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{$post->id}}">
            {{$post->title}}
          </a>


        
        </h4>


      </div>
      <div id="{{$post->id}}" class="panel-collapse collapse">
        <div class="panel-body">
          {{$post->content}}
        </div>
      </div>
    </div>
  @endforeach

</div>