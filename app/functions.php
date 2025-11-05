<?php
    function obtenerClasePrioridad($prioridad) {
        $taskClasses = "";
        
        switch ($prioridad) {
            case "Alta":
                $taskClasses .= " priority-alta";
                break;
            case "Media":
                $taskClasses .= " priority-media";
                break;
            case "Baja":
                $taskClasses .= " priority-baja";
                break;
            default:
                $taskClasses = "";
                echo '<script>alert("Prioridad de Clase No Válida");</script>';
                break;
        }

        return $taskClasses;
    }

    function renderizarTarea($task) {
        $taskClasses = "task-item";
        if ($task["completed"]) {
            $taskClasses .= " completed";
        }
        $taskClasses .= obtenerClasePrioridad($task["priority"]);

        return  "<li class='" . htmlspecialchars($taskClasses, ENT_QUOTES, 'UTF-8') . "'> " . htmlspecialchars($task["title"], ENT_QUOTES, 'UTF-8') . " </li>";
    }
?>