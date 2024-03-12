<?php include("task.php"); ?>
<!doctype html>
<html lang="es">
    <head>
        <title>Lista de Tareas Interactiva</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container">
            <section class="card">
                <header class="card-header">
                    Lista de Tareas Interactiva
                </header>
                <main class="card-body">
                    <form action="" method="post">

                        <section class="mb-3">
                            <label for="task" class="form-label">Tarea:</label>
                            <input
                                type="text"
                                class="form-control"
                                name="task"
                                id="task"
                                aria-describedby="helpId"
                                placeholder="Escriba su tarea"
                            />
                            <button 
                                class="btn btn-primary mt-1"
                                name="add_task"
                                id="add_task"
                                type="submit">
                                Agregar tarea
                            </button>
                            
                        </section>

                        <section class="list-group">
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" />
                                Tarea 1
                            </label>
                        </section>
                        
                    </form>
                </main >
                <footer class="card-footer text-muted">
                    Tomás Felice - Desafío Quinttos
                </footer>
            </section>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
