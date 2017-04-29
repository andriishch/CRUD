<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 29.04.17
 * Time: 15:56
 */
echo "Hello world";
?>
<form action="index.php" method="post">
    <label for="name">Name:</label> <input type="text" name="name"><br>
    <label for="description:">Description</label><input type="text" name="description"><br>
    <label for="created_at:">Creat</label><input type="text" name="created_at"><br>
    <input type="submit" value="Press me">
</form>
<?php
if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at'])) {
    $connect = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', '');
    $driverpdo = var_dump($connect::getAvailableDrivers());

    $sql = 'INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)';
    $statement = $connect->prepare($sql);
    $statement->bindValue(':name', $_POST['name']);
    $statement->bindValue(':description', $_POST['description']);
    $statement->bindValue(':created_at', $_POST['created_at']);
    $statement->execute();
    $statement->errorInfo();
    var_dump($statement->execute());
    var_dump( $_POST['name'] );
}
