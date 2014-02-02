
<!-- <h1>BAM BAM</h1> -->
@if (count($errors->all()) > 0)
<div class="alert alert-danger alert-error alert-block alert-dissmissable">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Error</h4>
	Please check the form below for errors
    <div class="pull-right badge">views/notifications @ session::get('error')</div>

</div>
@endif

@foreach (['success','warning','danger','info','message','error','notice'] as $value)
    @if ($message = Session::get($value))
    <div class="alert alert-{{$value}} alert-block alert-dissmissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>{{$value}}</h4>
        @if(is_array($message))
            @foreach ($message as $m)
                {{ $m }}
            @endforeach
        @else
            {{ $message }}
        @endif
    <div class="pull-right badge">session::get('{{$value}}')</div>
    </div>
    @endif
@endforeach


        @if(!Auth::check())
        <div class="alert alert-info alert-dismissable"><button type="button" class="close" aria-hidden="true" data-dismiss="alert">&times;</button>You are not signed in.</div>
        @endif

        
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" aria-hidden="true" data-dismiss="alert">&times;</button>
                {{ Session::get('success') }}
                <div class="pull-right badge">views/notifications @ session::get('success')</div>
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