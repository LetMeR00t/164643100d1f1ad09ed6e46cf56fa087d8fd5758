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
	<form method="post" action ="SOURCE.php">
		Login  : <input type="text" name="login" />
		Mail : <input type="text" name="mail"/>
		Password : <input type="text" name="password"/>
		<input type="submit" value="ok"/>
	</form>

<?php
	try {
		srand(time());
	    $db = new PDO('sqlite:'.dirname(__FILE__) .'/config/database.db');
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $db->query("CREATE TABLE users (login TEXT, email TEXT, tel TEXT, password TEXT);");
	    $db->query("INSERT INTO users VALUES ('admin', 'admin@mail.fr', '0505050505', '".md5(rand(1000000,10000000))."');");
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
?>
</body>
</html>

