@extends('layouts.bootstrap3')
@section('styles')
@parent
<style>
body{
  padding-top: 100px;
}
  h1,h2,form,.center,.page-header{
    text-align:center;
  }
</style>
@stop
<?php

function printr($data, $exit = FALSE) {
  if ($data) {
    print '<pre>';
    print_r($data);
    print '</pre>';
  }
  if ($exit) {
    exit;
  }
}
?>      

<?php $o=(isset($_GET['q'])) ? $_GET['q'] : "nothing";?>

@section('page-header')

@show
{{View::make('site.gristech.md5form')}}
@section('main')
      <div class="body container">

        <div class="middle">
        

<p>How safe is safe enough?  That may be a deep question, but a more important question is this: could your <span class="perception">perception</span> of your website's safety be different than reality? 
Is your customer's perception of the safety you are providing them different than reality...</p>

<p>Now, one of the most common practices is to jumble your password up with the <a href="http://en.wikipedia.org/wiki/MD5">md5() hashing algorithm</a>.  Your password would now look like this:</p>

<h2><?php $q=md5($o); echo $q;?></h2>

<p>We don't store your password: what we store in the database is a 'hash' similar to the value you see above.  It's a one-way 'hash', so there is no way to mathematically "reverse" it.  It is, however, a unique and definite value, which we can just look up when you log in.  The next time you type <strong>"<?= $o ?>"</strong> into our login screen, our system hashes what you typed, and we compare that hash to the one we stored in the database.</p>
<p>So far so good?  Sounds pretty secure, right?</p>
<p>The problem is, this password is easily breakable by a "rainbow table" attack.  A hacker can take a <a href="http://stackoverflow.org/tools/passwords.txt">list of common passwords</a>, compute all their hash values, and save those in a table.  Then, all they have to do is search that table for a match.  Here's a demonstration:</p>
<?php

$pwlist=array('password','password1','1234');

$hashtable=array();
foreach ($pwlist as $value) {
  $hashtable[$value]=array('level1'=>md5($value));
}

printr($hashtable);
?>

