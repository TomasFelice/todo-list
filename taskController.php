<?php

// Informacion de la DB
$dsn = "mysql:host=localhost:3306;dbname=todo_list_db";
$username = "root";
$password = "";

// Conexion a la DB
try {
    $conn = new PDO($dsn, $username, $password);
}catch(PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
}

// Verificar estado de la tarea
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $completed = (isset($_POST['task_completed'])) ? 1 : 0;
    $sql = "UPDATE TASKS SET completed = ? WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$completed, $id]);
}

// Agregar tarea
if(isset($_POST['add_task'])){
    $taskTitle = ($_POST['task_title']);
    $taskDescription = ($_POST['task_description']);
    $sql = "INSERT INTO TASKS (title, description) VALUES (?, ?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$taskTitle, $taskDescription]);
}

// Eliminar tarea
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM TASKS WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
    header("Location: index.php");
}

// Listar tareas
$sqlGetAll = "SELECT * FROM TASKS";
$tasks = $conn->query($sqlGetAll);

?>