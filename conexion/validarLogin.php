<?php
    if ($_POST) {
        session_start();
        require ("conexion.php");
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $query = $db->prepare("SELECT * FROM employees WHERE email = :e AND pass = :p");
        $query -> bindParam(":e", $email);
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