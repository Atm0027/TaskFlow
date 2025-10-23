<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio";
    $tasks = [
        ["title" => "Configurar el entorno de desarrollo", "completed" => true, "priority" => "Alta"],
        ["title" => "Crear la estructura de carpetas", "completed" => true, "priority" => "Media"],
        ["title" => "Diseñar la base de datos", "completed" => false, "priority" => "Media"],
        ["title" => "Implementar el sistema de login", "completed" => false, "priority" => "Alta"],
        ["title" => "Crear la vista de tareas", "completed" => false, "priority" => "Baja"]
        
    ];
    
    include "../app/views/header.php";
?>  
       
            <h2>Tareas Pendientes</h2>

            <ul>
                <?php
                    foreach ($tasks as $task) {
                        $taskClasses = "task-item";
                        if ($task["completed"]) {
                            $taskClasses .= " completed";
                        }

                        switch ($task["priority"]) {
                            case "Alta":
                                $taskClasses .= " priority-alta";
                                break;
                            case "Media":
                                $taskClasses .= " priority-media";
                                break;
                            case "Baja":
                                $taskClasses .= " priority-baja";
                                break;
                        }
                        ?>
                        <li class="<?php echo $taskClasses; ?>">
                            <?php echo $task['title']; ?>
                        </li>
                <?php
                    }
                ?>
            </ul>
            

    <?php
    include "../app/views/footer.php";
    ?>