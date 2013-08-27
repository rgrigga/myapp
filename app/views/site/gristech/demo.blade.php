@extends('layouts.bs3')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact_us') }}} ::
@parent
@stop

@section('myjs')
<script>
$('.well h2').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $collapse = $this.closest('.collapse-group').find('.collapse');
    $collapse.collapse('toggle');
});
</script>
@stop

@section('nav')
<!-- Navbar -->
@include('site.partials.nav-top-min')
<!-- // @ include('site.partials.nav-buckeye') -->
@stop
{{-- Content --}}
@section('main')

<style>
html,body{
	background-color: #235d79;
}
.corner{
	position: absolute;
	margin-left: -30px;
	margin-top: -10px;
}

.page-header h1{
	text-align: right;
	font-family: 
}

</style>

<div class="corner">
	<img src="{{asset('assets/advantage/corner.png')}}" alt="le corner">
</div>
<div class="page-header">
	<h1>Contact Us</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, harum labore nemo nam temporibus repellat nihil officia excepturi natus fugit tempore sint quos voluptatem error ex reiciendis adipisci magni perferendis totam non enim ut expedita eos deserunt corrupti est autem quaerat debitis asperiores accusantium commodi nulla aliquam quibusdam mollitia provident.</p>
</div>


<div class="row">
    <div class="span4 collapse-group">
        <h2>Heading</h2>
        <p class="collapse">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
</div>

<div class="row">
    <div class="span4 collapse-group">
        <h2>Heading</h2>
        <p class="collapse">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
        <div class="span4 collapse-group">
        <h2>Heading</h2>
        <p class="collapse">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
        <div class="span4 collapse-group">
        <h2>Heading</h2>
        <p class="collapse">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
</div>

<!-- @ include('site.partials.contact') -->

@stop
