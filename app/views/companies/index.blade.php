@extends('admin.layouts.default')

@section('nav')
<!-- @ include('admin') -->
@parent
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

            
            <div class="well span2" id="index">
                {{ link_to_route('companies.show', 'Show', array($company->id), array('class' => 'btn btn-info btn-mini')) }}
                {{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info btn-mini')) }}
                <h3>{{{ $company->id }}}: {{{ $company->name }}}</h3>
                <img src="{{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}}" alt="LOGO">
                
                <p>{{{ $company->brand }}}</p>
                <p>"{{{ $company->slogan }}}"</p>
                <p>{{{ $company->description }}}</p>

                <p>{{{ $company->phone }}}</p>
                <p>{{{ $company->email }}}</p>
                

                {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                {{-- Form::submit('Delete', array('class'=> 'btn btn-danger')) --}}
                {{ Form::close() }}
            </div>


                
            @endforeach
            </div>
            @else
    There are no companies
@endif


            
@stop
                