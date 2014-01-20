<?php $q=(isset($_GET['q'])) ? $_GET['q'] : "nothing";?>

<style>
  h1,h2,p,input,.center,.page-header{
    text-align:center;
  }
</style>

<h1>md5() Rainbow Attack Demonstration</h1>

<p class="lead">AKA How to Hack a Password 'secured' with recursive md5() algorithm</p>
<p>Type any real or fake password here, or type a url in the browser, just like this:</p>
<?php $str= URL::to('/md5').'?q='.$q ?>
<p><code><?= $str ?></code></p>

<form action="/md5" method="get">
  <h1><input type="text" name="q" value=""></h1>
  <input type="submit" class="submit btn btn-success center">
</form>

<p class="center">Your last request:</p>
<h1 id="q"><?= $q ?></h1>

