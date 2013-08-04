@extends('site.layouts.default')
{{-- Web site Title --}}
@section('meta-title')
{{{ "Blank" }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
Here are some common errors and their solutions:



<ul>
	<li>
		<div class="problem">
		file_put_contents(/home/ryan/MyApp6/app/storage/meta/services.json): failed to open stream: Permission denied	
		</div>
		<div class="solution">
		<pre class="prettyprint"><code>ryan@Grisbuntu:~/MyApp6$ sudo chmod -R 777 ~/MyApp6/app/storage
		</code></pre>
		</div>
	</li>



	<li>
		<div class="problem">
			Call to a member function where() on a non-object
		</div>
		<div class="solution">
			A view is not receiving an object.  Check the controller to be sure it is either nesting a sub-view or passing the correct object or collection.
			<pre class="prettyprint"><code>//Code here</code></pre>
		</div>
	</li>
	<li>
		<div class="problem">
			
		</div>
		<div class="solution">
			<pre class="prettyprint"><code>//Code here</code></pre>
		</div>
	</li>
</ul>


@stop
