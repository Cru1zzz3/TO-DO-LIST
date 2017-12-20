<?php
$host = '127.0.0.1';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);


if (isset($_COOKIE['token']))
{

	$token = $_COOKIE['token'];



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

 /* ЕСЛИ НЕТ ПЕРЕДАЧИ ПЕРЕМЕННЫХ

    $stmt = $pdo->query('SELECT NAME FROM USERS');
    while ($row = $stmt->fetch())
    {
        echo $row['name'] . "\n";
    }
 */



    $data = $pdo->query('SELECT name FROM users')->fetchAll(PDO::FETCH_COLUMN);

    echo "Operation done successfully\n";
    $db->close();


/*	foreach ($db as $record) {
		if (isset($record["token"])){
			if ($record["token"] == $token){
				$found = true;
				$user_record = $record;
				break;
			}
			else $record["token"] = NULL;
		}
	}

	if ($found){
		$user_record = $record;
	}


	else {
		header('Location: registration.php');
	}
    }
    else
    {
        header('Location: login.php');
    }
*/
 }
?>