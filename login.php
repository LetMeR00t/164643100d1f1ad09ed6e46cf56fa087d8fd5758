<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Bio & Vegans</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<style type="text/css" media="all">
@import "images/style.css";
</style>
</head>
<body>
<div id="page-container">
  <div id="top"> <a href="login.php">Login</a> | <a href="about.php">Contact</a>
    <div class="comment"> Search on the Website:
      <input type="text" name="search" class="search" value="Available soon ..."/>
      <input type="submit" value="Search" class="submit" />
    </div>
  </div>
  <div id="sidebar-a">
    <div class="padding">
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>
    <div id="hrgreen"></div>
<p>
<?php include_once("right.php");?>
</p>	  
	</div>
  <div id="content">
    <div class="padding">
      <h2>Please login</h2>
      <br /> 
      <form action='#' method='post'>
			<fieldset>
	 			Login : <br>
				<input type='text' name='log'/><br/>
				Mail  : <br>
				<input type='mail' name='mail'/><br/>
				Pass  : <br>
				<input type='password' name='pass'/><br/>
				<input type='submit' value='Submit'/><br/>
			</fieldset>
		</form>
    </div>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
