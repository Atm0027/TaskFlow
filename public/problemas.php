<?php
    // Problema 1.1: Perfil de Usuario

        $nombre = "Alejandro";
        $apellidos = "Torres Muñoz";
        $edad = 19;
        $altura = 1.79;
        $esEstudiante = true;

        echo "Nombre: " . $nombre . "<br>";
        echo "Apellidos: " . $apellidos . "<br>";
        echo "Edad: " . $edad . "<br>";
        echo "Altura: " . $altura . "<br>";
        echo "¿Es estudiante?: " . ($esEstudiante ? "Sí" : "No") . "<br>";


    // Problema 1.2: Información de un Producto

        $nombreProducto = "PC";
        $precio = 799.99;
        $stock = 25;
        $oferta = true;

        echo "Nombre del Producto: " . $nombreProducto . "<br>";
        echo "Precio: " . $precio . "$" . "<br>";
        echo "Stock: " . $stock . "<br>";
        echo "¿Está en oferta?: " . ($oferta ? "Sí" : "No") . "<br>";


    // Problema 1.3: Constantes de la Aplicación

        define("NOMBRE_SITIO", "Mi Tienda Aplicación");
        define("VERSION_APP", "1.0");

        echo "Nombre del Sitio: " . NOMBRE_SITIO . "<br>";
        echo "Versión: " . VERSION_APP . "<br>";


    // Problema 2.1: Calculadora Básica

        $num1 = 10;
        $num2 = 5;

        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;
        $division = $num1 / $num2;

        echo "Suma: " . $suma . "<br>";
        echo "Resta: " . $resta . "<br>";
        echo "Multiplicación: " . $multiplicacion . "<br>";
        echo "División: " . $division . "<br>";

    // Problema 2.2: Actualización de Stock

        $stock = 100;
        $nuevoStock = $stock - 25;

        echo "Stock Inicial: " . $stock . "<br>";
        echo "Stock despues de la venta: " . $nuevoStock . "<br>";
        $nuevoStock += 50;
        echo "Stock despues del nuevo pedido: " . $nuevoStock . "<br>";


    // Problema 2.3: Concatenación de Textos

        $nombre = "Alejandro";
        $apellidos = "Torres Muñoz";
        $curso = "Desarrollo Web en Entorno Servidor";

        $fraseCompleta = $nombre . " " . $apellidos . " " . $curso;

       echo $fraseCompleta . "<br>";


    // Problema 2.4: Comparaciones Simples

        $edad = 19;
        $edadMinima = 18;
        var_dump($edad >= $edadMinima);

        $contraseñaGuardada = "1234";
        $contraseñaUsuario = "123";
        var_dump($contraseñaGuardada === $contraseñaUsuario);
    echo "<br>"


    // Problema 2.5: ¿Par o Impar?
        
        $numero = 7;
        if ($numero % 2 == 0) {
            echo "El número " . $numero . " es par.<br>";
        } else {
            echo "El número " . $numero . " es impar.<br>";
        }


    // Problema 3.1: Control de Acceso

        $edad = 19;
        if ($edad >= 18) {
            echo "Puedes pasar<br>";
        } else {
            echo "No puedes pasar<br>";
        }


    // Problema 3.2: Calificación de Examen

        $nota = 7.5;
        if ($nota >= 9) {
            echo "Sobresaliente<br>";
        } elseif ($nota >= 7 && $nota < 9) {
            echo "Notable<br>";
        } elseif ($nota >= 5 && $nota < 7) {
            echo "Aprobado<br>";
        } else {
            echo "Reprobado<br>";
        }


    // Problema 3.3: Menú del Día con switch

        $diaSemana = "lunes";
        switch ($diaSemana) {
            case "lunes":
                echo "Menú del día: Lentejas <br>";
                break;
            case "miércoles":
                echo "Menú del día: Paella<br>";
                break;
            case "viernes":
                echo "Menú del día: Pescado al horno <br>";
                break;
            default:
                echo "Hoy no hay menú especial <br>";
        }


    // Problema 3.4: Verificación de Usuario Avanzada

        $rolUsuario = "admin";
        $usuarioActivo = true;
        if ($rolUsuario === "admin" && $usuarioActivo) {
            echo "Acceso concedido<br>";
        } else {
            echo "Acceso denegado<br>";
        }


    // Problema 4.1: Tabla de Multiplicar del 7

        for($i = 1; $i <= 10; $i++) {
            $resultado = 7 * $i;
            echo "7 x " . $i . " = " . $resultado . "<br>";
        }

    // Problema 4.2: Cuenta Atrás para Año Nuevo

        $contador = 10;
        while ($contador >= 1) {
            echo $contador . "<br>";
            $contador--;
        }
        echo "¡Feliz Año Nuevo!<br>";
    
    
    // Problema 4.3: Recorrer Nombres

        $alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
        foreach ($alumnos as $alumno) {
            echo "Hola, " . $alumno . "<br>";
        }


    // Problema 4.4: Listado de Productos

        $productos = [
            ["nombre" => "Teclado", "precio" => 50],
            ["nombre" => "Ratón", "precio" => 25],
            ["nombre" => "Monitor", "precio" => 200]
        ];

        foreach ($productos as $producto) {
            echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . "€ <br>";
        }


    // Problema 5.1: Ficha de Usuario

        $usuario = ["nombre" => "Alejandro", "edad" => 19, "email" => "atm0027@gmail.com", "esEstudiante" => true];
        echo "Nombre: " . $usuario["nombre"] . "<br>";
        echo "Edad: " . $usuario["edad"] . "<br>";
        echo "Email: " . $usuario["email"] . "<br>";
        echo "Es estudiante: " . ($usuario["esEstudiante"] ? "Sí" : "No") . "<br>";


    // Problema 5.2: Filtrado de Notas
    
        $notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

        foreach ($notas as $nota) {
            if ($nota >= 5) {
                echo "Notas Aprobadas: " . $nota . "<br>";
            }
        }

        
    // Problema 5.3: Lista de la Compra Avanzada


        $listaCompra = [
            "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
            "Lácteos" => ["Leche", "Queso"],
            "Limpieza" => ["Detergente", "Lejía"]
        ];

        foreach ($listaCompra as $categoria => $productos) {
            echo $categoria . ":<br>";
            foreach ($productos as $producto) {
                echo $producto . "<br>";
            }
            echo "<br>";
        }


        // Problema 5.4: Calculando el Total del Carrito

        $productos = [
            ["nombre" => "Teclado", "precio" => 50],
            ["nombre" => "Ratón", "precio" => 25],
            ["nombre" => "Monitor", "precio" => 200]
        ];

        $total = 0;

        foreach ($productos as $producto) {
            $total += $producto["precio"];
        }

        echo "Total del carrito: " . $total . "€ <br>";
?>



