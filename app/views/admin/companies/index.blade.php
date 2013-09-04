<h1>DEPRECIATED</h1>
<p>Use views/companies</p>
@extends('admin.layouts.default')

@section('nav')
@parent
<!-- @ include('admin') -->
@stop

@section('styles')
    @parent

    <link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />
    <!-- This display's the company's less page -->
    <script src="/assets/js/less.js" type="text/javascript"></script>
@stop

@section('main')

<h1>Companies Index</h1>

<p>{{ link_to_route('admin/companies/create', 'Add new company') }}</p>

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
                