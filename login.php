<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>MyFirstCssTemplate</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<style type="text/css" media="all">
@import "images/style.css";
</style>
</head>
<body>
<div id="page-container">
  <div id="top"> <a href="login.php">Login</a> | <a href="about.php">Contact</a>
    <div class="comment"> Search on the Website:
      <input type="text" name="search" class="search" value="Available soon ..." disabled/>
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
      <h2>Green Grass</h2>
      <br />
      <h4><a href="#">PROVIDING THE BEST CMS SOLUTONS</a></h4>
      <br />
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</p>
      <p class="date"><img src="images/comment.gif" alt="" /> <a href="#">Comments(2)</a> <img src="images/timeicon.gif" alt="" /> 21.02.</p>
      <h4><a href="#">COMPILING STATISTICS</a></h4>
      <br />
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat...</p>
      <p class="date"><img src="images/comment.gif" alt="" /> <a href="#">Comments(8)</a> <img src="images/timeicon.gif" alt="" /> 13.46.</p>
    </div>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
