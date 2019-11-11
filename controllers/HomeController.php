<?php
    class HomeController{
        public function acao($rotas){
            switch($rotas){
                case "home":
                    $this->viewHome();
                break;
                case "trilhas-home":
                    $this->viewTrilhasHome();
                break;
                case "sobre-home":
                    $this->viewSobreHome();
                break;
                case "planos-home":
                    $this->viewPlanosHome();
                break;
                // case "cadastrar-usuario":
                //     include "controllers/HomeController.php";
                //     $controller = new HomeController();
                //     $controller->acao($rotas);
                // break;
                // case "login-usuario":
                //     include "controllers/HomeController.php";
                //     $controller = new HomeController();
                //     $controller->acao($rotas);
                // break;
            }
        }

        private function viewHome(){
            include "views/home.php";
        }

        private function viewTrilhasHome(){
            header('Location:/ColmeiadoCodigo/#trilhas');
        }

        private function viewSobreHome(){
            header('Location:/ColmeiadoCodigo/#sobre');
        }

        private function viewPlanosHome(){
            header('Location:/ColmeiadoCodigo/#planos');
        }
    }
?>