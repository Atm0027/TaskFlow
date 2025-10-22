<?php
    // Desafío 1: La Sucesión de Fibonacci

        $n = 20; // Número de términos a generar
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            echo $a . "<br>";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }

        echo $a . "<br>";


    // Desafío 2: Comprobador de Números Primos
    
        $numero = 29; // Número a comprobar
        $esPrimo = true;

        if ($numero <= 1) {
            $esPrimo = false;
        } else {
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    $esPrimo = false;
                    break;
                }
            }
        }

        if ($esPrimo) {
            echo "El número " . $numero . " es primo.<br>";
        } else {
            echo "El número " . $numero . " no es primo.<br>";
        }


        
?>