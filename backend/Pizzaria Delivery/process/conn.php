<?php 
    session_start();
    $user = "root";
    $pass = "password";
    $db = "pizzaria";
    $host = "localhost";

    try {
        /* Ligar o banco de dados ao projeto  através da lib PDO: */
        $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
        /* Habilitar erros: */
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        /* Imprimir erros: */
        print "Erro: " . $e->getMessage() . "<br/>";
        die();
    }
?>