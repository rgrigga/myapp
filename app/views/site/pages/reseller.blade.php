@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
 :: {{{ "Reseller" }}} :: Google Apps
@stop

@section('google')
@parent
<meta name="google-site-verification" content="MDmmPWcnfgrGGWK9qZavWe3BYBPkzeScRj9KttTy03Y" />
@stop
{{-- Content --}}
@section('content')

Welcome to the reseller page.

<gcse:search></gcse:search>

The 

@stop
