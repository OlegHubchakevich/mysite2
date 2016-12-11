<?php
  
  require_once "global_class.php";
  
  //Реалізація класу для таблиці з статтями
  class Article extends GlobalClass {
    public function __construct($db) {
        parent::__construct("articles", $db);
    }
    
    //Метод, для виводу всіх статтей з сортуванням по даті
    public function getAllSortDate () {
        return $this -> getAll("date", false);
    }
    
    
    //Метод, для виводу всіх статтей з даного розділу
    public function getAllOnCategoryID($category_id) {
        return $this -> getAllOnField("category_id", $category_id, "date", false);
    } 
  }

?>