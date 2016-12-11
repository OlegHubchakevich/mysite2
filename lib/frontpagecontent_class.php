<?php
  
  require_once "modules_class.php";
    
//Реалізація класу для виводу головної сторінки
class FrontPageContent extends Modules {
	
	private $articles;
	private $page;
	
	public function __construct($db) {
		parent::__construct($db);
		$this -> articles = $this -> article -> getAllSortDate();
		$this -> page = (isset($this -> data["page"])) ? $this -> data["page"]: 1;
	}
	
	protected function getTitle() {
                if ($this -> page > 1) {return "Page ".$this -> page;}
                else {return "Main page";}
	}
	
	protected function getDescription() {
		return "Registering a domain name can be a some what frustrating experience, but it really should be a fun and creative process for you. ";
	}
	
	protected function getKeyWords() {
		return "Landing page, sites, Internet-Shop, Bootstrap";
	}
	
	
	protected function getArticle() {
		return $this -> getBlogArticles($this -> articles, $this -> page);
	}
	
	protected function getMyPagination() {
                return $this -> getPagination (count($this -> articles), $this -> config -> count_blog, $this -> config -> address);
    }
}

?>

