@extends('site.layouts.company')

{{-- About Meta Tags --}}
{{-- http://en.wikipedia.org/wiki/Meta_element#Meta_element_used_in_search_engine_optimization --}}

<!-- 
Meta elements have significantly less effect on search engine results pages today than they did in the 1990s and their utility has decreased dramatically as search engine robots have become more sophisticated. This is due in part to the nearly infinite re-occurrence (keyword stuffing) of meta elements and/or to attempts by unscrupulous website placement consultants to manipulate (spamdexing) or otherwise circumvent search engine ranking algorithms.

While search engine optimization can improve search engine ranking, consumers of such services should be careful to employ only reputable providers. Given the extraordinary competition and technological craftsmanship required for top search engine placement, the implication of the term "search engine optimization" has deteriorated over the last decade. Where it once implied bringing a website to the top of a search engine's results page, for some consumers it now implies a relationship with keyword spamming or optimizing a site's internal search engine for improved performance.

Major search engine robots are more likely to quantify such extant factors as the volume of incoming links from related websites, quantity and quality of content, technical precision of source code, spelling, functional v. broken hyperlinks, volume and consistency of searches and/or viewer traffic, time within website, page views, revisits, click-throughs, technical user-features, uniqueness, redundancy, relevance, advertising revenue yield, freshness, geography, language and other intrinsic characteristics.
 -->

 {{-- Other meta tags --}}
 <!-- Robot:  -->
 <!-- You do NOT need to use either form if you DO want your pages in the search engines. Without either form, they’ll naturally index your pages and follow your links. That’s what they do. -->
<!-- <a href="  http://searchengineland.com/meta-robots-tag-101-blocking-spiders-cached-pages-more-10665">Robot Tag</a> -->

{{-- Traffic, comparison of search engines - great article! --}}
<!-- http://searchenginewatch.com/article/2276184/No.-1-Position-in-Google-Gets-33-of-Search-Traffic-Study -->


{{-- Update the Meta Title --}}

<!-- This will override the company page -->
@section('meta_title')
Buckeye Mower - Mobile Mower Services
 <!-- String::title($post->title) }}} -->
@stop

{{-- Update the Meta Description --}}

{{-- 148 charachter max, might as well make it 140.  Used by search engines, facebook, twitter, and elsewhere.  A Summary for your site.  Quick tip: just type in a tweet to test stringlength,  --}}
@section('meta_description')
<meta name="description" content="Mower Probelm? Buckeye Mower is MOBILE: we come to you!  Repair & Service your Push Mower, Riding Mower, and other small engines.  Schedule Online!" />
<!-- $post->meta_description}}}? -->
@stop

{{-- Update the Meta Keywords --}}

{{-- What is a hash tag?  http://en.wikipedia.org/wiki/Hashtag--}}
<!-- http://mashable.com/category/hashtags/ -->
<!-- http://googlewebmastercentral.blogspot.com/2009/09/google-does-not-use-keywords-meta-tag.html -->
<!-- http://searchengineland.com/meta-keywords-tag-101-how-to-legally-hide-words-on-your-pages-for-search-engines-12099 -->

<!-- Conclusion: Should You Use It? Sure, For Misspellings -->
@section('meta_keywords')
<meta name="keywords" content="Lawn Mower Repair, Lawn Mower Service" />
@stop

<!-- Styles extend those located on the main layout page (COMPANY in this case.  LESS and pre-compiled assets will be a snap when it's time.  Look into Basset and the Asset Management Branch on the starter site. -->

<!-- Design and Color Tools: see myapp.gristech.com/tools -->
<!-- //http://colorschemedesigner.com/#3711Tw0w0w0w0 -->
<!-- \@ stylesheets("public-css") -->

@section('styles')
@parent

	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css"> -->

	    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css"> -->
<style>
	body{
		background-color: green;
	}
</style>


@stop

@section('favicons')
		<!-- Favicons
		================================================== -->

<!-- http://www.jonathantneal.com/blog/understand-the-favicon/ -->

<!-- It would be great generate these on the fly.  For now, they are located in X asset file -->

<!-- http://theksmith.com/technology/howto-website-icons-browsersdevices-favicon-apple-touch-icon-etc/ -->

<!-- (this step is required for Android support, android ignores the non-pre-composed version): -->

<!-- http://demosthenes.info/blog/467/Creating-MultiResolution-Favicons-For-Web-Pages-With-GIMP -->

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<!-- <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}"> -->
		<link rel="shortcut icon" href="{{{ asset('assets/ico/buckeye/favicon.png') }}}">

@stop

@section('nav')
@include('site.partials.nav-buckeye');
@stop

{{-- Content --}}
@section('content')
<!-- @parent -->


@stop
