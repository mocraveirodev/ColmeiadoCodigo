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
            }
        }

        private function viewHome(){
            include "views/home.php";
        }

        private function viewTrilhasHome(){
            header('Location:/NewColmeia/projeto/#trilhas');
        }

        private function viewSobreHome(){
            header('Location:/NewColmeia/projeto/#sobre');
        }

        private function viewPlanosHome(){
            header('Location:/NewColmeia/projeto/#planos');
        }
    }
?>