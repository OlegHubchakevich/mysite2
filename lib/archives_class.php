<?php
  
  require_once "global_class.php";
  
  //Реалізація класу для таблиці з меню
  class Archives extends GlobalClass {
    public function __construct($db) {
        parent::__construct("archives", $db);
    }
  }

?>