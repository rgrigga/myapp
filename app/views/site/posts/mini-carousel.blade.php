<style>
  
  /*THESE ARE GLOBAL SETTINGS*/

  .carousel-inner .item img{
    max-width: 40%;
    height:30%; 
  }
  .carousel-inner .item{
    color: white;
  }

  .carousel-caption{
    text-align: right;
  }
</style>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
<?php
// die(var_dump($posts));
?>
@foreach($posts as $post)
        <div class="item">

          
          <!-- <img src="holder.js/300x300" alt=""> -->

          <div class="container">
            <img class="image-responsive" src="{{asset('assets/'.strtolower($company->brand).'/'.$post->image)}}" alt="{{$post->image}}">

            <div class="carousel-caption">
              <h1>{{{$post->title}}}</h1>
              <p class="lead"></p>
              <p>
                {{$post->meta_description}}
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