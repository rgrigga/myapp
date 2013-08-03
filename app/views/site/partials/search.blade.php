

<!-- @ section('contact') -->

{{Form::open(array('url'=>'search','method'=>'get'))}}
<input name="tag" id="tag" type="text" class="search-query" placeholder="Search for anything" value="">
{{Form::close()}}

