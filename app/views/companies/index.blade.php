@extends('admin.layouts.default')

@section('nav')
<!-- @ include('admin') -->
<!-- @ parent -->
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
            @foreach ($companies as $mycompany)
                <li>
                    {{{ $mycompany->name }}}
                </li>
            @endforeach
            </ul>

            @foreach ($companies as $mycompany)

            
            <div class="well span2" id="index">
                {{ link_to_route('companies.show', 'Show', array($mycompany->id), array('class' => 'btn btn-info btn-mini')) }}
                {{ link_to_route('companies.edit', 'Edit', array($mycompany->id), array('class' => 'btn btn-info btn-mini')) }}
                <h3>{{{ $mycompany->id }}}: {{{ $mycompany->name }}}</h3>
                <img src="{{{asset('assets/'.strtolower($mycompany->brand).'/'.$mycompany->image)}}}" alt="LOGO">
                
                <p>{{{ $mycompany->brand }}}</p>
                <p>"{{{ $mycompany->slogan }}}"</p>
                <p>{{{ $mycompany->description }}}</p>

                <p>{{{ $mycompany->phone }}}</p>
                <p>{{{ $mycompany->email }}}</p>
                

                {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $mycompany->id))) }}
                {{-- Form::submit('Delete', array('class'=> 'btn btn-danger')) --}}
                {{ Form::close() }}
            </div>


                
            @endforeach
            </div>
            @else
    There are no companies
@endif


            
@stop
                