<?php
    /*$nome = "Leonardo";
    $idade = 28;
    $altura = 1.70;

    //echo $idade + $altura;
    //echo $idade . $nome;

    $usuario = array(
        "Leonardo", 28, 1.70
    );

    //echo $usuario[2];

    for ($i=4; $i <= 10; $i++) { 
        echo $i . "<br/>";
    }*/

    $nome = $_POST["nome"];
    $texto = $_POST["texto"];
    $sexo = $_POST["sexo"];
    echo $nome . "<br/>";
    echo $texto . "<br/>";
    echo $sexo . "<br/>";
?>