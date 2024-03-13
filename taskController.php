<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=todo_list_db", "root", "");
}catch(PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
}

if(isset($_POST['add_task'])){
    $taskTitle = ($_POST['taskTitle']);
    $taskDescription = ($_POST['taskDescription']);
    $sqlInsert = "INSERT INTO task (title, description) VALUES (?, ?)";
    $statement = $conn->prepare($sqlInsert);
    $statement->execute([$taskTitle, $taskDescription]);
}


$sqlGetAll = "SELECT * FROM task";
$tasks = $conn->query($sqlGetAll);

?>