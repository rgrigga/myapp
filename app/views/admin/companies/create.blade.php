@extends('admin.layouts.default')

@section('main')

        @if ($errors->any())
            <div class="row alert-error">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
            </div>

        @endif

<div class="row">
    <div class="span4">
        <h1>Create Company</h1>

        {{ Form::open(array('route' => 'companies.store')) }}
            <ul>
                <li>
                    {{ Form::label('brand', 'Brand:') }}
                    {{ Form::text('brand') }}
                </li>

                <li>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name') }}
                </li>

                <li>
                    {{ Form::label('phone', 'Phone:') }}
                    {{ Form::text('phone') }}
                </li>

                <li>
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email') }}
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
                    {{ Form::file('image') }}
                    <p>We really need an upload module here.</p>
                </li>

                <li>
                    {{ Form::label('menus', 'Menus:') }}
                    {{ Form::text('menus') }}
                </li>

                <li>
                    {{Form::label('avatar','Avatar:')}}
                    {{Form::file('avatar')}}
                </li>

                <li>
                    {{ Form::submit('Submit', array('class' => 'btn')) }}
                </li>
            </ul>
        {{ Form::close() }}


    </div>
    <div class="span7">
        {{View::make('site/gristech/about')}}
    </div>
</div>


@stop


