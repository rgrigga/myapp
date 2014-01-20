
@section('main')
@parent

<h1>LESS, a CSS Preprocessor</h1>

<?php
$str=<<<'EOD'
@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

	<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>
@stop
EOD;
?>
<pre><code><?=e($str)?></code></pre>


@stop

@section('styles')
@parent
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/master.less" />

	<!-- This display's the company's less page -->
	<link rel="stylesheet/less" type="text/css" href="/assets/css/less/{{strtolower($company->brand)}}.less" />

	<script src="/assets/js/less.js" type="text/javascript"></script>
@stop