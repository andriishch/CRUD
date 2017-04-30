<?php

function getConnection(){
    $connect = new PDO("mysql:host=127.0.0.1;dbname=CRUD", 'root', '');
    return $connect;
}

function insert($name, $description, $created_at){
    $dbget = getConnection();
    $sql = 'INSERT INTO article (name, description, created_at) VALUES (:name, :description, :created_at)';
    $statement = $dbget->prepare($sql);
    $statement->bindValue(':name', $_POST['name']);
    $statement->bindValue(':description', $_POST['description']);
    $statement->bindValue(':created_at', $_POST['created_at']);
//    $statement->execute();
//    $statement->errorInfo();
//    var_dump($statement->execute());
    var_dump($statement->errorInfo());

    return $statement->execute();
}