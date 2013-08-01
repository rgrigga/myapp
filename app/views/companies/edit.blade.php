@extends('layouts.scaffold')

@section('nav')
@include('site.partials.nav-top-min')
@stop

@section('main')
<h1>Edit Company</h1>
<div class="row">
    <div class="span4">
        {{ Form::model($company, array('method' => 'PATCH', 'route' => array('companies.update', $company->id))) }}
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
                    {{ Form::label('facebook', 'Facebook:') }}
                    {{ Form::text('facebook') }}
                </li>

                <li>
                    {{ Form::label('twitter', 'twitter:') }}
                    {{ Form::text('twitter') }}
                </li>

                <li>
                    {{ Form::label('linkedin', 'linkedin:') }}
                    {{ Form::text('linkedin') }}
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


                <!-- <li> -->
                    <!-- {{ Form::label('home', 'Home Page:') }} -->
                    <!-- {{ Form::text('home') }} -->
                <!-- </li> -->

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
    </div>
    <div class="span7">
        <h1>PREVIEW:</h1>
        {{--View::make('company.about')--}}
        {{$about}}
    </div>
    <!-- span7 -->
</div>
<!-- row -->


@stop