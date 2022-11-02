<?php

// De parent controllerclass laad de modal en de view
class Controller
{
  public function modal($modal)
  {
    require_once '../app/modals/' . $modal . ".php";

    return new $modal();
  }

  public function View($view, $data = [])
  {
    if (file_exists('../app/views/' . $view . ".php")) {
      require_once('../app/views/' . $view . ".php");
    } else {
      die('Views bestaat niet');
    }
  }
}