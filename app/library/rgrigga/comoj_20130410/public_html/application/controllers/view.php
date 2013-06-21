<?php
class View extends MY_Controller
{
  function __construct(){
    parent::construct();
  }

  function index($thing){
    echo "VIEW/INDEX";
    var_dump($thing,$thing->data);
  }
}

?>