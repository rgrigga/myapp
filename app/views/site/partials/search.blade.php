

<!-- @section('contact') -->

{{Form::open(array('url'=>'tags/','method'=>'get'))}}
<input name="tag" id="tag" type="text" class="search-query" placeholder="Search for anything" value="foo">
{{Form::close()}}

