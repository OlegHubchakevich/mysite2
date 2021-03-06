<?php
    error_reporting(E_ERROR);
    $list = mysqli_connect ("localhost","root","");
    mysqli_select_db("cite_database",$list);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Main page admin block</title>
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
                            <li><a href="new_article.php">Add article</a></li>
                            <li><a href="update_article.php">Update article</a></li>
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
                         <h1 class="text-center" style='color:#4cae4c;'>Welcome to the admin block</h1>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class="categories">
                            <div class="head clearfix">
                                <h2>Working with Articles</h2>
                                <img src="images/category_folder_icon.png" alt="Category folder">
                            </div>
                            <ul>
                                <li>
                                    <a href="new_article.php">Add article</a>
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

