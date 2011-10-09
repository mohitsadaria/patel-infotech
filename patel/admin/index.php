<?php
	if(isset($_GET['logout']))
	{
		if(!isset($_SESSION))
			session_start();

		unset($_SESSION['key:ok']);
	}

	require 'Key.php';
	Key::lock();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Admin - Login</title>

    <style type="text/css" media="all">
		@import url("./css/style.css");
		@import url("./js/jdpicker/jdpicker.css");
		@import url("./js/uniform/css/uniform.default.css");
		@import url("./js/visualize/css/visualize.css");
		@import url("./js/fancybox/jquery.fancybox-1.3.4.css");
		@import url("http://fonts.googleapis.com/css?family=Lato:light,regular,regularitalic,bold,900&amp;v1");
		@import url("http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold&amp;v1");
    </style>

	<!--[if IE]>
       <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    <!--[if lte IE 8]>
       <link rel="stylesheet" type="text/css" href="css/ltie8.css" />
    <![endif]-->
	 <!--[if IE 7]>
       <link rel="stylesheet" type="text/css" href="css/ie7.css" />
    <![endif]-->

<meta charset="UTF-8"></head>
<body>
	<!--
	To change between fixed or liquid change the fixed class to liquid or vice-versa
	-->
   <div class="cont fixed">
     <div class="wrapper"><!-- START wrapper!-->
         <h1 class="logo"><img src="./images/logo_white.png" alt="logo"/></h1>
         <div class="block login"> <!-- START block!-->
            <div class="top">
               <div class="black">
                  <h2>Login</h2>
               </div>
               <div class="gray">
                  <ul>
                     <li><a class="active" href="login">Login</a></li>
                     <li><a href="register">Register</a></li>
                     <li><a href="recover_password">Recover password</a></li>
                  </ul>
               </div>
            </div>
            <div class="content"> <!-- START block content!-->

					<div id="login" class="login-tabs active">
            			<form action="home.php" method="post">
							<div class="msg" >
								<div class="info">To login <b>enter username and password</b>.</div>
							</div>
							<p>
								<label>Username</label><br/>
								<input class="text" type="text" name="username" id="login-username" />
							</p>
							<p>
								<label>Password</label><br/>
								<input class="text" type="password" name="password" id="login-password" />
							</p>
							<p>
								<input type="submit" name="submit" class="black small" value="Submit" />
								<label>
									<input type="checkbox" name="remember_me" value="1" /> Remember me
								</label>
							</p>
						</form>
					</div>
					<div id="register" class="login-tabs">
            			<form action="home.html" method="post">
							<p>
								<label>Email</label><br/>
								<input class="text" type="text" name="email"/>
							</p>
							<p>
								<label>Username</label><br/>
								<input class="text" type="text" name="username"/>
							</p>
							<p>
								<label>Password</label><br/>
								<input class="text" type="password" name="password"/>
							</p>
							<p>
								<input type="submit" class="black small" value="Register"/>
								<input type="submit" class="gray small" value="Reset"/>
							</p>
						</form>
					</div>
					<div id="recover_password" class="login-tabs">
            			<form action="home.html" method="post">
							<p>
								<label>Email</label><br/>
								<input class="text" type="text" name="email"/>
							</p>
							<p>
								<input type="submit" class="black small" value="Recover"/>
							</p>
						</form>
					</div>

            </div><!-- END block content!-->
         </div> <!-- END block!-->
      </div><!-- END wrapper!-->
   </div>

	<script type="text/javascript" src="./js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="./js/jquery-ui-1.8.14.custom.min.js"></script>
	<script type="text/javascript" src="./js/select-skin.js"></script>
	<script type="text/javascript" src="./js/jdpicker/jquery.jdpicker.js"></script>
	<script type="text/javascript" src="./js/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="./js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="./js/visualize/visualize.jQuery.js"></script>
	<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="./js/jwysiwyg/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="./js/jquery.cookie.js"></script>

	<script type="text/javascript" src="./js/main.js"></script>
	<script type="text/javascript">$(document).ready(mbe.login.ready);</script>
</body>
</html>