

<!-- @section('contact') -->
<div class="iconbar pull-right" style="padding-top:5px">
<!-- 	<div class="iconbutton">
		
	</div> -->
    <a href="mailto:{{$company->email}}">
        <i class="icon-envelope-alt icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
    </a>
    <a href="tel:{{$company->phone}}" class="social-icon">
        <i class="icon-phone-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/email.png" class="img-circle"> -->
    </a>
	<a href="http://facebook.com/{{$company->facebook}}" class="social-icon">
	    <!-- <img src="http://gristech.com/img/facebook.png" class="img-circle"> -->
		<i class="icon-facebook-sign icon-2x"></i>
	</a>
    <a href="http://twitter.com/{{$company->twitter}}" class="social-icon">

    	<i class="icon-twitter-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/img/twitter.png" class="img-circle"> -->
    </a>
    <a href="http://linkedin.com/{{$company->linkedin}}" class="social-icon">
    	<i class="icon-linkedin-sign icon-2x"></i>
        <!-- <img src="http://gristech.com/buttons/linkedin.png" class="img-circle"> -->
    </a>
</div>