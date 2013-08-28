<div class="panel-group" id="accordion">
<img class="img-responsive" src="{{asset('assets/'.strtolower($company->brand).'/cloud.svg')}}" alt="">
  @foreach($posts as $post)
  <div class="panel panel-default">
    <div class="panel-heading">
      
      

      <h4 class="panel-title">
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