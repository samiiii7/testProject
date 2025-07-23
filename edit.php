<?php
/*if(! isset($_GET['id'])) {
    header('Location: /summer');
    return;
}

$link = mysqli_connect('localhost:3306' , 'root', '');
mysqli_select_db($link , 'newdb');
$stmt = mysqli_prepare($link , 'SELECT * FROM people WHERE id = ?');
$id = (int)  $_GET['id'] ;
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
var_dump(mysqli_stmt_get_result($stmt));*/
?>
<?php
$searchArray = ['first' => 1, 'second' => 4];
foreach ($searchArray as $item) {
    if(!array_key_exists($item, $this->data)){}
}
?>


?>

