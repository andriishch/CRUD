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

function findAll(){

    $connect = getConnection();
    $sql = "SELECT * FROM article";
    $statement = $connect->prepare($sql);
    $statement->execute();

    return $statement->fetchAll();
}

function findById($id){

    $dbConnect = getConnection();
    $sql = 'SELECT * FROM article WHERE id=:id';
    $statement = $dbConnect->prepare($sql);
    $statement->bindValue(":id",$id);
    $statement->execute();

    return $statement->fetch();
}

function update($id, $name, $description, $created_at){

    $dbConn = getConnection();

    $sql = "UPDATE article 
            SET name = :name, description = :description, created_at = :created_at
            WHERE id = :id";
    $statement = $dbConn->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':created_at', $created_at);
    $result = $statement->execute();

    return var_dump($result);
}

function delete($id){

    $dbConnect = getConnection();

    $sql = 'DELETE FROM article WHERE id=:id';
    $statement = $dbConnect->prepare($sql);
    $statement->bindValue(":id",$id);
    $statement->execute();

    return var_dump($statement);
}