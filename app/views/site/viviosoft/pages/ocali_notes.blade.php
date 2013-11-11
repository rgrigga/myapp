@section('nav')
@stop

@section('main')
<div class="alert-alert-danger">
  This page has been removed.
</div>
@stop
@section('hidden')

<h1>Ocali Project</h1>
<h2>Getting Started</h2>
<p>Visit the repo:<a href="https://bitbucket.org/ocali_repo/ocali">https://bitbucket.org/ocali_repo/ocali</a></p>
<p><code>{{{"ryan@Grisbuntu:~/viviosoft$ git clone https://rgrissinger@bitbucket.org/ocali_repo/ocali.git"}}}
</code></p>

<h2>Set up local webserver</h2>
<p>Add an entry to hosts file:</p>
<pre>{{{'
sudo nano /etc/hosts
'}}}</pre>
<h2>/etc/hosts:</h2>
<pre>{{{'
# My Virtual Hosts

127.0.0.1       localhost
127.0.1.1       grisbuntu
127.0.1.2       gristech.dev
127.0.1.3       buckeye.dev
...
127.0.1.12      olac.dev
'}}}</pre>

<p>Next, create a configuration file for the new site:</p>
<pre>{{{"
cd /etc/apache2/sites-available
sudo cp myapp.dev.conf olac.dev.conf
sudo nano olac.dev.conf
"}}}</pre>

<h3>/etc/apache2/sites-available/olac.dev.conf</h3>
<pre>{{{'
<VirtualHost *:80>
    DocumentRoot /home/ryan/viviosoft/ocali/OLAC
    ServerName olac.dev

        RewriteEngine On

        <Directory "/home/ryan/viviosoft/ocali/OLAC">
          Options Indexes Includes FollowSymLinks MultiViews
          AllowOverride all
          # Order allow,deny
          # Allow from all
          Require all granted
        </Directory>

    # Other directives here
</VirtualHost>
'}}}</pre>
<p>Enable the new site</p>
<pre>{{{'
sudo a2ensite olac.dev
'}}}</pre>
<p>Reload the web server</p>
<pre>{{{'
sudo service apache2 reload
'}}}</pre>
<p>visit <a href="http://olac.dev">olac.dev</a></p>

<p>It works!</p>

<p>Next up, the database:</p>
<h1>Database</h1>
<p>I headed to 127.0.0.1/phpmyadmin and logged in</p>
<p>I clicked "import", chose the file: <code>lms_lead.sql</code>, and clicked the go button.</p>
<p class="error">No data was received to import. Either no file name was submitted, or the file size exceeded the maximum size permitted by your PHP configuration. See FAQ 1.16.</p>
<p>Sure enough, phpmyadmin shows the max file sizeas 2048KiB, but the sql file I was trying to import was 4.8MB</p>
<p>To fix this... I am reconfiguring my php.ini</p>
<pre>{{{'
sudo nano /etc/php5/apache2/php.ini
'}}}</pre>
<p>Changing <code>upload_max_filesize = 2M</code> to <code>upload_max_filesize = 20M
</code>.  Please note that <code>post_max_size = 8M</code>
</p>
<p>Now that that's completed, reload apache</p>
<pre>{{{'
sudo service apache2 reload
'}}}</pre>
<p>Try the file upload again.  phpmyadmin -> import -> click "Choose file" -> choose your file -> click "go"</p>
<p class="success">Import has been successfully finished, 261 queries executed. (lms_lead.sql)</p>

<h2>DB Config</h2>
<p>here are 2 possible solutions:</p>
<p>A: add a user via phpmyadmin</p>
<p>B: modify the config file:</p>
<p><b>ocali/a_db/db_sql_lms_olac.php</b></p>
<pre>
$gnocore_db_sql_user = 'local_lms_lead';
$gnocore_db_sql_pass = 'local_lms_lead_470$';
$gnocore_db_sql_name = 'lms_lead';
$gnocore_db_sql_host = 'localhost';
</pre>
<p>Personally, I chose to add a new local user, thereby avoiding any alteration of the config file.</p>

<h3>Problem 1:</h3>
<img src="{{asset('assets/viviosoft/olac1.png')}}" alt="">

<h4>Solution:</h4>
<p>There is a problem parsing short tags.  To fix this, set <code>short_open_tag=On</code> in php.ini.</p>
<p>Better yet, add this to olac.dev.conf:</p>
<p><code>php_value short_open_tag 1</code></p>
<p>This way, I've fixed this project, but my default php.ini will enforce the stricter best practice for other projects.  <a href="http://stackoverflow.com/questions/200640/are-php-short-tags-acceptable-to-use">More reading on short tags</a></p>
<h3>Problem 2:</h3>
<pre>ERROR CODE: 8192

An error occurred in script /home/ryan/viviosoft/ocali/OLAC/inc/inc_lib/lib_sql/ez_sql_mysql.php on line 81:

mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead</pre>
<p>Note: According to my research, working around this in this way is a temporary solution, and may represent an SQL injection security risk.: mysqlconnect has been depreciated for a reason.</p>
<p>More info on this topic:</p>
<ul>
	<li><a href="http://stackoverflow.com/questions/13944956/the-mysql-extension-is-deprecated-and-will-be-removed-in-the-future-use-mysqli">http://stackoverflow.com/questions/13944956/the-mysql-extension-is-deprecated-and-will-be-removed-in-the-future-use-mysqli</a></li>
	<li><a href="http://php.net/manual/en/function.error-reporting.php">http://php.net/manual/en/function.error-reporting.php</a></li>
</ul>
<h3>Solution</h3>
<p>I changed line 38 of <b>ocali/OLAC/inc/gnocore_functions</b> from this:</p>
<p><pre><code>if ($e_number != E_STRICT) {</code></pre></p>
<p>to this:</p>
<p><pre><code>if (($e_number != E_STRICT)&&($e_number != E_DEPRECATED)) {</code></pre></p>
<p>The result is that 8192 errors will no longer occur.</p>

<h3>Problem 3</h3>
<pre><code>ERROR CODE: 2

An error occurred in script /home/ryan/viviosoft/ocali/OLAC/inc/gnocore_config.php on line 56:

require_once(a_gnoshare_boot.php): failed to open stream: No such file or directory</code></pre>
<h4>Solution</h4>
<p>modify <b>ocali/OLAC/inc/gnocore_config.php</b> ~line 56</p>
<pre><code>// require_once('a_gnoshare_boot.php');
require_once('../a_gnoshare/a_gnoshare_boot.php');</code></pre>

<h3>Problem 4</h3>
<pre>ERROR CODE: 2

An error occurred in script /home/ryan/viviosoft/ocali/a_gnoshare/a_gnoshare_boot.php on line 20:

require_once(/Applications/XAMPP/xamppfiles/htdocs/OCALI/a_gnoshare/gnoshare_template/a_gnoshare_template_boot.php): failed to open stream: No such file or directory</pre>
<h4>Solution</h4>
<p>Modify <b>ocali/a_gnoshare/a_gnoshare_boot.php</b> ~line 5:</p>
<pre><code>// define('GNOSHARE_PATH_ABSOLUTE','/Applications/XAMPP/xamppfiles/htdocs/OCALI/a_gnoshare/');
define('GNOSHARE_PATH_ABSOLUTE','../a_gnoshare/');</code></pre>

<h1>FINISHED</h1>
<p>Here's the end result:</p>
<img src="{{asset('assets/viviosoft/olac-dev.png')}}" alt="">


<h1>Left Slider Menu</h1>
<p>Prototype demo is here: <a href="http://myapp.gristech.com/viviosoft/demo/olac">http://myapp.gristech.com/viviosoft/demo/olac</a></p>

<section>
	<p>Code like this is dificult to work with:</p>
<?php 
$str=<<<'EOT'
	require_once('inc/gnocore_form_build.php');
	get_form_top ('search.php','form_search_top','Search','0');
	get_form_input ('0','20','200','','search_site','Enter Search Terms');
	echo '<input class="form_submit" type="submit" name="submit" value="Search" />';
	echo '</fieldset>';
	echo '</form>';
EOT;
?>
	<pre>{{{$str}}}</pre>
</section>
<p>The form is opened in an external file.  Not to mention all the HTML is being echo'd like this.  Difficult to read, difficult to understand.</p>

@stop
