<?php

    class Errores extends Controller{
        public function error401(){
            //error 404;
            $this->view('errors/error_401');
        }
        public function error404(){
            //error 404;
            $this->view('errors/error_404');
        }
        
    }
?>