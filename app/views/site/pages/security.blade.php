@extends('site.layouts.default')
<!-- // @ extends('site.layouts.default') -->
<?php
// var_dump($company);
?>


@section('main')


<style type="text/css">

.HL	{background: #ffff00;
color: #000000;}


/* ============================================================================================================================
== OVER THOUGHT BUBBLE, EMPTY, WITH BORDER (more CSS3)
** ============================================================================================================================ */

.oval-thought-border {
	position:relative; 
	padding:70px 30px;
	margin:1em auto 80px;
	border:10px solid #c81e2b; 
	text-align:center;
	color:#333; 
	background:#fff;
	/* css3 */
	/*
	NOTES:
	-webkit-border-radius:240px 140px; // produces oval in safari 4 and chrome 4
	-webkit-border-radius:240px / 140px; // produces oval in chrome 4 (again!) but not supported in safari 4
	Not correct application of the current spec, therefore, using longhand to avoid future problems with webkit corrects this
	*/
	-webkit-border-top-left-radius:240px 140px;
	-webkit-border-top-right-radius:240px 140px;
	-webkit-border-bottom-right-radius:240px 140px;
	-webkit-border-bottom-left-radius:240px 140px;
	-moz-border-radius:240px / 140px;
	border-radius:240px / 140px;
}

/* creates the larger circle */
.oval-thought-border:before {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-40px; 
	right:100px; 
	width:50px; 
	height:50px;
	border:10px solid #c81e2b;
	background:#fff;
	/* css3 */
	-webkit-border-radius:50px;
	-moz-border-radius:50px;
	border-radius:50px;
    /* reduce the damage in FF3.0 */
    display:block; 
}

/* creates the smaller circle */
.oval-thought-border:after {
	content:""; 
	position:absolute; 
	z-index:10; 
	bottom:-60px; 
	right:50px; 
	width:25px; 
	height:25px; 
	border:10px solid #c81e2b;
	background:#fff;
	/* css3 */
	-webkit-border-radius:25px;
	-moz-border-radius:25px;
	border-radius:25px;
    /* reduce the damage in FF3.0 */
    display:block; 
}

	@font-face
	{
/*	font-family: myFirstFont;
	src: src: url('http://www.w3schools.com/css3/Sansation_Light.ttf');
	     url('Sansation_Light.eot');  IE9 */
	
font-family: 'Fauna One', serif;

	}
</style>

<!-- http://stackoverflow.com/questions/522928/can-you-do-this-html-layout-without-using-tables -->
<!-- http://css-tricks.com/centering-in-the-unknown/ -->
<style>
/*.ghost {*/
   /*display: table;*/
   /*width: 100%;
   /*height: 100%;*/
/*}*/
/*.ghost-inner {*/
   /*display: table-cell;*/
   /*text-align: center;*/
   /*vertical-align: middle;*/
/*}*/


</style>

<a href="http://www.instantssl.com/ssl-certificate-support/guides/ssl-certificate-introduction.html?key5sk1=04e45f8393c8b9a466f586ba879e903ab8df13e2&key5sk2=&key5sk3=1375074410000&key6sk1=&key6sk2=CH280150071&key6sk3=8&key6sk4=en-us&key6sk5=GB&key6sk6=0&key6sk7=Google&key6sk8=117700&key6sk9=19201200&key6sk10=true&key6sk11=b75d10e3ef456c691c5f5b98ff160e79fb4ed139&key7sk1=16588&key1sk1=ors&key1sk2=Google">What is SSL</a>

	Search Wikipedia
	
    <p>Ideas: Please crack the super-secret password to continue: </p>
    <a href="http://arstechnica.com/security/2013/05/how-crackers-make-minced-meat-out-of-your-passwords/"></a>

<div class="row">

	<div class="span4">
			<h1>MyApp Security</h1>

<h2>Passwords</h2>
<img src="" alt="">
<p class="title">Take the <a href="https://howsecureismypassword.net/">Password Security Test</a></p>

<p>Passwords are not very secure.  Nowadays, hackers can hack passwords with relative ease.  Read a little about <a href="http://www.joeydevilla.com/2013/04/15/how-to-mine-bitcoins-for-fun-and-probably-very-little-profit/">bitcoin mining</a> sometime: bitcoin transactions are verified by "cracking hashes".</p>

<img src="assets/img/screen/bitcoin.png" alt="Diagram of a bitcoin">

<p>The lesson as applied to your password is that there are those who can crack it if they want to.</p> 
<!-- http://www.joeydevilla.com/wordpress/wp-content/uploads/2013/04/bitcoin-diagram.jpg -->
<!-- http://bitcoin.org/bitcoin.pdf -->

<p>Here are some more links:</p>
<ul>
	<li><a href="http://lifehacker.com/5966214/how-often-should-i-change-my-passwords">How Often to Change Passwords?</a></li>
</ul>

<div class="thumbnail"><img src="assets/img/screen/bitcoinmining.png" alt="mining rig"></div>

<h2>Laravel</h2>
<p>Here's what Laravel has to say about it:</p>
<div class="thumbnail">
	<a href="http://four.laravel.com/docs/security">four.laravel.com/docs/security</a>
	<blockquote>
		
	</blockquote>
</div>

		<h2>Users, Groups</h2>
		<a href="http://stackoverflow.com/questions/129677/whats-the-best-method-for-sanitizing-user-input-with-php">Security Quesiton</a>

<div class="nav">
	<div class="nav-inner">
		<ul>
			<li>foo</li>
			<li>bar</li>
		</ul>
	</div>
</div>

	</div>

	<div class="span4">
		<div class="oval-thought-border">
			<!-- <ul> -->
			Consider each group of people:
				<h3>Ownership</h3>
				<h3>Management</h3>
				<h3>Employees<h3>
				<h3>Customers<h3>
				<h3>Clients<h3>
				<h3>Partners<h3>
				<h3>Robots</h3>
				<p>(Good and Evil)</p>
			<!-- </ul>		 -->
		</div>
	</div>



	<div class="span4 bottom">
		<!-- <div class="ghost-inner"> -->
<table>
	<tr>
		<td style:"vertical-align:bottom">
						<p>Good business relies on good communication with and between each of these groups, and therefore your communications needs, relies on <b>sending</b> and <b>receiving</b> information from each of these <b>groups</b>.  Each group has a different need... but there will be situations when you can bring better service to your client by exchanging secure information.  </p>

						<p>A few examples are:
						</p>

						<ul>
							<li>Passwords</li>
							<li>Financial Data</li>
							<li>Agreements/Contracts</li>
							<li></li>
						</ul>


						<p>A different audience requires different presentation.  One example is the technical information required to be exchanged between Developers during a project.  The content of this article, for example, is probably not appropriate for common display to most people in the customers group.</p> 
			<p class="muted credit"><span class="HL">Thank you <a href="http://css-tricks.com/centering-in-the-unknown/">CSS Tricks!</a></span></p>
		<!-- </div> -->
		</td>
	</tr>
</table>


	</div>

<img src="asset('assets/gristech/password.png')" alt="">

<a href="http://www.instantssl.com/ssl-certificate-products/https.html">What is https?  How does SSL work?</a>

</div>
<!-- row -->
<div class="row">
	<div class="span8 offset2">
		Now, each of these groups can also be thought of as a market... more on that later.  For now, when I say the word, "market", I hope you take a moment to think of how groups apply to marketing for your industry.  An example form Real Estate: Buyers, Sellers, Loan Officers, Title Contacts... A web applicaiton might have some specific functionality for the people in those groups to look at.  

Now, these same

However, it is important that brand messaging and policy is consistent amongst each of these groups.  It is also important that pieces of the system that apply to X group remain functional and transferrable (or extendable) into Y group at a later date.   

<section>
	<pre><code>
<h3>Linux Security</h3>

<a href="http://www.linuxhaxor.net/2007/11/21/10-basic-linux-security-tips-to-implement/
">10 Basic Linux Security Tips to Implement </a>
The following is a list of rules and tips you might find useful in dealing with basic security concerns:

1. Avoid doing your regular jobs when you are logged in as root. This reduces the risk of getting a cuckoo egg or a virus and protects you from your own mistakes.

2. If possible, always try to use encrypted connections to work on a remote machine. Using SSH (secure shell) to replace telnet, ftp, rsh, and rlogin should be standard practice.

3. Avoid using authentic method based on ip address alone.

<a href="http://www.linuxsecurity.com/component/option,com_whitepaper/id,9/"></a>
<h2>Exploiting the Potential of Linux</h2>
<p>Linux is ideally suited as an enterprise-class operating system for many reasons. One is its reliability. Linux systems offer mainframe-class stability with reported system uptimes of a year or more. Google, one of the Internet's foremost search engines, runs on Linux servers and has run continuously for more than one-and-a-half years without any downtime, according to Google Chairman Eric Schmidt.</p>

</code></pre>
</section>

<h3>OUT OF PLACE:</h3>
 Ubuntu Desktop Guide » Files › Tips and questions »

<p class="muted credit">Abridged & annotated from:</p>
<a href="http://www.openssh.org/">
<h2>OpenSSH</h2>
</a> 

OpenSSH is a FREE version of the SSH connectivity tools that technical users of the Internet rely on. Users of telnet, rlogin, and ftp may not realize that <span class="HL">their password is transmitted across the Internet unencrypted, but it is.</span> OpenSSH encrypts all traffic (including passwords) to <span class="HL">effectively eliminate eavesdropping, connection hijacking, and other attacks.</span> Additionally, OpenSSH provides secure tunneling capabilities and several authentication methods, and supports all SSH protocol versions.
	</div>
</div>

The OpenSSH suite replaces rlogin and telnet with the ssh program, rcp with scp, and ftp with sftp. Also included is sshd (the server side of the package), and the other utilities like ssh-add, ssh-agent, ssh-keysign, ssh-keyscan, ssh-keygen and sftp-server.

OpenSSH is developed by the OpenBSD Project. The software is developed in countries that permit cryptography export and is freely useable and re-useable by everyone under a BSD license. However, development has costs, so if you find OpenSSH useful (particularly if you use it in a <b>commercial system that is distributed</b>) please consider donating to help fund the project.

OpenSSH is developed by two teams. One team does strictly OpenBSD-based development, aiming to produce code that is as clean, simple, and secure as possible. We believe that simplicity without the portability "goop" allows for better code quality control and easier review. The other team then takes the clean version and makes it portable (adding the "goop") to make it run on many operating systems -- the so-called -p releases, ie "OpenSSH 4.0p1".

We sell OpenSSH T-shirts and posters. Sales of these items also help to fund development. Donations and other contributions have come entirely from end-users.

<div class="kilo">
	<p>
		Please take note of our Who uses it page, which list just some of the vendors who incorporate OpenSSH into their own products -- as a critically important security / access feature -- instead of writing their own SSH implementation or purchasing one from another vendor. This list specifically includes companies like Cisco, Juniper, Apple, Red Hat, and Novell; but probably includes almost all router, switch or unix-like operating system vendors. <b>In the 10 years since the inception of the OpenSSH project, these companies have contributed not even a dime of thanks in support of the OpenSSH project (despite numerous requests).</b>
	</p>
</div>

<p>
OpenSSH is a <b>FREE</b> version of the SSH connectivity
tools that technical users of the Internet rely on.
Users of telnet, rlogin, and ftp may not realize
that their password is transmitted across the Internet unencrypted, but it is.
OpenSSH encrypts all traffic (including passwords) to effectively
eliminate eavesdropping, connection hijacking, and other attacks.
Additionally, OpenSSH provides secure tunneling capabilities and
several authentication methods, and supports all SSH protocol versions.
<p>
The OpenSSH suite replaces rlogin and telnet with the
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh&amp;sektion=1">ssh</a>
program, rcp with
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=scp&amp;sektion=1">scp</a>,
and ftp with
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=sftp&amp;sektion=1">sftp</a>.
Also included is
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=sshd&amp;sektion=8">sshd</a>
(the server side of the package), and the other utilities like
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh-add&amp;sektion=1">ssh-add</a>,
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh-agent&amp;sektion=1">ssh-agent</a>,
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh-keysign&amp;sektion=8">ssh-keysign</a>,
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh-keyscan&amp;sektion=1">ssh-keyscan</a>,
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=ssh-keygen&amp;sektion=1">ssh-keygen</a> and
<a href="http://www.openbsd.org/cgi-bin/man.cgi?query=sftp-server&amp;sektion=8">sftp-server</a>.
<p>

OpenSSH is developed by
<a href="http://www.openbsd.org">the OpenBSD Project</a>.
The software is developed in countries that permit cryptography export
and is freely useable and re-useable by everyone under a BSD license.
However, development has costs, so if you find OpenSSH useful
(particularly if you use it in a commercial system that is distributed)
please consider <a href="http://www.openbsd.org/donations.html">
donating to help fund the project</a>.
<p>

OpenSSH is developed by two teams.  One team does strictly
OpenBSD-based development, aiming to produce code that is as clean, simple,
and secure as possible. We believe that simplicity without the portability
"goop" allows for better code quality control and easier review.  The other
team then takes the clean
version and makes it portable (adding the "goop") to make
it run on many operating systems -- the so-called
<strong>-p</strong> releases, ie "OpenSSH 4.0p1".
<p>

We sell OpenSSH
<a href="tshirts.html">T-shirts</a>
and
<a href="http://www.openbsd.org/orders.html#posters">posters</a>.
Sales of these items also help to fund development.  Donations and
other contributions have come entirely from end-users.
<p>
Please take note of our <a href="users.html">Who uses it</a> page, which
list just some of the vendors who incorporate OpenSSH into their own
products -- as a critically important security / access feature --
instead of writing their own SSH implementation or purchasing one
from another vendor.  This list specifically includes companies like
Cisco, Juniper, Apple, Red Hat, and Novell; but probably includes almost all
router, switch or unix-like operating system vendors.  In the 10
years since the inception of the OpenSSH project, these companies
have contributed not even a dime of thanks in support of the OpenSSH
project (despite numerous requests).

<hr>

<h3>1.2 - Why should it be used?</h3>
<p>
OpenSSH is a suite of tools to help secure your network connections. Here is a list of features:

	<li>Strong authentication. Closes several security holes (e.g., IP, routing, and DNS spoofing).</li>
	<li>Improved privacy. All communications are automatically and transparently encrypted.
	</li>
	<li>Secure X11 sessions. The program automatically sets DISPLAY on the server machine, and forwards any X11 connections over the secure channel.
	</li>
	<li>Arbitrary TCP/IP ports can be redirected through the encrypted channel in both directions (e.g., for e-cash transactions).
</li>
	<li>No retraining needed for normal users.
</li>
	<li>Never trusts the network. Minimal trust on the remote side of the connection. Minimal trust on domain name servers. Pure RSA authentication never trusts anything but the private key.
</li>
<li>Client RSA-authenticates the server machine in the beginning of every connection to prevent trojan horses (by routing or DNS spoofing) and man-in-the-middle attacks, and the server RSA-authenticates the client machine before accepting .rhosts or /etc/hosts.equiv authentication (to prevent DNS, routing, or IP-spoofing).
</li>
<li>Host authentication key distribution can be centrally by the administration, automatically when the first connection is made to a machine.
</li>
<li>Any user can create any number of user authentication RSA keys for his/her own use.
</li>
<li>The server program has its own server RSA key which is automatically regenerated every hour.
</li>
<li>An authentication agent, running in the user's laptop or local workstation, can be used to hold the user's RSA authentication keys.
</li>
<li>The software can be installed and used (with restricted functionality) even without root privileges.
</li>
<li>The client is customizable in system-wide and per-user configuration files.
</li>
<li>Optional compression of all data with gzip (including forwarded X11 and TCP/IP port data), which may result in significant speedups on slow connections.
</li>
<li>Complete replacement for rlogin, rsh, and rcp.
</li>
Currently, almost all communications in computer networks are done without encryption. As a consequence, anyone who has access to any machine connected to the network can listen in on any communication. This is being done by hackers, curious administrators, employers, criminals, industrial spies, and governments. Some networks leak off enough electromagnetic radiation that data may be captured even from a distance.

When you log in, your password goes in the network in plain text. Thus, any listener can then use your account to do any evil he likes. Many incidents have been encountered worldwide where crackers have started programs on workstations without the owner's knowledge just to listen to the network and collect passwords. Programs for doing this are available on the Internet, or can be built by a competent programmer in a few hours.

Businesses have trade secrets, patent applications in preparation, pricing information, subcontractor information, client data, personnel data, financial information, etc. Currently, anyone with access to the network (any machine on the network) can listen to anything that goes in the network, without any regard to normal access restrictions.

Many companies are not aware that information can so easily be recovered from the network. They trust that their data is safe since nobody is supposed to know that there is sensitive information in the network, or because so much other data is transferred in the network. This is not a safe policy.
</p>

Several Methods of Data Transfer are available over SSH.
<h2>SFTP</h2>
<h5><a href="">Wikipedia</a></h5>
<p>

<h5><em>More Reading...</em></h5>
<a href="http://www.tuxfiles.org/linuxhelp/filepermissions.html">Linux File Permissions</a>

<a href="https://www.digitalocean.com/community/articles/how-to-set-up-apache-virtual-hosts-on-ubuntu-12-04-lts">Virtual Hosts</a>

<a href="">Install SSL Certificate</a>
<a href="Install an FTP server">Install an FTP server</a>


<a href="http://textfiles.com/fun/nocredit.txt">NO CREDIT?  HERE'S HOW TO GET STARTED ON YOUR OWN!</a>
</p>


@stop

<!-- 
http://textfiles.com/fun/gun.txt
http://textfiles.com/fun/hot_wate.fas

 -->