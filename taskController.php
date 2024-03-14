<?php

$dsn = "mysql:host=localhost:3306;dbname=todo_list_db";
$username = "root";
$password = "Chic@g01710!";

try {
    $conn = new PDO($dsn, $username, $password);
}catch(PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
}

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $completed = (isset($_POST['task_checkbox'])) ? 1 : 0;
    $sql = "UPDATE task SET completed = ? WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$completed, $id]);
}

if(isset($_POST['add_task'])){
    $taskTitle = ($_POST['taskTitle']);
    $taskDescription = ($_POST['taskDescription']);
    $sql = "INSERT INTO task (title, description) VALUES (?, ?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$taskTitle, $taskDescription]);
}


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM task WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
    header("Location: index.php");
}

$sqlGetAll = "SELECT * FROM task";
$tasks = $conn->query($sqlGetAll);

?>