<p>This is easily defeatable.  If we can can get to your table of hashed passwords, (which we'll discuss in a moment), All we have to do is search our table for a match, and we'll get your passwords back:</p>

<?php
function find_pw($target,$table){
  echo "searching for <b>$target</b><br>";
  foreach ($table as $pw => $array) {
    $hash=$array['level1'];
    echo "$hash : ";
    if($hash == $target){
      echo "MATCH : your password is: $pw";
      echo "<hr>";
      return;
    }
    else{
      echo "No match<br>";
    }
  }
  echo "none found";
  echo "<hr>";
  return;
}

foreach ($hashtable as $pw => $array) {
  $value=$array['level1'];
  find_pw($value,$hashtable);
}
?>

<h2>Recursive Hashing</h2>

<p>Now, we could make a function that hashes the hash again, like this:</p>

<h2>Password: <?= $o ?></h2>
<h2>md5(<?=$o?>)=<?=md5($o)?></h2>
<h2>md5(<?= $q ?>)=<br>
  <?php $q=md5($q);echo $q;?>
</h2>

Now, we can do this lots of times:

<h2><?php $q=md5($q); echo $q;?></h2>
<h2><?php $q=md5($q); echo $q;?></h2>
<h2><?php $q=md5($q); echo $q;?></h2>
<h2><?php $q=md5($q); echo $q;?></h2>
<h2><?php $q=md5($q); echo $q;?></h2>

The resursive function in your website's php authentication class might look something like this:

<?php
$str=<<<'EOT'
<?php
function kindasafe($password,$n){
  for($i=1;$i<$n;$i++){
    $password = md5($password);
    echo "<h2>$password</h2>";
  }
}
kindasafe($q,11);
?>
EOT;
?>
<pre><code><?=e($str)?></code></pre>

<?php
function kindasafe($p,$n){
  for($i=1;$i<$n;$i++){
    $p = md5($p);
    echo "<h3>level $i : $p</h3>";
  }  
  return $p;
}
kindasafe($o,11);
?>
<p>That last example was 10 times.  You're thinking to yourself, "That's really complicated, so how could anyone ever decode it?  Of course not..."</p>
<p>Here's the problem: this password is still subject to a rainbow table attack, <em>because it is a unique value</em>. EVERY time you md5('<?= $o ?>'), you will get <?= md5($o); ?></p>
<p>So, it's still very simple for me to make a recursive rainbow table that analyzes your hash:</p>

<?php printr($hashtable); ?>
<p>Next, we'll feed our common passwords into this hacker code a few times:</p>
<h2>Sample 10-level Recursive Rainbow Table</h2>
<?php
$str=<<<'EOD'
for ($i=1;$i<11;$i++){
  foreach ($hashtable as $pw => $array) {
    $hash=$array['level'.$i];
    $hashtable[$pw]['level'.($i+1)]=md5($hash);
  }
}
EOD;
?>
<pre><code><?=e($str)?></code></pre>
<?php


for ($i=1;$i<10;$i++){
  foreach ($hashtable as $pw => $array) {
    $hash=$array['level'.$i];
    $hashtable[$pw]['level'.($i+1)]=md5($hash);
  }
}

printr($hashtable);
?>

<p>Now I can simply write a function to look up your password in any level I want:</p>

<p>Imagine I hacked your database, and now I have a random set of hashes from your 'secure' passwords table:</p>
<?php
//given 10 levels
$randomhashes=array();
for ($i=1;$i<10;$i++){
  $num1=rand(0,2);
  $working=array_keys($hashtable);
  $key=$working[$num1];
  //key is now a random password

  $num2=rand(1,10);
  $value=$hashtable[$key]['level'.$num2];
  //value is a random value from the $key column
  array_push($randomhashes, $value);
}
printr($randomhashes);
?>
<p>Finally, we'll look those up in each of our rainbow tables:</p>

<?php
$str=<<<'EOD'
function searchRecursive($search,$hashtable){
  foreach ($hashtable as $pw => $array) {
    foreach ($array as $key => $value) {
      if($search==$value){
        return "MATCH: password is <b>$pw</b> at <b>$key</b>";
      }
    }
  }
}

foreach($randomhashes as $search){
  echo "Looking for $search...<br>";
  echo searchRecursive($search,$hashtable);
  echo "<hr>";
}
EOD;
?>
<pre><code><?=e($str)?></code></pre>

<?php
function searchRecursive($search,$hashtable){
  foreach ($hashtable as $pw => $array) {
    foreach ($array as $key => $value) {
      if($search==$value){
        return "MATCH: password is <b>$pw</b> at <b>$key</b>";
      }
    }
  }
}

foreach($randomhashes as $search){
  echo "Looking for $search...<br>";
  echo searchRecursive($search,$hashtable);
  echo "<hr>";
}
?>

<p>All I need is one match: then I'll know what your mechanism is.  Once I know that, I can easily decode every password in your database.</p>
<h1>So what? I don't store any critical information!</h1>
<p>since most of your users probably use the same password for their email, gmail, facebook, and twitter accounts... once an attacker has the valid email/password combo, they just might have the ability to log in to all your user's other accounts.  They are at least one step closer.</p>
<p>With a little luck, hopefully they use the same password for paypal, or their bank, or I (the evil hacker) can find some other way to utilize it and GET PAID. It's true, I don't really care about whatever you are doing on your little site.  I am a thief and I want to steal money from your customers.</p>

<h3>Lesson 1: Require secure passwords?</h3>
<p>You'd think doing so will make it less likely that i will find a common match in my recursive rainbow table...</p>
<p>However, that is not good enough.  You might think, "so if every user used a secure password, then none of my passwords would appear in the tables."  Wrong - it'll just take longer, and we'll need a bigger table, but since I am so evil, I will probly still git-r-done.</p>
<p>Chances are, <strong>one</strong> of your users has a password that exists in my table.  Remember, all I need is one match.</p>

<h3>Lesson 2: don't rely on recursive hashing</h3>
<p><i>Recursive Hashing yields a FALSE perception of security, which is likely worse than no security all.  I have seen the argument that 20,000 iterations of the hash is "safe enough", but the fact is: there is no <strong>real</strong> limit to the depth of the recursive table a hacker can build.  It's not difficult to defeat 1, 10, 100, or even 1000 iterations <strong>with a home PC</strong>.  I'll bet a <strong>motivated</strong> hacker has access to better equipment than you think your recursive plan is good enough to protect against.</i></p>

<h3>Lesson 3: Do not rely on md5() at all</h3>
<p>md5 is a relatively fast hash calculation. This means an attacker can iterate through all the tables I mentioned above very quickly.  Below is a link to a pre-calculated table of over 48 Billion hashes - That's Billion with a B - that I found on google in 5 minutes.</p>
<p><a href="https://md5.darkbyte.ru/">https://md5.darkbyte.ru/</a></p>
<p>"On an NVIDIA GeForce 8400GS graphics processor, 16–18 million hashes per second can be computed. An NVIDIA GeForce 8800 Ultra can calculate more than 200 million hashes per second". <a href="http://en.wikipedia.org/wiki/MD5">http://en.wikipedia.org/wiki/MD5</a></p>
<p>The point should be clear: md5() is not secure. Historical alternatives to md5 includes SHA1, and SHA2, but those are also considered to be dead. SHA2 is better, but only because it takes longer to calculate.  By itself, it is still a unique identifier, and therefore no more secure than md5.  Most of my research recommends bcrypt or scrypt, but below I will discuss bcrypt in php5.5+...</p>
<p>To summarize, the reason that bcrypt is better is that it takes a longer time to calculate: which is not a major performance drain for your single request when verifying your stored password, but it makes it much more difficult for a hacker to defeat.</p>

<h3>Lesson 4: use a salt</h3>
<p>A "Salt" is a random, system-generated string:</p>
<?php
$salt = uniqid(mt_rand(), true);
?>
<h4><?= $salt ?></h4>
<p>That is added to your password:</p>
<?php
echo $o.$salt;
?>
<p>and then THAT is hashed,</p>
<?php
$crypt = crypt($o.$salt);
echo $crypt;
?>
<p> and then THAT is stored.  This makes reverse-mapping <em>practically</em> impossible.  It is not <em>totally</em> impossible, but it is very <em>impractical</em> to defeat, since the addition of the random salt would require a prohibitavely large rainbow table to match.  Make sense?  More complex, and slower, is better.</p>
<h2>password_hash() and password_verify() functions in php5.5+</h2>
<p>Most importantly, these are NOT unique values.  That all but eliminates the rainbow attack.</p>
<p>Here's an example:</p>

<h4>Encoding 1:</h4>
  <p>Your password: "<?= $o ?>"</p>
<?php
$str=<<<EOD
\$salted1 = password_hash("$o",PASSWORD_DEFAULT);
EOD;
?>
    <pre><code><?=e($str)?></code></pre>
  <?php
  $salted1 = password_hash($o,PASSWORD_DEFAULT);
  ?>
  <p>Your Salted Password: <?= $salted1 ?></p>

<h4>Encoding 2:</h4>
  <p>Your password: <?= $o ?></p>
<?php
$str=<<<'EOD'
$salted2 = password_hash($o,PASSWORD_DEFAULT);
EOD;
?>
    <pre><code><?=e($str)?></code></pre>
  <?php

  $salted2 = password_hash($o,PASSWORD_DEFAULT);
  ?>
  <p>Your Salted Password: <?= $salted2 ?></p>

<p>Notice we sent the same password through the same function, but we got two different results.  What that means is that it is impossible to replicate.  If we had stored hash A on our system, and a hacker tried to re-create our hash, he could not do it.</p>

<h2>Decrypting:</h2>
<p>However, given the same password, the function does return two values that are both "true".</p>
<p>
<?php
$str=<<<EOD
if (password_verify($o, $salted1)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
EOD;
?>
<pre><code><?=e($str)?></code></pre>
</p>
<p>Let's try it with your password:</p>
<h3>Decoding 1</h3>
<p>Attempting to verify '<?=$o?>'</p>
<p>Against 'salted1' : <?= $salted1 ?></p>
<h2>
  <?php
  if (password_verify($o, $salted1)) {
      echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }
  ?>
</h2>

<h3>Decoding 2</h3>
<p>Attempting to verify '<?=$o?>'</p>
<p>Against 'salted2' : <?= $salted2 ?></p>
<h2>
  <?php
  if (password_verify($o, $salted2)) {
      echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }
  ?>
</h2>
<p>How does this work?</p>
<p>Again, when you registered, we stored 'salted1' in our database. When you log in, you type your password in, and the system calculates a new salted hash, 'salted2'.</p>
<p>It extracts the password AND the salt from both hashes, and compares them with each other.</p>

<!-- <p>I think of it as an <em>internal</em> hash.  Php's password_hash() function adds a random salt to your password, and stores it <em>within</em> the returned hashed value.  When password_verify() is called, the hash contains the information php needs to decrypt and compare the two values, but since it is a 'non-unique value', it is not possible to defeat with a rainbow table.</p>
<p>In other words, php can detect if the hash made from the provided password is equivelent to the hash stored in the database, but there is no way for a hacker to directly provide, access, or decode that information.</p> -->
<p>Programmer question: if you're worried about complexity, isn't it just as simple to call password_hash() as it is to call md5()?</p>
<h4>More Reading</h4>
  <a href="http://stackoverflow.com/questions/401656/secure-hash-and-salt-for-php-passwords">stack overflow</a>
  <a href="http://php.net/manual/en/ref.password.php">php</a>

<h3>Lesson 5: consider using a library</h3>
<p>Rather than attempt to design your own security mechanism, leave it to the experts.  Test, evaluate, and seek to understand the library, but unless you are a cryptologist, lean on an expert for advice.  I realize that I am not a full-blown expert, so I choose to rely on a package for my security needs.  Ask me and I'll tell you which one.</p>

<h5>More rambling:</h5>
<p>The thinking behind this strategy is human: We are mesmarized by the big number here.  We think: "since there are 32 charchters, and 16 symbols, (0..f) then there are 32^16 combinations."   That's <?php echo number_format(pow(32,16));?> combinations. And if I do that ten times, that must be 32^16^10 combinations, right?</p>

<p>OK, Here's the huge number you want:</p>
<p><?= number_format(pow(pow(32,16),10));?></p>

<?php
$num=number_format(pow(pow(32,16),10));
$trim=str_replace(",", "", $num);
$len=strlen($trim);
?>
<p>If you're wondering, that number is <?= $len ?> digits long.  Mind-blowing, right?</p>

First of all, no... there are still only 52 cards in a deck whether you play once or play ten times.  As such, there are still only 32^16 combinations of the set (0..f).

Secondly, the logic above has absolutely nothing to do with what you think the computer is doing with that number.  This is a one-way "hash".  

Third problem: that 241 digit number is actually a small number in modern terms.   

<p>Specifically, there exists the <a href="http://en.wikipedia.org/wiki/Collision_attack">Collission Attack</a>.  To the computer, the assignment is this:</p>

<h3>Collision attack</h3>
Find two different messages m1 and m2 such that hash(m1) = hash(m2).
<h3>Chosen-prefix collision attack</h3>
<p>Given two different prefixes p1, p2 find two appendages m1 and m2 such that hash(p1 ∥ m1) = hash(p2 ∥ m2) (where ∥ is the concatenation operation).</p>

<p>If you'll just take a moment to soak in the true simplicity of the operation, and the <i>relative</i> size of the task (at 200 million hashes per second), you'll come to respect that the computer can do </p>

<p>Here is some code that will decode an md5 hash:</p>

<?php
$str=<<<'EOD'
<?php
function decode_md5($hash)
{
  //simple check for md5 hash
  if(!preg_match('/^[a-f0-9]{32}$/i',$hash))return '';

  //make request to service
  $pass=file_get_contents('http://md5.darkbyte.ru/api.php?q='.$hash);

  //not found
  if(!$pass)return '';

  //found, but not valid
  if(md5($pass)!=strtolower($hash))return '';

  //found :)
  return $pass;
}

function encode_md5($pass)
{
  //add padding, if str length eq 32
  if(strlen($pass)==32)$pass.='=';
  
  //make request to service
  return file_get_contents('http://md5.darkbyte.ru/api.php?q='.urlencode($pass));
}
?>
EOD;
?>
<pre><code><?=e($str)?></code></pre>
<?php
function decode_md5($hash)
{
  //simple check for md5 hash
  if(!preg_match('/^[a-f0-9]{32}$/i',$hash))return '';

  //make request to service
  $pass=file_get_contents('http://md5.darkbyte.ru/api.php?q='.$hash);

  //not found
  if(!$pass)return 'not found';

  //found, but not valid
  if(md5($pass)!=strtolower($hash))return 'not found';

  //found :)
  return var_dump($pass);
}

function encode_md5($pass)
{
  //add padding, if str length eq 32
  if(strlen($pass)==32)$pass.='=';
  
  //make request to service
  return file_get_contents('http://md5.darkbyte.ru/api.php?q='.urlencode($pass));
}
?>

<?php
//usage example
$md5=encode_md5('teststring');
echo 'MD5(teststring) == '.$md5."<br>\r\n";

$pass=decode_md5('d67c5cbf5b01c9f91932e3b8def5e5f8');
echo 'd67c5cbf5b01c9f91932e3b8def5e5f8 == MD5('.$pass.')';
?>

We can also do it with javascript:
<?php
$str=<<<'EOD'
<script>
function decode_md5(hash,callback)
{
  var scr=document.getElementById('md5crack');
  if(scr)document.body.removeChild(scr);
  scr=document.createElement('script');
  scr.id='md5crack';
  window.md5callback=callback;
  scr.src='http://md5.darkbyte.ru/api.php?ajax=md5callback&q='+encodeURIComponent(hash);
  document.body.appendChild(scr);
}

function encode_md5(pass,callback)
{
  if(pass.length==32)pass+='=';
  decode_md5(pass,callback);
}


//usage example
encode_md5('teststring',function(hash){
  console.log('encoded to: '+hash);
  
  decode_md5(hash,function(pass){
    console.log('decoded as: '+pass);
  });
});  
</script>
EOD;
?>
<pre><code><?=e($str)?></code></pre>

Let's try that:
<script>
function decode_md5(hash,callback)
{
  var scr=document.getElementById('md5crack');
  if(scr)document.body.removeChild(scr);
  scr=document.createElement('script');
  scr.id='md5crack';
  window.md5callback=callback;
  scr.src='http://md5.darkbyte.ru/api.php?ajax=md5callback&q='+encodeURIComponent(hash);
  document.body.appendChild(scr);
}

function encode_md5(pass,callback)
{
  if(pass.length==32)pass+='=';
  decode_md5(pass,callback);
}

//usage example
//
//

encode_md5('teststring',function(hash){
  console.log('encoded to: '+hash);
  
  decode_md5(hash,function(pass){
    console.log('decoded as: '+pass);
  });
});  
</script>



<p>So now, we will do what we came to do.  We'll submit this password to the service, and see if it comes back as a match or not.</p>

<p>Your Password: <b><?= $q ?></b></p>
<?php $hash = md5($q); ?>
<p>after md5(hash): <b><?= $hash ?></b></p>

<p>And now, send it to the service: 
<?php 

  $result=decode_md5($hash); 
  echo "<h2>Result:$result</h2>";
?>
</p>



In my opinion, it's URGENT and IMPORTANT.

Hashing is good:
http://stackoverflow.com/questions/326699/difference-between-hashing-a-password-and-encrypting-it

But md5 is broken:
http://security.stackexchange.com/questions/15790/why-do-people-still-use-recommend-md5-if-it-is-cracked-since-1996


        </div>
        <!-- /.middle -->
        <div class="col1">
          It is our responsibility to protect our user's privacy.
          Not just on our site, but all over the place.  Many (if not most) users use the same password for many different sites.  Dave called this "Password Leakage".
          <blockquote>"We don't store any financial info or anything private on our site, so it really doesn't matter to us. "<small>You</small></blockquote>
          <blockquote>"Many of your users use the same password for many other services.  So if I can break yours, chances are, I will also be able to use those passwords to do more evil things to your users.  The user will be mad at you, but what do I care?"<small>Evil Hacker</small></blockquote>
        </div>
        <!-- ./col1 -->
        <div class="col2">
          <h1>PDO:</h1>
          Here is the REASON using PDO is IMPORTANT: It's easy to make mistakes with mysql_*.  PDO allows using bound paramaters, and is the modern standard. Using bound parameters protects against SQL injection. 
          <h1>SQL Injection</h1>
          <!-- a programmer set up a query to ask a question: -->
          <!-- English: ""  -->
          <code>psudoSQL: " OR '1=1';SELECT `password` FROM 'users'"</code>
        </div>
        <!-- /.col2 -->
      </div>
      <!-- /.body -->
        <!--// <script src="js/main.js"></script>  -->

<!-- <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sons-of-obsidian"></script> -->
        <script>
        
          function fixMyOverlap(top,body){
            // alert("bam");
            $(body).css({'padding-top':($(top).height()+0)+'px'});

            $('.content-wrap') .css({'padding-top': (
                $('.user-top').height()
                 + $('.admin-top').height()
                 + 0 )+'px'
                });
          }

          $(document).ready(function(){
            fixMyOverlap();
            $('pre').addClass('prettyprint');
            $('.body').css({'padding-top':($('.top').height())+'px'});
            $('.col1').css({'top':($('.top').height()+20)+'px'});
            $('.col2').css({'top':($('.top').height()+20)+'px'});
            // $('.middle').css({'padding-top':($('.top').height())+'px'});
          });
        
        </script>
@stop
<!-- //Idea: authorization logic does not belong in this class?

//http://stackoverflow.com/questions/348109/is-double-hashing-a-password-less-secure-than-just-hashing-it-once
//http://stackoverflow.com/questions/4795385/how-do-you-use-bcrypt-for-hashing-passwords-in-php?rq=1
//http://stackoverflow.com/questions/1391613/best-way-to-encode-passwords-in-php
//http://www.codinghorror.com/blog/2007/09/youre-probably-storing-passwords-incorrectly.html
//http://www.securityfocus.com/blogs/262
//http://us1.php.net/password_hash - SEE EXAMPLE #4
//http://stackoverflow.com/questions/1581610/how-can-i-store-my-users-passwords-safely

//Bottom line: we should consider upgrading to php 5.5+, if nothing else but for the native availability of bcrypt.
//    OR: https://github.com/ircmaxell/password_compat if we have 5.3.7+

// Migration strategy:
// 1. $hash_to_store=password_hash("rasmuslerdorf", PASSWORD_DEFAULT); //store as 255 varchar
// 2. Write code to check if the user has done this.  If they have, great.
// 3. If they have not, ask them to reset their password with the new scheme.
// This will avoid the headaches of trying to convert old to new. -->