<h3>SSH Access to </h3>
<p>Once you have this set up, here are the commands I use to connect:</p>

<pre class='prettyprint'><code>
~/.ssh$ ssh-add siteground_dsa
~/.ssh$ ssh gristech@siteground252.com -p18765
</code></pre>

<pre class="prettyprint"><code>
"ryan@Grisbuntu:~/.ssh$ ssh-add siteground_dsa
Enter passphrase for siteground_dsa: //Your password here
Identity added: siteground_dsa (siteground_dsa)
"ryan@Grisbuntu:~/.ssh$ ssh gristech@siteground252.com -p18765
Last login: Thu Jun 27 05:59:12 2013 from 69.47.54.196
gristech@serv01 [~]# 
</code></pre>


<h3>File Permissions</h3>
<p>File permisisons are according to 2 groups:
<ul>
	<li>Users</li>
	<li>Groups</li>	
</ul></p>

<p><strong>Users</strong> are individuals.</p>
<p><strong>Groups</strong>are obviously groups.</p>

<p>It is as clear a case of "one" and "many" as any ever was.</p>

<section class="idea">
	<h4>Idea</h4>
	<p></p>
</section>

<p>Groups can have many Users.  Users can belong to many groups.  Therefore, the releationship between Users and Groups can be called "Many to Many".</p>



