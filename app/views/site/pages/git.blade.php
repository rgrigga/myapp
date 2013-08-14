@extends('site.layouts.default')
{{-- Web site Title --}}
@section('meta-title')
{{{ "Git" }}} ::
@parent
@stop
<!-- http://stackoverflow.com/questions/3549765/styling-html5-elements -->
{{-- Content --}}
@section('content')

<header>
    <h3>Git, Github, Bitcucket</h3>

// http://www.vogella.com/articles/Git/article.html
// http://www.vogella.com/articles/Git/article.html#gitpushbranch

//  In general using the stash command should be the exception in using Git. Typically you would create new branches for new features and switch between branches. You can also commit frequently in your local Git repository and use interactive rebase to combine these commits later before pushing them to another Git repository.
// Tip

// You can avoid using the git stash command. In this case you commit the changes you want to put aside and use the git commit --amend command to change the commit later. If you use the approach of creating a commit, you typically put a marker in the commit message to mark it as a draft, e.g. "[DRAFT] implement feature x".

// http://gitref.org/branching/



<p>from <a href="http://gitref.org/remotes/">http://gitref.org/remotes/</a>:</p>

<blockquote>Unlike centralized version control systems that have a client that is very different from a server, <strong>Git repositories are all basically equal and you simply synchronize between them</strong>. This makes it easy to have more than one remote repository - you can have <strong>some that you have read-only access to and others that you can write to as well</strong>.</blockquote>

<p>Using git and github provides so many benefits...</p>
<ul>
    <li>Files are backed up on the cloud</li>
    <li>You are protecting yourself from accidental deletion or changes</li>
    <li>Granular merging down to an individual line</li>
    <li>The ability to share and collaborate</li>
</ul>

<p>If you've never used git or github, don't be timid.  You'd have to try hard to break something.  There are many tutorials out there: so many that I found it a long road to weed through redundant information on each one.  As I was learning, I collected links on this page.  Hopefully it helps someone else...</p>
</header>

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
