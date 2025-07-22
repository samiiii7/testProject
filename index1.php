<?php
/* $i = 1;
foreach($_SERVER as $key => $value) {
    echo "$i $key => $value <br>";
    $i++;
}
*/ // getting server info using php
/*
setcookie('site_name' , 'rocket', [
        'expires' => time()+60*60,
        'domain'=> 'localhost',
        'path' => '/',
        'httponly' => true
    ]);
var_dump($_COOKIE);*/ // cookie shit
/*session_start();
$_SESSION['auth'] = true;
var_dump($_SESSION);*/ // session shit
/*$link = mysqli_connect('localhost:3306', 'root', ''); // this gives you an object
mysqli_select_db($link , 'newdb');
$sql = "create table users(id INT AUTO_INCREMENT, email VARCHAR(50) NOT NULL, password varchar(50) NOT NULL, primary key(id))"; // this is simply query
$result = mysqli_query($link, $sql); // this is to run the query from php
if($result) {
    echo 'query ran successfully';
    var_dump($result);
}
mysqli_close($link)*/ //database connecting through php
echo 'this is an error function';
?>


