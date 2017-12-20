<?php
if (empty($db)){
    $db = new SQLite3('papers.db');
}

if ($db) {
    echo  "Connected";
};



$res = $db -> exec('CREATE TABLE IF NOT EXISTS USERS
    (ID INT PRIMARY KEY NOT NULL,
     NAME TEXT NOT NULL,
     PASS TEXT,
     TOKEN TEXT);
     ');

if(!$res){
    echo  "Table create error";
} else{
    echo "Table created succsessfully";
}
$db -> close();
echo "Table closed succsessfully";
?>