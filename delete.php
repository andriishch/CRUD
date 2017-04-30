<?php
/*
*Новый актион для апдэйт'
*/
echo "Page delite";

require_once 'Model/model.php';

$id = $_GET['id'];
echo $id;

if(isset($id)){
    delete($id);
    header('Location:index.php');
}


//echo $id.'id';
$row = findByID($id);
//echo $row.'row';
//var_dump($row);

require_once 'View/deleteTemplate.php';



//