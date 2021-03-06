<?php declare(strict_types=1);


?><!doctype html>
<html lang="en-GB">
	<head>
		<title>Welcome to CodeIgniter</title>

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	</head>
	<body>

	<!-- VALIDATES IF REMOVED:  -->	
	<!-- nonce="< ?= $nonce ? > -->
		<style nonce="myrGH74Xz2Ze6">
			div.logo {
				height: 200px;
				width: 155px;
				display: inline-block;
				opacity: 0.08;
				position: absolute;
				top: 2rem;
				left: 50%;
				margin-left: -73px;
			}
			body {
				height: 100%;
				background: #fafafa;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #777;
				font-weight: 300;
			}
			h1 {
				font-weight: lighter;
				letter-spacing: 0.8px; /* John added em */
				font-size: 3rem;
				margin-top: 145px;
				margin-bottom: 0;
				color: #222;
			}
			.wrap {
				max-width: 1024px;
				margin: 5rem auto;
				padding: 2rem;
				background: #fff;
				text-align: center;
				border: 1px solid #efefef;
				border-radius: 0.5rem;
				position: relative;
			}
			.version {
				margin-top: 0;
				color: #999;
			}
			.guide {
				margin-top: 3rem;
				text-align: left;
			}
			pre {
				white-space: normal;
				margin-top: 1.5rem;
			}
			code {
				background: #fafafa;
				border: 1px solid #efefef;
				padding: 0.5rem 1rem;
				border-radius: 5px;
				display: block;
			}
			p {
				margin-top: 1.5rem;
			}
			.footer {
				margin-top: 2rem;
				border-top: 1px solid #efefef;
				padding: 1em 2em 0 2em;
				font-size: 85%;
				color: #999;
			}
			a:active,
			a:link,
			a:visited {
				color: #dd4814;
			}

			/* John Betong's Additions */
			.jbButton {
			 display: inline-block;
			 height: 2em;
			 line-height:2; 
			 margin:0 1em; 
			 padding:0.42em 1em;
			 background: #efefef;
			 vertical-align:middle;
			 border: 2px solid #ccc;
			 font-size: small;
			}				
			.jbButton a {
				text-decoration:none;
				color:#333;
			}
			.jbButton:hover {
				background-color:snow; 
				color:#000;
			 	border: 2px solid #000;
			 	font-style:italic;
			}
			.hhh {display: none;}
		</style>

		<div class="wrap">

			<h1>Welcome to CodeIgniter</h1>

			<p class="version">version 4.0.0 <!-- -rc.2.1 --></p>

			<div class="hhh jbButton">
				<a href="welcome"><b> Welcome Page Original </b> </a>			</div>

			<div class="hhh jbButton">
				<a href="home"> John Betong's Menu </a>			</div>

			<div class="logo">
				<!-- John removed version="1.0" and .00000 -->
				<svg xmlns="http://www.w3.org/2000/svg"
					 width="155" height="200" viewBox="0 0 155 200"
					 preserveAspectRatio="xMidYMid meet">
				<g transform="translate(0,200) scale(0.1,-0.1)" fill="#000000" stroke="none">
				<path d="M737 1963 c22 -79 -7 -185 -78 -290 -18 -26 -107 -122 -197 -213
					  -239 -240 -336 -371 -403 -544 -79 -206 -78 -408 5 -582 64 -134 212 -264 361
					  -314 l60 -20 -30 22 c-210 152 -229 387 -48 588 25 27 48 50 51 50 4 0 7 -27
					  7 -61 0 -57 2 -62 37 -95 30 -27 46 -34 78 -34 56 0 99 24 116 65 29 69 16
					  120 -50 205 -105 134 -117 233 -43 347 l31 48 7 -47 c13 -82 58 -129 250 -258
					  209 -141 306 -261 328 -405 11 -72 -1 -161 -31 -218 -27 -53 -112 -143 -165
					  -174 -24 -14 -43 -26 -43 -28 0 -2 24 4 53 14 241 83 427 271 482 486 19 76
					  19 202 -1 285 -35 152 -146 305 -299 412 l-70 49 -6 -33 c-8 -48 -26 -76 -59
					  -93 -45 -23 -103 -19 -138 10 -67 57 -78 146 -37 305 30 116 32 206 5 291 -27
					  89 -104 206 -162 247 -17 13 -18 12 -11 -15z"/>
				</g>
				</svg>
			</div>

			<div class="guide">
				<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

				<p>If you would like to edit this page you'll find it located at:</p>

				<pre>
				<code>
					application/Views/welcome_message.php
				</code>
				</pre>

				<p>The corresponding controller for this page is found at:</p>

				<pre>
				<code>
					application/Controllers/Home.php
				</code>
				</pre>

				<p>If you are exploring CodeIgniter for the very first time, you
					should start by reading the (in progress)
					<a href="https://bcit-ci.github.io/CodeIgniter4">User Guide</a>.</p>

			</div>

			<div class="footer">
				Page rendered in 0.005 seconds. Environment: development			</div>

		</div>

	</body>
</html>


