@extends('layouts.scaffold')

@section('main')
<h1>Show Company</h1>

<p>{{ link_to_route('companies.index', 'Return to all companies') }}</p>

<pre class="prettyprint">{{var_dump($company)}}</pre>

    <div class="row-fluid">
        <div class="span4">
            <!-- <div class="pull-right"> -->
            <!-- <img src="{{asset($company->image)}}" alt="MyImage"> -->
            <!-- </div> -->
            <div>ID: {{{ $company->id }}}</div>
            <div>Name: {{{ $company->name }}}</div>
            <div>Brand: {{{ $company->brand }}}</div>
            <div>Phone: {{{ $company->phone }}}</div>
            <div>Email: {{{ $company->email }}}</div>
            <div>Description: {{{ $company->description }}}</div>
            <div>Slogan: {{{ $company->slogan }}}</div>
            <div>Image: {{{ $company->image }}}</div>
            <div>Menus: {{{ $company->menus }}}</div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            {{$about}}
        </div>
        <div class="span4">
                {{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}

                <!-- http://myapp.gristech.com/companies/2 -->
                {{-- Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) --}}
                {{-- Form::submit('Delete', array('class'=> 'btn btn-danger')) --}}
                {{-- Form::close() --}}
        </div>
    </div>

    <table class="table table-striped table-bordered">
    <thead>
        <tr>
                <th>id</th>
                <th>Brand</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Description</th>
                <th>Slogan</th>
                <th>Image</th>
                <th>Menus</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $company->id }}}</td>
            <td>{{{ $company->brand }}}</td>
                    <td>{{{ $company->phone }}}</td>
                    <td>{{{ $company->email }}}</td>
                    <td>{{{ $company->description }}}</td>
                    <td>{{{ $company->slogan }}}</td>
                    <td>{{{ $company->image }}}</td>
                    <td>{{{ $company->menus }}}</td>
                    
                    <td>{{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>
@stop