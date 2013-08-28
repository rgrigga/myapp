<!DOCTYPE html>
<html>
	<head>
	    <title>Bootstrap Mixins Demo</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- @ stylesheets('bs3-css') -->
		@stylesheets('gristech')

		<link rel="stylesheet/less" type="text/css" href="assets/css/less/demo.less" />
		<script src="assets/js/less.js" type="text/javascript"></script>
		
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	    <!-- <link href="assets/dist/css/bootstrap.css" rel="stylesheet" media="screen"> -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
<style>
	.container {
  padding-left: 15px;
  padding-right: 15px;
}

h4 {
  margin-top: 25px;
}
.row {
  margin-bottom: 20px;
}
.row .row {
  margin-top: 10px;
  margin-bottom: 0;
}
[class*="col-"] {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: #eee;
  border: 1px solid #ddd;
  background-color: rgba(86,61,124,.15);
  border: 1px solid rgba(86,61,124,.2);
}

hr {
  margin-top: 40px;
  margin-bottom: 40px;
}
</style>


	</head>
  <body>
    <div class="container">

      <div class="page-header">
        <h1>Modified Bootstrap 3 Grid Examples</h1>
        <h2>Now with Mixins!</h2>
        <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
        <p>I copied Bootstrap's Example, and applied LESS mixins to structure and style a couple of boxes here:</p>
      </div>

<div class="wrapper">
  <div class="content-main">main...</div>
  <div class="content-secondary">secondary...</div>
</div>
<hr>
<p>Here is a little bit of the code you need to do this on your own.  If you're not a devloper, don't panic: <b>I taught my 8-year old son to do this!</b></p>

<div class="wrapper">
<h3>html</h3>
  <pre class="prettyprint">
{{e('
<div class="wrapper">
  <div class="content-main">main...</div>
  <div class="content-secondary">secondary...</div>
</div>
')}}
  </pre>
</div>

<p>That's it!  Notice there is very little HTML.  This is <b>symantic</b>, meaning it is easy to read and understand.  This HTML is structured around <em>what it is</em>, not <em>how it should look</em>.</p>

<p>Our visual structure and colorful styles are kept seperate:</p>
<div class="wrapper">
	<div class="">
    <h3>demo.less :</h3>
<pre class="prettyprint"><code>
// colors
@carrot:#e67e22;
@sunflower:#f1c40f;

.wrapper {
  .make-row();
}
.content-main {
	background-color: @sunflower;
	.make-xs-column(6);
	.make-md-column(8);
}
.content-secondary {
	background-color: @carrot;
  	
 	.make-xs-column(6);

 	.make-md-column(3);
 	.make-md-column-offset(1);
}
</code></pre>
  </div>
</div>
<p>This is only the tip of the iceberg.  But using just these few lines of code, we can make major structural changes, like moving sidebars, headers, footers, and widgets around the page, not to mention managing and changing colors, themes, and so on.  It's QUICK and EASY to make changes: and it creates a situation where a non-programmer can change it around.</p>


<p>That's all I have to say, other than this: it took me a while to get the hang of this due to some big holes in the docs.  That is sad, because now that I get it, I feel like this is one the first things we should learn.  It's a bridge between Development and Design.</p>

<p>Below, you can enjoy the original bootstrap example:</p>

<p>PS: thanks to <a href="http://flatuicolors.com/">flatuicolors.com</a></p>



<hr>

      <h3>Three equal columns</h3>
      <p>Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
      <div class="row">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Three unequal columns</h3>
      <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
      <div class="row">
        <div class="col-md-3">.col-md-3</div>
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-3">.col-md-3</div>
      </div>

      <h3>Two columns</h3>
      <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
      <div class="row">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <h3>Full width, single column</h3>
      <p class="text-warning">No grid classes are necessary for full-width elements.</p>

      <hr>

      <h3>Two columns with two nested columns</h3>
      <p>Per the documentation, nesting is easy—just put a row of columns within an existing row. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
      <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
      <div class="row">
        <div class="col-md-8">
          .col-md-8
          <div class="row">
            <div class="col-md-6">.col-md-6</div>
            <div class="col-md-6">.col-md-6</div>
          </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
      </div>

      <hr>

      <h3>Mixed: mobile and desktop</h3>
      <p>The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
      <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
      <div class="row">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-6">.col-xs-6 .col-md-6</div>
        <div class="col-xs-6 col-md-6">.col-xs-6 .col-md-6</div>
      </div>

      <hr>

      <h3>Mixed: mobile, tablet, and desktop</h3>
      <p></p>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-lg-8">.col-xs-12 .col-lg-8</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
        <div class="col-xs-6 col-sm-4 col-lg-4">.col-xs-6 .col-sm-4 .col-lg-4</div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-lg-6">.col-xs-6 .col-sm-6 .col-lg-6</div>
        <div class="col-xs-6 col-sm-6 col-lg-6">.col-xs-6 .col-sm-6 .col-lg-6</div>
      </div>


<!-- 		<article>
			<h1>Article</h1>
			<section class="main">
				section.main
			</section>
			<aside>
				aside
			</aside>
		</article> -->


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




<!-- //this set needs to call jquery, then bootstrap -->

	</body>
</html>