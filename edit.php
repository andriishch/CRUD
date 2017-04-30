<?php
/*
*Новый актион для апдэйт'
*/
echo "Page edit";

require_once 'Model/model.php';

if (isset($_POST['id'], $_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    update($_POST['id'], $_POST['name'], $_POST['description'], $_POST['created_at']);

}

$id = $_GET['id'];
//echo $id.'id';
$row = findByID($id);
//echo $row.'row';
//var_dump($row);

require_once 'View/editTamplate.php';