<style>
  .item img{
    width: 100%;
    height:600px; 
  }
  .item h1{
    color: white;
  }
</style>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">



@foreach($posts as $post)
        <div class="item">

          <img class="" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">
          <!-- <img src="holder.js/300x300" alt=""> -->

          <div class="container">
            <div class="carousel-caption">
              <h1>{{{$post->title}}}</h1>
              <p class="lead"></p>
              <p>
                {{{$post->meta_description}}}
              </p>
              <a class="btn btn-large btn-primary" href="{{{$post->url()}}}">Learn more</a>

            </div>
          </div>
        </div>
@endforeach


      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->