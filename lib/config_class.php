<?php
    //Реалізація класу налаштувань для сайту
  class Config {
	  var $sitename = "mysite";
	  var $address = "http://mysite/";
	  var $host = "localhost";
	  var $db = "cite_database";
	  var $db_prefix = "table_";
	  var $user = "root";
	  var $password = "";
	  var $admname = "Hubchakevich Oleg";
	  var $admemail = "oleg1994hub@gmail.com";
	  var $dir_img = "image/";
	  var $dir_text = "lib/text/";
	  var $dir_tmpl = "template/";
	  var $count_blog = 3;
	  
	  var $min_login = 4;
	  var $max_login = 255;
  }
?>
