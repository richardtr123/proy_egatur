<?php
    class Docentes extends Controller{
        public function dashboard(){
            $url='docente/contenido';
            $this->view($url);
        }
    }

?>