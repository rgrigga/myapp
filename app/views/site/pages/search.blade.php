@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
 / {{{ "Search" }}}
@stop

@section('nav')
<!-- Hello nav! -->
<!-- site.partials.nav-buckeye -->
<!-- site.partials.nav-top -->
<!-- site.partials.nav-top-inverse -->
<!-- site.partials.nav-top-min -->
<!-- site.partials.nav-company -->
<!-- site.partials.nav-buckeye -->
@include('site.partials.nav-top')
@stop

{{-- Content --}}
@section('content')

<h1>Search</h1>
<p>This is a collection of search engine tools.</p>
<h2>Google Custom Search</h2>

<!-- // <script> -->
<!-- //This is the google search tool -->
<!--   (function() {
    var cx = '012277204628171564007:sik_hha9myk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })(); -->
<!-- </script> -->
<!-- <gcse:search></gcse:search>
 -->

<gcse:search></gcse:search>

<h2>And another one:</h2>
<ul>
    <li>
        <a href="http://www.google.com/cse/create/getcode?cx=012277204628171564007%3Awxynsgsirww">http://www.google.com/cse/create/getcode?cx=012277204628171564007%3Awxynsgsirww</a>
    </li>
    <li>
        <a href="https://developers.google.com/custom-search/docs/element">https://developers.google.com/custom-search/docs/element</a>
    </li>
</ul>

<script type="text/javascript" charset="utf-8">
    $(prettyPrint);
</script>

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

<pre class="prettyprint"><code>
<!-- <script> -->
  (function() {
    var cx = '012277204628171564007:wxynsgsirww';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
<!-- </script> -->
<!-- <gcse:search></gcse:search> -->
</code></pre>

<script>
  (function() {
    var cx = '012277204628171564007:wxynsgsirww';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>



<p>Here's a blog post about it: <a href="http://www.wired.com/wiredenterprise/2012/12/solar-elasticsearch-google/2/">http://www.wired.com/wiredenterprise/2012/12/solar-elasticsearch-google/2/</a>.  That led to these:</p>
<ul>
    <li>
        <a href="http://www.elasticsearch.org/overview/">ElasticSearch</a>
    </li>
    <li>
        <a href="http://lucene.apache.org/solr/">Solr</a>
    </li>
</ul>

<div>One day: <a href="http://searchengineland.com/oh-good-grep-web-grepper-a-new-web-intelligence-feature-from-blekko-92730">Grep this site, or any site for that matter.  Think about that for a moment.</a></div>

@stop


