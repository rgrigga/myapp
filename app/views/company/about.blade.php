<div class="about" id="about" name="about">
  <a class="btn btn-large" href="tel:7405076198"><h2>{{{preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $company->phone)}}}</h2></a>
	
	<h1>{{{$company->name}}}</h1>
	<h2>{{{$company->slogan}}}</h2>
	<p>{{{$company->description}}}</p>
	<!-- <h3>Company Asset Directory:  -->
		{{--{$company->directory()}--}}
	<!-- </h3> -->
	<img src="{{{asset('assets/'.strtolower($company->brand).'/'.$company->image)}}}" alt="logo">
	@if(Auth::user('admin'))


<!-- http://stackoverflow.com/questions/5872096/function-to-add-dashes-to-us-phone-number-in-php -->
	<!-- <p></p> -->

	@endif
</div>
