<?php
    function obtenerClasePrioridad($task) {
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

        return $taskClasses;
    }

    function renderizarTarea($task) {   
        return  "<li class='" . obtenerClasePrioridad($task) . "'> " . $task["title"] . " </li>";
    }
?>