<?php
    session_start();
    include('../views/modules/pageHead.php');
    head('Login - Administrador', '../views/styles/login.css');
    include('../views/modules/login.php');
    include('../models/checkLogin.php');
    $access = checkLogin();
    switch ($access) {
        case '0':
            $loginInfo = 'Usuario o contraseña incorrectos. Intente nuevamente';
            loginView($loginInfo);
            break;
        case '1':
            $loginInfo = 'Ingreso autorizado... Redireccionando';
            loginView($loginInfo);
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['logged'] = 'true';
            $_SESSION['user_name']=$_POST['username'];
            session_regenerate_id();
            header('location: adminLandingPage.php');
            break;
        default:
            # code...
            break;
    }
?>