<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <?php
        $page = isset($_GET["nav"]) ? $_GET["nav"] : "home";
        ?>
        <title>
            <?php
            switch ($page) {
                case "home":
                    echo "Home";
                    break;
                case "our_services":
                    echo "Our services";
                    break;
                case "about_us":
                    echo "About us";
                    break;
                case "mission_vision":
                    echo "Mission and vision";
                    break;
                case "projects":
                    echo "Projects";
                    break;
                case "contact_us":
                    echo "Contact us";
                    break;

                default:
                    echo "Home";
                    break;
            }
            ?> | Straight forward development</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS Global Compulsory-->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/headers/header1.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- CSS Implementing Plugins -->    
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
        <!-- CSS Theme -->    
        <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
        <link rel="stylesheet" href="assets/css/headers/header1.css" id="style_color-header-1">    
    </head>	

    <body>  

        <!--=== Header ===-->    
        <div class="header">
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="?nav=home">
                            <image src="assets/img/sds-logo.png" alt="logo" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li <?php if($page == "home"){?>class=" active"<?php } ?>>
                                <a href="?nav=home">
                                    Home
                                </a>
                            </li>
                            <li <?php if($page == "our_services"){?>class=" active"<?php } ?>>
                                <a href="?nav=our_services">
                                    Our Services
                                </a>
                            </li>
                            <li <?php if($page == "about_us"){?>class=" active"<?php } ?>>
                                <a href="?nav=about_us">
                                    About us
                                </a>
                            </li>
                            <li <?php if($page == "mission_vision"){?>class=" active"<?php } ?>>
                                <a href="?nav=mission_vision">
                                    Mission and Vision
                                </a>
                            </li>

                            <li <?php if($page == "projects"){?>class=" active"<?php } ?>>
                                <a href="?nav=projects">
                                    Projects
                                </a>
                            </li>
                            <li <?php if($page == "contact_us"){?>class=" active"<?php } ?>>
                                <a href="?nav=contact_us">
                                    Contact us
                                </a>
                            </li>                 
                        </ul>

                    </div><!-- /navbar-collapse -->
                </div>    
            </div>    
        </div><!--/header-->
        <!--=== End Header ===-->