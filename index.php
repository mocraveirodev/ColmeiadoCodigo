<?php
    // Pegando qual rota o usuario digitou no endereço
    $rotas = key($_GET)?key($_GET):"home";

    // Direcionando as rotas e decidindo qual controller vai ser chamado
    switch($rotas){
        case "home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "trilhas-home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "sobre-home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "planos-home":
            include "controllers/HomeController.php";
            $controller = new HomeController();
            $controller->acao($rotas);
        break;
        case "area-aluno":
            include "controllers/AlunoController.php";
            $controller = new AlunoController();
            $controller->acao($rotas);
        break;
    }
?>