<?php
    class Administrador extends Controller{
        public function dashboard(){
            $view='admin/dashboard';
            $this->view($view);
        }
    }

?>