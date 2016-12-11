<?php
  
  require_once "global_class.php";
  
  //Реалізація класу для таблиці з розділами
  class Category extends GlobalClass {
    public function __construct($db) {
        parent::__construct("category", $db);
    }
  }

?>