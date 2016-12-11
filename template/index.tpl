<!DOCTYPE html>
<html>
    <head>
        <title>%title%</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="%meta_desc%">
        <meta name="keywords" content="%meta_key%">
        <link rel="stylesheet" href="%address%css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="%address%fancybox/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="%address%css/animate.css">
        <link rel="stylesheet" href="%address%css/mystyles.css" type="text/css">
        <!--[if lt IE ]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header >
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
                        <h2>Create Sites</h2>
                        <p>We simply love to design</p>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="top_menu">
                        
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="%address%?page=1">Home</a></li>
                          <li><a href="%address%?view=category&amp;id=1">Create sites</a></li>
                          <li><a href="%address%?view=category&amp;id=2">Landing-Page</a></li>
                          <li><a href="%address%?view=category&amp;id=3">Internet-Shops</a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
            </div> <!--top_menu-->
        </header>
        <section class="content_article">
            <div class="container">
                <div class="row wow lightSpeedOut">
                    
                     <div class="col-md-9 col-md-push-3">
                        %articles%
                        %pagination%
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class="search">
                            <div class="head clearfix">
                                <h2>Search on site</h2>
                                <img src="images/search_icon.png" alt="Search">
                            </div>
                            <form class="form-inline">
                                <div class="form-group" name="search" action="%address" method="get">
                                    <input type="hidden" name="view" value="search">
                                  <input type="text" name="words" class="form-control" id="input-search" placeholder="Search words">
                                </div>
                                <button type="submit" class="btn btn-default">SEARCH</button>
                            </form>
                        </div>
                        <div class="authorization">
                            %auth_user%
                        </div>
                        <div class="categories">
                            <div class="head clearfix">
                                <h2>Browse Categories</h2>
                                <img src="images/category_folder_icon.png" alt="Category folder">
                            </div>
                            <ul>%categories%</ul>
                        </div>
                        <div class="archives">
                            <div class="head clearfix">
                                <h2>Monthly Archives</h2>
                                <img src="images/folder_icon.png" alt="Archives folder">
                            </div>
                            <ul>
                                %archives%
                            </ul>
                        </div>
                        <div class="contacts">
                            <div class="head clearfix">
                                <h2>Contact US</h2>
                                <img src="images/contacts_icon.png" alt="Contacts">
                            </div>
                            <ul>
                                %contacts%
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
                            <p class="wow zoomIn">&copy; 2016 Created with Oleh Hubchakevich. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        
        <script src="js/myscripts.js"></script>
    </body>
</html>
