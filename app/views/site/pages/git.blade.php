@extends('site.layouts.default')
{{-- Web site Title --}}
@section('meta-title')
{{{ "Git" }}} ::
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
        <ul>
            <li><a href="http://stackoverflow.com/questions/4843881/updating-branches-using-git-pull">Updating branches using git pull</a></li>
        </ul>
    <li>Push <a href="http://stackoverflow.com/questions/948354/git-push-current-branch">?</a></li>

    <li>Fetch</li>
        <ul>
            <li><a href="http://stackoverflow.com/questions/15032159/git-fetch-fetch-head-and-origin-master">Fetch, Fetch Head, Origin Master</a></li>
        </ul>
    <li>Branching</li>
        <ul>
            <li><a href="https://sandofsky.com/blog/git-workflow.html">Git Workflow</a></li>
            <li><a href="http://git-scm.com/book/en/Git-Branching-Basic-Branching-and-Merging">3.2 Branching and Merging</a></li>
            <li><a href="http://gitref.org/branching/">GitRef.org/branching</a></li>
        </ul>
    <li>Merge
        <ul>
            <li><a href="http://stackoverflow.com/questions/6520905/git-octopus-merge-order-of-multiple-branches">Octopus Merge</a></li>
            <li><a href="http://stackoverflow.com/questions/366860/when-would-you-use-the-different-git-merge-strategies">Different Merging strategies</a></li>
            <li><a href="http://www.atlassian.com/git/tutorial/git-branches#!merge">Atlassian Tutorial</a></li>
        </ul>
    </li>
</ul>

<h4>More Reading</h4>




@stop
