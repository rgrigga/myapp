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
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('slogan', 'Slogan:') }}
            {{ Form::text('slogan') }}
        </li>

        <li>
            {{ Form::label('image', 'Image:') }}
            {{ Form::text('image') }}
        </li>

        <li>
            {{ Form::label('menus', 'Menus:') }}
            {{ Form::text('menus') }}
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