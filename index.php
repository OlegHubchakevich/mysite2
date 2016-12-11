<?php
error_reporting(E_ERROR);
mb_internal_encoding("UTF-8");
require_once "lib/database_class.php";
require_once "lib/frontpagecontent_class.php";
require_once "lib/categorycontent_class.php";
require_once "lib/articlecontent_class.php";

$db = new DataBase();
$view = $_GET["view"];

switch($view) {
	case "": 
            $content = new FrontPageContent($db);
            break;	
        case "category":
            $content = new CategoryContent($db);
            break;
        case "article":
            $content = new ArticleContent($db);
            break;
	default: exit;
}

echo $content -> getContent();

?>
