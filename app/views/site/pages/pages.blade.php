@extends('site.layouts.default')


site/pages/pages
aka /pages 
aka pages 
aka index of pages

@section('main')
<ul class='nav'>
@foreach($pages as $page)
<li><a href="{{URL::to($page)}}">{{$page}}</a></li>
@endforeach
</ul>
@stop