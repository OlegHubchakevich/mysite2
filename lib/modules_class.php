<?php
   
   require_once "config_class.php";
   require_once "articles_class.php";
   require_once "category_class.php";
   require_once "users_class.php";
   require_once "archives_class.php";
   require_once "contacts_class.php";
   require_once "message_class.php";
   
   //Реалізація класу для шаблонізатора
   abstract class Modules {
        
        protected $config;
        protected $article;
        protected $category;
        protected $user;
        protected $archives;
        protected $contacts;
        protected $message;
        protected $data;
        
        public function __construct($db) {
            session_start();
            $this -> config = new Config();
            $this -> article = new Article($db);
            $this -> category = new Category($db);
            $this -> user = new User($db);
            $this -> archives = new Archives($db);
            $this -> contacts = new Contacts($db);
            $this -> message = new Message($db);
            $this -> data = $this -> secureData($_GET);
        }
        
        //Метод, для заміни всіх елементів в нашому шаблонізаторі
        public function getContent() {
            $sr["title"] = $this -> getTitle();
            $sr["meta_desc"] = $this -> getDescription();
            $sr["meta_key"] = $this -> getKeyWords();
            $sr["archives"] = $this -> getArchives();
            $sr["auth_user"] = $this -> getAuthUser();
            $sr["contacts"] = $this -> getContacts();
            $sr["articles"] = $this -> getArticle();
            $sr["categories"] = $this -> getCategory();
            $sr["pagination"] = $this ->getMyPagination();
            return $this -> getReplaceTemplate($sr, "index");
        }
        
        //Загальні методи для всіх сторінок
        abstract protected function getTitle();
        abstract protected function getDescription();
        abstract protected function getKeyWords();
        abstract protected function getArticle();
        
        //Реалізація методу для отримання всіх пунктів архіву
        protected function getArchives () {
            $archives = $this -> archives -> getAll();
            for ($i = 0; $i < count($archives); $i++) {
                $sr["title"] = $archives[$i]["title"];
                $sr["link"] = $archives[$i]["link"];
                $text .= $this -> getReplaceTemplate($sr, "archives_item");
            }
            return $text;
  
   
        }
        
        //Реалізація методу для отримання всіх пунктів категорій
        protected function getCategory () {
            $category = $this -> category -> getAll();
            for ($i = 0; $i < count($category); $i++) {
                $sr["title"] = $category[$i]["title"];
                $sr["link"] = $category[$i]["link"];
                $text .= $this -> getReplaceTemplate($sr, "categories_item");
            }
            return $text;
  
   
        }
        
        //Реалізація методу для отримання блоку авторизації користувачів
        protected function getAuthUser() {
            $sr["message_auth"] = "";
            return $this -> getReplaceTemplate($sr, "auth_user");
        }
        
        //Реалізація методу для отримання блоку контактів
        protected function getContacts() {
            $contacts = $this -> contacts -> getAll();
            for ($i = 0; $i < count($contacts); $i++) {
                $sr["contacts_item"] = $contacts[$i]["contacts_item"];
                $text .= $this -> getReplaceTemplate($sr, "contacts_item");
            }
            return $text;
            
        }
        
        protected function getTop () {
            return "";
        }
        
         protected function getBottom () {
            return "";
        }
        
        
        //Метод, для забезпечення безпеки даних
        private function secureData($data) {
            foreach ($data as $key => $value) {
                if (is_array($value)) {$this -> secureData($value);}
                else {$data[$key] = htmlspecialchars($value);}
            }
            return $data;
        }
        
        //Оприділяємо з якої статті починати вивід
        protected function getBlogArticles($articles, $page) {
            $start = ($page - 1) * $this -> config -> count_blog;
            $end = (count($articles) > $start + $this -> config -> count_blog) ? $start + $this -> config -> count_blog : count($articles);
            for ($i = $start; $i < $end; $i++) {
                $sr["article_title"] = $articles[$i]["title"];
                $sr["article_img"] = $articles[$i]["article_img"];
                $sr["main_text"] = $articles[$i]["intro_text"];
                $sr["date"] = $this -> formatDate($articles[$i]["date"]);
                $sr["link_article"] = $this -> config -> address."?view=article&amp;id=".$articles[$i]["id"];
                $text .= $this -> getReplaceTemplate($sr, "article_intro");
            }
            return $text;

        }
        
        protected function formatDate($time) {
            return date("Y-m-d H:i:s", $time);
        }
        
        //Метод для виводу пагінації
        protected function getPagination($count, $count_on_page, $link) {
            $count_pages = ceil($count / $count_on_page);
            $sr["number"] = 1;
            $sr["link"] = $link;
            $pages = $this -> getReplaceTemplate($sr, "number_page");
            $sym = (strpos($link, "?") !== false)?"&amp;":"?";
            for ($i = 2; $i <= $count_pages; $i++) {
                $sr["number"] = $i;
                $sr["link"] = $link.$sym."page=$i";
                $pages .= $this -> getReplaceTemplate($sr, "number_page");
            }
            $els["number_page"] = $pages;
            return $this -> getReplaceTemplate($els, "pagination");
        }

        //Метод, для доступу до шаблонізатора
        protected function getTemplate($name) {
            $text = file_get_contents($this -> config -> dir_tmpl.$name.".tpl");
            return str_replace("%address%", $this -> config -> address, $text);
        }
        
        //Методи, для заміни елементів в шаблонізаторі
        protected function getReplaceTemplate($sr, $template) {
            return $this -> getReplaceContent($sr, $this -> getTemplate($template));
        }
        
        private function getReplaceContent ($sr, $content) {
            $search = array();
            $replace = array();
            $i = 0;
            foreach ($sr as $key => $value) {
                $search[$i] = "%$key%";
                $replace[$i] = $value;
                $i++;
            }
            return str_replace ($search, $replace, $content);
        }
        
   }
   
?>
