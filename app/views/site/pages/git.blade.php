@extends('site.layouts.default')
{{-- Web site Title --}}
@section('meta-title')
{{{ "Maintenance" }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h3>Git</h3>

Fork my example: <a href="https://github.com/rgrigga/Spoon-Knife">rgrigga/Spoon-Knife</a>

<ul>
    <li>Fork</li>
    <li>Clone</li>
    <li>Pull</li>
    <li>Push <a href="http://stackoverflow.com/questions/948354/git-push-current-branch">?</a></li>

    <li>Fetch</li>
    <li>Merge
        <ul>
            <li><a href="http://stackoverflow.com/questions/6520905/git-octopus-merge-order-of-multiple-branches">Octopus Merge</a></li>
            <li><a href="http://stackoverflow.com/questions/366860/when-would-you-use-the-different-git-merge-strategies">Different Merging strategies</a></li>
        </ul>
    </li>
</ul>

<h4>More Reading</h4>




@stop
