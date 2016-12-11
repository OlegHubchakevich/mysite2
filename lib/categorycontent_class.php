<?php
  
  require_once "modules_class.php";
    
//Реалізація класу для виводу головної сторінки
class CategoryContent extends Modules {
	
	private $articles;
        private $category_info;
	private $page;
	
	public function __construct($db) {
		parent::__construct($db);
		$this -> articles = $this -> article -> getAllOnCategoryID($this->data["id"]);
                $this -> category_info = $this -> category -> get($this -> data["id"]);
		$this -> page = (isset($this -> data["page"])) ? $this -> data["page"]: 1;
	}
	
	protected function getTitle() {
                if ($this -> page > 1) {return $this->category_info["title"]." Page ".$this -> page;}
                else {return $this->category_info["title"];}
	}
	
	protected function getDescription() {
		return $this->category_info["meta_desc"];
	}
	
	protected function getKeyWords() {
		return $this->category_info["meta_key"];
	}
	
	protected function getArticle() {
		return $this -> getBlogArticles($this -> articles, $this -> page);
	}
	protected function getMyPagination() {
                return $this -> getPagination (count($this -> articles), $this -> config -> count_blog, $this -> config -> address."?view=category&amp;id=".$this->data["id"]);
    }
}

?>


