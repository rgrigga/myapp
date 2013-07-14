@extends('admin.layouts.default')

@section('nav')
<!-- @ include('admin') -->
@stop
@section('content')

<h1>All Companies</h1>

<p>{{ link_to_route('companies.create', 'Add new company') }}</p>

@if ($companies->count())
<div class="row">
            @foreach ($companies as $company)
            
            
            <div class="well span4">
                <h2>{{{ $company->id }}}: {{{ $company->name }}}</h2>
                <img src="{{{asset($company->image)}}}" alt="">
                
                <p>{{{ $company->brand }}}</p>
                <p>"{{{ $company->slogan }}}"</p>
                <p>{{{ $company->description }}}</p>

                <p>{{{ $company->phone }}}</p>
                <p>{{{ $company->email }}}</p>
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

@stop
                