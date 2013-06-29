@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ "Maintenance" }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<script>
  (function() {
    var cx = '012277204628171564007:sik_hha9myk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>


And, another one:
<!-- http://www.google.com/cse/create/getcode?cx=012277204628171564007%3Awxynsgsirww -->
<!-- https://developers.google.com/custom-search/docs/element -->
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
<gcse:search></gcse:search>


@stop
