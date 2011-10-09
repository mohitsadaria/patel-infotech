<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Admin - Home</title>
    <style type="text/css" media="all">
		@import url("http://fonts.googleapis.com/css?family=Lato:light,regular,regularitalic,bold,900&amp;v1");
		@import url("http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold&amp;v1");

		@import url("./js/jdpicker/jdpicker.css");
		@import url("./js/uniform/css/uniform.default.css");
		@import url("./js/visualize/css/visualize.css");
		@import url("./js/fancybox/jquery.fancybox-1.3.4.css");
		@import url("./js/jwysiwyg/jquery.wysiwyg.css");

		@import url("./css/style.css");

		@import url("./css/themes/soft-blue.css");
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
	To change the color theme simply include the theme CSS and change the next div's class
	Choose between
		- soft-green
		- crimson-orange
		- soft-blue
		- soft-red
		- blue-gray
	-->
	<!--
	To change between fixed or liquid change the fixed class to liquid or vice-versa
	-->
   <div class="cont soft-green fixed">
     <div class="menu">
        <div class="menu-wrap">
           <div class="logo">
              <a href="./home.html"><img src="./images/logo_black.png" alt="logo"/></a>
           </div>
           <ul id="main_menu">
              <li><a href="./home.html">Dashboard</a></li>
              <li class="layout-menu">
			 	 <a href="#layout">Layout</a>
				  <ul>
					  <li>
						  <a href="#liquid">Liquid</a>
					  </li>
					  <li>
						  <a href="#fixed">Fixed</a>
					  </li>
					  <li>
						  <a href="soft-green">Theme</a>
						  <ul>
							  <li>
								  <a href="soft-green">Soft Green</a>
							  </li>
							  <li>
								  <a href="crimson-orange">Crimson Orange</a>
							  </li>
							  <li>
								  <a href="soft-blue">Soft Blue</a>
							  </li>
							  <li>
								  <a href="soft-red">Soft Red</a>
							  </li>
							  <li>
								  <a href="blue-gray">Blue Gray</a>
							  </li>
						  </ul>
					  </li>
				  </ul>
			  </li>
              <li>
				  <a href="./text.html">Texting &amp; Grouping</a>
			  </li>
			  <li>
				  <a href="./forms.html">Forms &amp; Messages</a>
			  </li>
			  <li>
				  <a href="./data.html">Data</a>
			  </li>
           </ul>
           <div class="search">
              <input id="menu_search" class="search" type="text" name="search" value="Search the menu" placeholder="Search the menu"/>
           </div>
           <div class="login">
              <span class="no">5</span>
				  <span class="ico">&nbsp;</span>
				  <div class="details">
					  <div class="top">
						  <img src="./img/login.jpg" alt="user" />
						  <div class="line name">
							  <a href="#">The user</a>
						  </div>
						  <div class="line email">
							  mail@mail.com
						  </div>
						  <div class="line">
							  <a href="#">Private messages (2 new)</a>
						  </div>
						  <div class="bbg">&nbsp;</div>
					  </div>
					  <div class="bottom">
						  <div class="line">
							  <a href="#">Change my account information</a>
						  </div>
						  <div class="line">
							  <a href="#">Edit my profile</a>
						  </div>
						  <div class="line">
							  <a href="./index.html">Logout</a>
						  </div>
					  </div>
				  </div>

           </div>
        </div>
     </div>

     <div class="wrapper"><!-- START wrapper!-->


        <div class="sidebar left"> <!-- START sidebar!-->


         <div class="block"> <!-- START block!-->
            <div class="top">
               <h2>Sidebar menu</h2>
               <a href="#" class="toggle">&nbsp;</a>
            </div>
            <div class="content"> <!-- START block content!-->
               <ul>
                  <li><a class="active" href="#">Link number 1</a></li>
                  <li><a href="#">Link number 2</a></li>
                  <li><a href="#">Link number 3</a></li>
                  <li><a href="#">Link number 4</a></li>
               </ul>
            </div><!-- END block content!-->
         </div> <!-- END block!-->


         <div class="block"> <!-- START block!-->
            <div class="top">
               <h2>Text sidebar</h2>
               <a href="#" class="toggle">&nbsp;</a>
            </div>
            <div class="content text"> <!-- START block content!-->
               <h3>LOREM IPSUM</h3>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div><!-- END block content!-->
         </div> <!-- END block!-->

        </div> <!-- END sidebar!-->

        <div class="block medium right"> <!-- START block!-->
            <div class="top">
                  <h1>Dashboard</h1>
                  <ul>
                     <li><a href="days">Find all items</a></li>
                     <li><a href="months">Sort out stats</a></li>
                  </ul>
            </div>
            <div class="content"> <!-- START block content!-->
            	<h2>Statistics</h2>
				<p>
					Here are some charts. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960vs with the release of Letraset sheets containing Lorem Ipsum passages
				</p>
            	<table class="stats" rel="line" width="100%" cellpadding="0" cellspacing="0" style="display:none">

					<thead>
						<tr>
							<td>&nbsp;</td>
							<th scope="col">01.03</th>
							<th scope="col">02.03</th>
							<th scope="col">03.03</th>
							<th scope="col">04.03</th>
							<th scope="col">05.03</th>
							<th scope="col">06.03</th>
							<th scope="col">07.03</th>
							<th scope="col">08.03</th>
							<th scope="col">09.03</th>
							<th scope="col">10.03</th>
							<th scope="col">11.03</th>
							<th scope="col">12.03</th>
							<th scope="col">13.03</th>
							<th scope="col">14.03</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th scope="row">Page views</th>
							<td>50</td>
							<td>90</td>
							<td>40</td>
							<td>120</td>
							<td>180</td>
							<td>280</td>
							<td>320</td>
							<td>220</td>
							<td>100</td>
							<td>120</td>
							<td>40</td>
							<td>70</td>
							<td>20</td>
							<td>60</td>
						</tr>

						<tr>
							<th scope="row">Unique visitors</th>
							<td>30</td>
							<td>50</td>
							<td>15</td>
							<td>90</td>
							<td>140</td>
							<td>160</td>
							<td>230</td>
							<td>170</td>
							<td>50</td>
							<td>90</td>
							<td>30</td>
							<td>50</td>
							<td>10</td>
							<td>40</td>
						</tr>
					</tbody>
				</table>
			</div>
            <div class="content"> <!-- START block content!-->
				<p>
					These charts are based on months or something. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960vs with the release of Letraset sheets containing Lorem Ipsum passages
				</p>

				<table class="stats" rel="bar" width="100%" cellpadding="0" cellspacing="0" style="display:none">

					<thead>
						<tr>
							<td>&nbsp;</td>
							<th scope="col">02.09</th>
							<th scope="col">03.09</th>
							<th scope="col">04.09</th>
							<th scope="col">05.09</th>
							<th scope="col">06.09</th>
							<th scope="col">07.09</th>
							<th scope="col">08.09</th>
							<th scope="col">09.09</th>
							<th scope="col">10.09</th>
							<th scope="col">11.09</th>
							<th scope="col">12.09</th>
							<th scope="col">01.10</th>
							<th scope="col">02.10</th>
							<th scope="col">03.10</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th scope="row">Page views</th>
							<td>1800</td>
							<td>900</td>
							<td>700</td>
							<td>1200</td>
							<td>600</td>
							<td>2800</td>
							<td>3200</td>
							<td>500</td>
							<td>2200</td>
							<td>1000</td>
							<td>1200</td>
							<td>700</td>
							<td>650</td>
							<td>800</td>
						</tr>

						<tr>
							<th scope="row">Unique visitors</th>
							<td>1600</td>
							<td>650</td>
							<td>550</td>
							<td>900</td>
							<td>500</td>
							<td>2300</td>
							<td>2700</td>
							<td>350</td>
							<td>1700</td>
							<td>600</td>
							<td>1000</td>
							<td>500</td>
							<td>400</td>
							<td>700</td>
						</tr>
					</tbody>
				</table>

				<hr style="margin-top: 50px" />
				<h2>Quick Links</h2>
				<ul class="shortcuts">
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Home.png" alt="Home" /></span>
							<span class="title">Home</span>
							<small>This is where you go home.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/List.png" alt="Tasks" /></span>
							<span class="title">Tasks</span>
							<small>View the current tasks.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Speech-Bubble.png" alt="Comments" /></span>
							<span class="title">Comments</span>
							<small>What new comments have appeared.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Address-book.png" alt="Address Book" /></span>
							<span class="title">Address Book</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Person-group.png" alt="Users" /></span>
							<span class="title">Users</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Piechart.png" alt="Statistics" /></span>
							<span class="title">Statistics</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Folder.png" alt="File Manager" /></span>
							<span class="title">File Manager</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Database.png" alt="phpMyAdmin" /></span>
							<span class="title">phpMyAdmin</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/Config.png" alt="Settings" /></span>
							<span class="title">Settings</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
					<li>
						<a href="">
							<span class="image"><img src="./img/icons/X.png" alt="Logout" /></span>
							<span class="title">Logout</span>
							<small>Lorem ipsum dolor sit amet iuvenetum humus.</small>
						</a>
					</li>
				</ul>
            </div><!-- END block content!-->
        </div> <!-- END block!-->


        <div class="clear">&nbsp;</div>

		  <div class="footer">
			  <div class="left">
				  <a href="#">My administration</a>
			  </div>

			  <div class="right">
				  <a href="http://www.mbe.ro">powered by MBE v 1.0</a>
			  </div>
		  </div>

        <div class="clear">&nbsp;</div>
      </div><!-- END wrapper!-->
   </div>

   	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->

	<script type="text/javascript" src="./js/jquery-1.6.2.min.js"></script>

	<script type="text/javascript" src="./js/jquery-ui-1.8.14.custom.min.js"></script>
	<script type="text/javascript" src="./js/select-skin.js"></script>
	<script type="text/javascript" src="./js/jdpicker/jquery.jdpicker.js"></script>
	<script type="text/javascript" src="./js/uniform/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="./js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="./js/visualize/visualize.jQuery.js"></script>
	<script type="text/javascript" src="./js/jquery.cookie.js"></script>
	<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="./js/jwysiwyg/jquery.wysiwyg.js"></script>

	<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>