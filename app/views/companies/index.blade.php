@extends('admin.layouts.default')

@section('nav')
<!-- @ include('admin') -->
@stop
@section('main')

<style>
    #index img{
        width: 200px;
        max-height: 200px;
    }
</style>
<h1>All Companies</h1>

<p>{{ link_to_route('companies.create', 'Add new company') }}</p>

@if ($companies->count())
<div class="row">
            <ul>
            @foreach ($companies as $company)
                <li>
                    {{{ $company->name }}}
                </li>
            @endforeach
            </ul>

            @foreach ($companies as $company)

            
            <div class="well span4" id="index">
                <h2>{{{ $company->id }}}: {{{ $company->name }}}</h2>
                <img src="{{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}}" alt="LOGO">
                
                <p>{{{ $company->brand }}}</p>
                <p>"{{{ $company->slogan }}}"</p>
                <p>{{{ $company->description }}}</p>

                <p>{{{ $company->phone }}}</p>
                <p>{{{ $company->email }}}</p>
                               {{ link_to_route('companies.show', 'Show', array($company->id), array('class' => 'btn btn-info')) }}
                {{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}
                {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                {{ Form::submit('Delete', array('class'=> 'btn btn-danger')) }}
                {{ Form::close() }}
            </div>


                
            @endforeach
            </div>
            @else
    There are no companies
@endif

todo:
<ul>
    <li>
        <a href="https://github.com/yhbyun/laravel-bookmark">Bookmarks</a>
    </li>
    <li>
        <a href="http://www.siteground.com/tutorials/sitemap/">Sitemap</a>
    </li>
</ul>
            
@stop
                