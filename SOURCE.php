<?php

/*
CREATE TABLE users (login TEXT, email TEXT, tel TEXT, password TEXT);
INSERT INTO users VALUES ('admin', 'root@localhost', '0505050505', 'admin');
*/

include(dirname(__FILE__) .'/plugins/PHP-SQL-Parser/src/PHPSQLParser.php');

$my_tokens = "colref operator const operator colref operator const operator colref operator const ";

?>

<html>
<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<style>
body {
color:white;
background-color:white;
background-image:url(https://upload.wikimedia.org/wikipedia/fr/6/69/Ida6-logo.png);
background-repeat:repeat;
}
</style>
<img src="https://upload.wikimedia.org/wikipedia/fr/6/69/Ida6-logo.png"/>
	<form method="post" action ="SOURCE.php">
		Login  : <input type="text" name="login" />
		Mail : <input type="text" name="mail"/>
		Password : <input type="text" name="password"/>
		<input type="submit" value="ok"/>
	</form>

<?php
if (isset($_POST["login"]) and isset($_POST["mail"]) and isset($_POST["password"]))
{
	try {
		srand(time());
	    $db = new PDO('sqlite:'.dirname(__FILE__) .'/config/database.db');
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $db->query("CREATE TABLE users (login TEXT, email TEXT, tel TEXT, password TEXT);");
	    $db->query("INSERT INTO users VALUES ('admin', 'admin@mail.fr', '0505050505', '".sha1(rand())."');");
	} catch(Exception $e) {
	    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
	    die();
	}
/*
	$l = $_POST["login"];
	$e = $_POST["mail"];
	$p = $_POST["password"];


	$sql = "SELECT * FROM users WHERE login = \"$l\" and email = \"$e\" and password = '".$p."'";
        try {
        $parser = new PHPSQLParser($sql, true);
        }catch(Exception $e) {
            echo $e->getMessage();
        }

        $tokens = "";

        foreach ($parser->parsed["WHERE"] as $key => $value)
        {
                $tokens .= $value["expr_type"] . " ";
        }


	if($tokens === $my_tokens)
	{
			$statement = $db->query($sql);
			if($statement->fetchColumn() != false)
			{
				echo "<h1>WELCOME</h1>";
			} else {
				echo "<h1>Bad password</h1>";
			}
	} else {
		echo "<h1>nooope.</h1>";
	}



*/

}
?>
</body>
</html>
