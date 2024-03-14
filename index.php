<?php include("taskController.php"); ?>
<!doctype html>
<html lang="es">
    <head>
        <title>Lista de Tareas Interactiva</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <script src="https://kit.fontawesome.com/b6d73066f0.js"
                crossorigin="anonymous">
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous">
        </script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous">
        </script>
        
        <style>
            .completed {
                text-decoration: line-through;
                opacity: 0.5;
            }
            </style>
    </head>

    <body class="bg-dark">
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container mt-3">
            <section class="card bg-light">
                <header class="card-header d-flex justify-content-center">
                    <h1>Lista de Tareas Interactiva</h1>
                </header>
                <main class="card-body">
                    <form action="" method="post">

                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="taskTitle"
                                id="taskTitle"
                                placeholder="Tarea"
                            />
                            <label for="taskTitle">Tarea</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                name="taskDescription"
                                id="taskDescription"
                                placeholder="Escriba la descripción de su tarea"
                            />
                            <label for="taskDescription">Descripción</label>
                        </div>
                        <div class="form-floating">
                            <button 
                                class="btn btn-outline-success mt-3"
                                name="add_task"
                                id="add_task"
                                type="submit">
                                Agregar
                            </button>
                        </div>
                    </form>
                        

                    <ul class="list-group mt-3">
                        <?php
                        foreach($tasks as $task){ ?>
                        <li class="list-group-item">
                            <form action="" method="post">
                                <input 
                                    type="hidden" 
                                    name="id" 
                                    value="<?php echo $task['id']; ?>"
                                >
                                <input 
                                    class="form-check-input me-1" 
                                    type="checkbox" 
                                    name="task_checkbox"
                                    id="task_checkbox"
                                    value="<?php echo $task['completed']; ?>"
                                    onChange="this.form.submit()"
                                    <?php echo ($task['completed'] == 1) ? 'checked': '';?> 
                                >
                            </form>
                            
                            <h6 class="<?php echo ($task['completed'] == 1) ? 'completed': '';?>">
                                <?php echo $task['title']; ?>
                            </h6>
                            <p class="<?php echo ($task['completed'] == 1) ? 'completed': '';?>">
                                <em><small><?php echo $task['description']; ?></small></em>
                            </p>
                            <a
                                class="btn btn-danger btn-sm float-end"
                                name="delete_task"
                                id="delete_task"
                                href="?id=<?php echo $task['id']; ?>">
                                Eliminar
                                <span
                                    class="badge bg-danger"
                                    ><i class="fa-solid fa-trash"></i>
                                </span>
                            </a>   
                        </li>
                        <?php } ?>
                    </ul>
                        
                </main >
                <footer class="card-footer text-muted">
                    Tomás Felice - Desafío Quinttos
                </footer>
            </section>
        </main>

    </body>
</html>
