<?php
  
  require_once "modules_class.php";
    
//Реалізація класу для виводу головної сторінки
class ArticleContent extends Modules {
	
        private $article_info;
	
	public function __construct($db) {
		parent::__construct($db);
                $this -> article_info = $this -> article -> get($this -> data["id"]);
	}
	
	protected function getTitle() {
                if ($this -> page > 1) {return $this->article_info["title"]." Page ".$this -> page;}
                else {return $this->article_info["title"];}
	}
	
	protected function getDescription() {
		return $this->article_info["meta_desc"];
	}
	
	protected function getKeyWords() {
		return $this->article_info["meta_key"];
	}
	
	protected function getArticle() {
		return $this -> getFullArticle();
	}
	private function getFullArticle() {
            $sr["big_article_img"] = $this -> article_info["article_img"];
            $sr["article_title"] = $this -> article_info["title"];
            $sr["full_text"] = $this -> article_info["full_text"];
            $sr["date"] = $this -> formatDate($this->article_info["date"]);
            return $this -> getReplaceTemplate($sr, "article");
        }
        protected function getMyPagination() {
                return $this -> getPagination (count($this -> articles), $this -> config -> count_blog, $this -> config -> address);
    }
}

?>


