<?php
include  "createDB.php";

function randomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = '';
    for ($i = 0; $i < 32; $i++) {
        $randstring =  $characters[rand(0, strlen($characters))];
    }
    return $randstring;
}




$login = $_GET["login"];
$pass = $_GET["pass"];
$found = false;


class usersDB extends SQLite3
{
    function __construct()
    {
        $this->open('papers.db');
    }
}

$db = new usersDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}

/*
foreach ($db as $record) {
	if (isset($record["login"])){
        if ($record["login"]== $login){
            $found = true;
        break;
        }
		
	}
}
	
if ($found == true){
	 header ('Location: registration.php?error=1');
	}
else {
}
*/

    $result = $db->exec('INSERT INTO USERS (ID,NAME,PASS,TOKEN)
      VALUES (1 , $login, $pass, $token)');
    if (!$res) {
        echo $db->lastErrorMsg();
    } else {
        echo "Records created successfully\n";
    }


$token = randomString();
setcookie("token", $token);
    $db->close();

header('Location: index.php');


?>
