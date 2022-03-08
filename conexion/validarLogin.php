<?php
    if ($_POST) {
        session_start();
        require ("conexion.php");
        $user = $_POST['user'];
        $password = $_POST['pass'];

        $query = $db->prepare("SELECT * FROM employees WHERE name = :u AND pass = :p");
        $query -> bindParam(":u", $user);
        $query -> bindParam(":p", $password);
        $query -> execute();

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if($usuario){
            $_SESSION["usuario"] = $usuario["name"];
            header("location: /");
        }
        else{
            echo ("No se logueo correctamente");
        }
    }
?>