<?php
    class AlunoController{
        public function acao($rotas){
            switch($rotas){
                case "area-aluno":
                    $this->viewAluno();
                break;
            }
        }

        private function viewAluno(){
            include "views/areaDoAluno.php";
        }
    }
?>