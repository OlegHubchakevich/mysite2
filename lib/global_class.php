<?php
  
  require_once "config_class.php";
  require_once "checkvalid_class.php";
  require_once "database_class.php";
  
  //Реалізація глобального класу, який є батьківським по відношенню до всіх класів таблиць
  abstract class GlobalClass {
    private $db;
    private $table_name;
    protected $config;
    protected $valid;


    protected function __construct($table_name, $db) {
        $this -> db = $db;
        $this -> table_name = $table_name;
        $this -> config = new Config();
        $this -> valid = new CheckValid();
    }
    
    //Метод, для додавання записів в таблицю
    protected function add ($new_values) {
        return $this -> db -> insert($this -> table_name, $new_values);
    }
    
    //Метод, для редагування записів в таблиці
    protected function edit ($id, $upd_fields) {
        return $this -> db -> updateOnID($this -> table_name, $id, $upd_fields);
    }
    
    //Метод, для видалення записів з таблиці по id
    public function delete ($id) {
        return $this -> db -> deleteOnID($this -> table_name, $id);
    }
    
    //Метод, для видалення всіх записів з таблиці
    public function deleteAll () {
        return $this -> db -> deleteAll($this -> table_name);
    }
    
    //Метод, для отримання поля по іншому полю
    protected function getField ($field_out, $field_in, $value_in) {
        return $this -> db -> getField($this -> table_name, $field_out, $field_in, $value_in);
    }
    
    //Метод, для отримання певного поля по id
    protected function getFieldOnID ($id, $field) {
        return $this -> db -> getFieldOnID ($this -> table_name, $id, $field);
    }
    
    //Метод, для зміни значення поля по id
    protected function setFieldOnID ($id, $field, $value) {
        return $this -> db -> setFieldOnID($this -> table_name, $id, $field, $value);
    }
    
    //Метод, для отримання цілого запису по id
    public function get ($id) {
        return $this -> db -> getElementOnID($this -> table_name, $id);
    }
    
    //Метод, для отримання всіх полів з таблиці
    public function getAll ($order = "", $up = true) {
        return  $this -> db -> getAll($this -> table_name, $order, $up);
    }
    
    //Метод, для отримання всіх записів з таблиці по одному полю
    protected function getAllOnField ($field, $value, $order = "", $up = true) {
        return $this -> db -> getAllOnField($this -> table_name, $field, $value, $order, $up);
    }
    
    //Метод, для отримання випадкових записів з таблиці в певній кількості
    public function getRandomElement ($count) {
        return $this -> db -> getRandomElement($this -> table_name, $count);
    }
    
    //Метод, для отримання останнього запису з таблиці по id
    public function getLastID () {
        return $this -> db -> getLastID($this -> table_name);
    }
    
    //Метод, для отримання кількості записів в таблиці
    public function getCount () {
        return $this -> db -> getCount($this -> table_name);
    }
    
    //Метод, для перевірки значення поля на наявність
    protected function isExists ($field, $value) {
        return $this -> db -> isExists($this -> table_name, $field, $value);
    }
  }

?>
