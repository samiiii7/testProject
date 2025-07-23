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
// echo 'this is an error function';



?>



<?php
require ('user_validater.php');

if (isset($_POST['submit'])){
    $validation = new user_validater($_POST);
    $errors = $validation->validateForm();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OOP in php toturial  </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

        <label>Username:
                <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
            </label>
            <div class="error">
                <?= $errors['username'] ?? ''; ?>
            </div>
            <label>Email:
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </label>
            <div class="errors">
                <?= $errors['email'] ?? ''; ?>
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>




