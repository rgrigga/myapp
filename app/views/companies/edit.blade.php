@extends('layouts.scaffold')

@section('main')

<h1>Edit Company</h1>
{{ Form::model($company, array('method' => 'PATCH', 'route' => array('companies.update', $company->id))) }}
    <ul>
        <li>
            {{ Form::label('brand', 'Brand:') }}
            {{ Form::text('brand') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::textarea('email') }}
        </li>

        <li>
            {{ Form::label('menus', 'Menus:') }}
            {{ Form::textarea('menus') }}
        </li>

        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::textarea('phone') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('companies.show', 'Cancel', $company->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop