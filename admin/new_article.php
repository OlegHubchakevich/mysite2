<!DOCTYPE html>
<html>
    <head>
        <title>New article</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/mystyles.css" type="text/css">
        <link rel="stylesheet" href="css/add_art_styles.css" type="text/css">
        <!--[if lt IE ]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="top_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top_menu">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <div class="logo">
                        <h2>Admin block</h2>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="top_menu">
                        
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="../index.php">Main page</a></li>
                          <li><a href="#">Add article</a></li>
                          <li><a href="#">Update article</a></li>
                          <li><a href="#">Delete article</a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
            </div> <!--top_menu-->
        </header>
        <section class="content_article">
            <div class="container">
                <div class="row">
                    
                     <div class="col-md-9 col-md-push-3">
                         <h1 class="text-center">Add new Article</h1>
                         <form name="add_article" action="add_article.php" method="post">
                            <div class="form-group">
                              <label for="exampleCategoryId">Input id categories for articles (1, 2, 3)</label>
                              <input type="number" name="categories_id" class="form-control" id="exampleCategoryId" placeholder="Category ID">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputTitle">Input title article</label>
                              <input type="text" name="title_article" class="form-control" id="exampleInputTitle" placeholder="Title">
                            </div>
                            <div class="form-group">
                              <label for="exampleMetaDesc">Input meta description for article</label>
                              <input type="text" name="meta_desc" class="form-control" id="exampleMetaDesc" placeholder="Meta description">
                            </div>
                            <div class="form-group">
                              <label for="exampleMetaKey">Input meta keywords for article</label>
                              <input type="text" name="meta_key" class="form-control" id="exampleMetaKey" placeholder="Meta keywords">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Select path image for articles</label>
                              <input type="text" name="article_img" class='form-control' id="exampleInputFile" placeholder="Path image articles">
                            </div>
                            <div class="form-group">
                                <label for="introText">Input description for article</label>
                                <textarea name="intro_text" class="form-control" rows="5" id="introText"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fullTextt">Input full text for article</label>
                                <textarea name="full_text" class="form-control" rows="15" id="fullText"></textarea>
                            </div>
                             <input type="hidden" name="date" value="<?php echo time(); ?>">
                            <button type="submit" name="insert" class="btn btn-default">Insert</button>
                        </form>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class="categories">
                            <div class="head clearfix">
                                <h2>Working with Articles</h2>
                                <img src="images/category_folder_icon.png" alt="Category folder">
                            </div>
                            <ul>
                                <li>
                                    <a href="#">Add article</a>
                                </li>
                                <li>
                                    <a href="#">Update article</a>
                                </li>
                                <li>
                                    <a href="#">Delete article</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contacts">
                            <div class="head clearfix">
                                <h2>Contact US</h2>
                                <img src="images/contacts_icon.png" alt="Contacts">
                            </div>
                            <ul>
                                <li>
                                    Hubchakevich Oleh Ihorovich
                                </li>
                                <li>
                                    Mail: oleg1994hub@gmail.com
                                </li>
                                <li>
                                    Mobile phone: 380989703765
                                </li>
                                <li>
                                    Skype: oleg-major20
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; 2016 Created with Oleh Hubchakevich. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myscripts.js"></script>
    </body>
</html>


