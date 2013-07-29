@extends('layouts.scaffold')

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
        {{--View::make('company.about')--}}
        {{$about}}
    </div>
    <!-- span7 -->
</div>
<!-- row -->

<div class="row">
        <script>
    $(document).ready(function () {
    $('label.tree-toggler').click(function () {
    $(this).parent().children('ul.tree').toggle(300);
    });
    });
    </script>
    <div class="well" style="width:300px; padding: 8px 0;">
    <div style="overflow-y: scroll; overflow-x: hidden; height: 500px;">
    <ul class="nav nav-list">
    <li><label class="tree-toggler nav-header">Header 1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><label class="tree-toggler nav-header">Header 1.1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><label class="tree-toggler nav-header">Header 1.1.1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    <li class="divider"></li>
    <li><label class="tree-toggler nav-header">Header 2</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><label class="tree-toggler nav-header">Header 2.1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><label class="tree-toggler nav-header">Header 2.1.1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </li>
    </ul>
    </li>
    <li><label class="tree-toggler nav-header">Header 2.2</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    <li><label class="tree-toggler nav-header">Header 2.2.1</label>
    <ul class="nav nav-list tree">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
</div>
@stop