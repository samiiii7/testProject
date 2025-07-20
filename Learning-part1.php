<?php
//remember here MySQL should be open on XAMPP for the code to work
// here you didn't know how to manage html and CSS on 2025/7/16
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

$link = mysqli_connect('localhost:3306' , 'root', '');
mysqli_select_db($link , 'newdb');
$SQL = "SELECT * FROM people ORDER by ID DESC"; //simply SQL code not an error
$result = mysqli_query($link , $SQL);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> لیست کاربران </h3>
<table>
    <thead>
    <tr>
        <th> ای دی کاربر </th>
        <th> ایمیل کاربر</th>
        <th> پسورد  </th>
    </tr>
    </thead>
    <tbody>
    <?php while($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $user['ID'] ?> </td>
            <td> <?= $user['email']?> </td>
            <td> <?= $user['password'] ?> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>

