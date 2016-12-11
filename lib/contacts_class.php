<?php
  
  require_once "global_class.php";
  
  //Реалізація класу для таблиці з банерами
  class Contacts extends GlobalClass {
    public function __construct($db) {
        parent::__construct("contacts", $db);
    }
  }

?>