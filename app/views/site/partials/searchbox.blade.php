{{--Form::open(array('url'=>'search','method'=>'post'))--}}
{{-- Form::open(array('action' => 'BlogController@postSearch')) --}}
{{ Form::open(array('url' => 'search')) }}
<!-- http://laravel.com/docs/html#form-model-binding -->
<input name="tag" id="tag" type="text" class="search-query" placeholder="Search for anything" value="">
{{Form::close()}}

