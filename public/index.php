<?php
    define("SITE_NAME", "TaskFlow");
    $pageTitle = SITE_NAME . " - Página de Inicio";
    $userName = "Alejandro Torres Muñoz";
    $userAge = 19;
    $isPremiumUser = true;
    include "../app/views/header.php";
?>


   
    
       
            <h2>Perfil del Usuario</h2>
            <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
            <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
            <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

    <?php
    include "../app/views/footer.php";
    ?>