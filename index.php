<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 29.04.17
 * Time: 15:56
 */
echo "Hello world";
?>

<?php

require_once 'Model/model.php';

?>
<?php

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {

    $result = insert($_POST['name'], $_POST['description'], $_POST['created_at']);

    var_dump($result);
    var_dump($_POST['name']);

   // var_dump($statement->execute());
    //var_dump($statement->errorInfo());

}

require_once 'View/template.php';
