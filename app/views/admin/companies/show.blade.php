@extends('layouts.scaffold')

@section('main')
<h1>Show Company</h1>

<p>{{ link_to_route('companies.index', 'Return to all companies') }}</p>

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
					<td>{{ $company->description }}</td>
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