<?php

    class Estudiantes extends Controller{
        public function dashboard(){
            $view='estudiante/contenido';
            $this->view($view);
        }

        public function verContenidopar(){
            $view='estudiante/contenido';
            $this->view($view,array('dato1' => 'go','dato2'=>'okey'));
        }
    }


?>