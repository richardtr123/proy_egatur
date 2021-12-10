<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/parametros
   */
  class Core {
    protected $controladorActual = 'Pages';
    protected $metodoActual = 'index';
    protected $parametros = [];

    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();
      var_dump($url);
      // Look in BLL for first value
      if (!($url==NULL)) {
        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
          // If exists, set as controller
          $this->controladorActual = ucwords($url[0]);
          // Unset 0 Index
          unset($url[0]);
        }
      }
      

      // Require the controller
      require_once '../app/controllers/'. $this->controladorActual . '.php';

      // Instantiate controller class
      $this->controladorActual = new $this->controladorActual;

      if (!($url==NULL)) {
      // Check for second part of url
      if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->controladorActual, $url[1])){
          $this->metodoActual = $url[1];
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get parametros
      $this->parametros = $url ? array_values($url) : [];
      }
        

      // Call a callback with array of parametros
      call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
    }

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  }


