@extends('site.demo.layout')

@section('page-header')

@stop

@section('main')
<pre><code>
	
<?php
$str=
<<<'EOD'
{{--
"
@section('main')
@stop"
--}}
EOD;
$str=htmlentities($str);
$str=str_replace("@", "&#64;", $str);
echo $str;
?>
</pre></code>
@stop

@section('secondary')

@stop

@section('footer')

@stop