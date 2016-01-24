<?php

$check_login = '';
$value_login = 0;
$information = "";

# Check POST variables
if(isset($_POST['login']) && $_POST['login'] != '' && isset($_POST['mail']) && $_POST['mail'] != '' && isset($_POST['password']) && $_POST['password'] != '')
{
	include(dirname(__FILE__) .'/plugins/PHP-SQL-Parser/src/PHPSQLParser.php');
	$valid_tokens = "colref operator const operator colref operator const operator colref operator const ";
	
	$l = $_POST["login"];
        $e = $_POST["mail"];
        $p = $_POST["password"];


        $sql = "SELECT * FROM users WHERE login = \"$l\" and email = \"$e\" and password = '".$p."'";
        try {
	$parser = new PHPSQLParser($sql, true);
        }catch(Exception $e) {
            $information = $e->getMessage();
        }
	
	$tokens = "";
        
        foreach ($parser->parsed["WHERE"] as $key => $value)
        {
                $tokens .= $value["expr_type"] . " ";
        }
        
	
	if($tokens === $valid_tokens)
        {
              $db = new PDO('sqlite:'.dirname(__FILE__).'/config/database.db');
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	      $statement = $db->query($sql);
              if(($columns = $statement->fetch()) !== false)
              {
		    $flag = $columns["password"];
                    $check_login = "Congratulations ! Administrator password is :<br>".$flag;
                    $value_login = 1;
		} else {
                    $check_login = "Bad login, mail or password";
		    $value_login = -1;
              }
        } else {
                $check_login = "SQL Injection detected, administrator has been notified !";
		$value_login = -1;
        }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php include_once("head.php"); ?>
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
      <form action='login.php' method='post'>
			<fieldset>
	 			Login : <br>
				<input type='text' name='login'/><br/>
				Mail  : <br>
				<input type='mail' name='mail'/><br/>
				Pass  : <br>
				<input type='password' name='password'/><br/>
				<br>
				<input type='submit' value='Connect'/><br/>
			</fieldset>
		</form>
	<br>
	<div id='check_login' class=
				<?php 
					if ($value_login != 1)
						echo "'bad_login'";
					else
						echo "'good_login'";		
				?> ><?php echo $check_login;
					if ($information != "")
						echo "<br><br>Warning : ".$information; ?></div>
    </div>
  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>
