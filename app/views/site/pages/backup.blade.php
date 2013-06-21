@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ "Maintenance" }}} ::
@parent
@stop

{{-- Content --}}
@section('content')






<h2>Why are Website Backups so Important?
</h2>

<p>
	1. It’s not your web host’s responsibility to make back ups available to you.
A surprising number of web hosts don’t back up your website regularly. Of the few that do, most of them simply do so for their own protection and don’t make the files available to their customers.

2. Storing the original development site isn’t enough.
If you developed your site on a test server, or your local computer, you may think that’s enough to protect you. However, over time, websites are tweaked and changed and those changes often won’t be reflected in the original version. If you run a forum, blog or CRM system, much of your valuable content is uploaded by your users, and won’t exist in any other place than on your website.

3. You need to be ready to react quickly.
Having an up to date back up in place will allow you to get back online quickly after a mishap. There are many reasons why you need to get your website back online quickly including loss of income and potential SEO penalties (according to some sources).

4. Peace of mind.
Before I started backing up my websites, it was always on my mind that I needed to do something. It was my responsibility and I’d be letting a lot of people down if I lost the latest version of my site.

5. It’s your protection against viruses.
Web hosts don’t tend to proactively run virus and malware scanners against your website. Therefore, keeping a backup may be your easiest, and best protection; allowing you to turn back the clock after an attack. While this doesn’t prevent attacks, it does cure them when needed.
</p>


@stop
