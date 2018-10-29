<?php
  // Load Config
  require_once('config/config.php');

  // Autoload Core Libraries

  /*
    * for this to work make sure you name your library classes
    * exactly the same way you name their file names
    * case sensitive.
  */
  
  spl_autoload_register(function($className){
    require_once('libraries/' . $className . '.php');
  });
