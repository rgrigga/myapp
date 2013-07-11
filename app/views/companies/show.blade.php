@extends('layouts.scaffold')

@section('main')

<h1>Show Company</h1>

<p>{{ link_to_route('companies.index', 'Return to all companies') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Brand</th>
				<th>Description</th>
				<th>Email</th>
				<th>Menus</th>
				<th>Phone</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $company->brand }}}</td>
					<td>{{{ $company->description }}}</td>
					<td>{{{ $company->email }}}</td>
					<td>{{{ $company->menus }}}</td>
					<td>{{{ $company->phone }}}</td>
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