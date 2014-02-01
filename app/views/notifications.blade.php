
<!-- <h1>BAM BAM</h1> -->
@if (count($errors->all()) > 0)
<div class="alert alert-error alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	Please check the form below for errors
</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Success</h4>
    @if(is_array($message))
        @foreach ($message as $m)
            {{ $m }}
        @endforeach
    @else
        {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-error alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Warning</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Info</h4>
    @if(is_array($message))
    @foreach ($message as $m)
    {{ $m }}
    @endforeach
    @else
    {{ $message }}
    @endif
    <span class="pull-right">psst: this is session::get('info')</span>
</div>
@endif

@if ($message = Session::get('message'))
<div class="alert alert-info alert-block alert-dissmissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Info</h4>
    @if(is_array($message))
        @foreach ($message as $m)
        {{ $m }}
        @endforeach
    @else
        {{ $message }}
    @endif

    <div class="pull-right badge">views/notifications @ session::get('message')</div>
</div>
@endif

{{--
@if (Session::has('message'))
    
    <div class="flash alert">
      <button type="button" class="close" data-dismiss="alert"> &times;</button>
      <p>{{ Session::get('message') }}</p>
    </div>

@endif

@if (Session::has('mymessage'))

    <div class="flash alert alert-info">
      <button type="button" class="close" data-dismiss="alert"><span class="label label-info">Info</span> &times;</button>
      <p>{{ Session::get('mymessage') }}</p>
      <!-- {{var_dump($_SESSION);}} -->
    </div>

@endif
--}}