<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $titulo ?></title>
    <meta name="description" content="">  
    <meta name="author" content="">

   <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/vendor.css">  
        <link rel="stylesheet" href="css/main.css">


   <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

   <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

   </head>

   <body id="top">

    <!-- header 
        ================================================== -->
        <header class="short-header">   

            <div class="gradient-block"></div>  

            <div class="row header-content">

                <div class="logo">
                    <a href="index.html">Author</a>
                </div>

                <nav id="main-nav-wrap">
                    <ul class="main-navigation sf-menu">
                        <li class="current"><a href="index.php" title="">Home</a></li>                                 
                        <li class="has-children">
                            <a href="category.php" title="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.php">Wordpress</a></li>
                                <li><a href="category.php">HTML</a></li>
                                <li><a href="category.php">Photography</a></li>
                                <li><a href="category.php">UI</a></li>
                                <li><a href="category.php">Mockups</a></li>
                                <li><a href="category.php">Branding</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="single-standard.php" title="">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="single-video.php">Video Post</a></li>
                                <li><a href="single-audio.php">Audio Post</a></li>
                                <li><a href="single-gallery.php">Gallery Post</a></li>
                                <li><a href="single-standard.php">Standard Post</a></li>
                            </ul>
                        </li>
                        <li><a href="style-guide.php" title="">Styles</a></li>
                        <li><a href="about.php" title="">About</a></li>    
                        <li><a href="contact.php" title="">Contact</a></li>                                        
                    </ul>
                </nav> <!-- end main-nav-wrap -->

                <div class="search-wrap">

                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>

                    <a href="#" id="close-search" class="close-btn">Close</a>

                </div> <!-- end search wrap --> 

                <div class="triggers">
                    <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
                    <a class="menu-toggle" href="#"><span>Menu</span></a>
                </div> <!-- end triggers -->    

            </div>          

        </header> <!-- end header -->