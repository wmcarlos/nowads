<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>..:: NowAds ::..</title>
    <link href="views/css/bootstrap.css" rel="stylesheet" />
    <link href="views/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="views/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="views/js/jquery-1.11.1.js"></script>

    <script src="views/js/bootstrap.js"></script>
    <script type="text/javascript" src="views/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="views/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="views/js/bootbox.min.js"></script>
    <script type="text/javascript" src="views/js/helpers.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>cVargas@frontuari.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+584160984343
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="views/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a <?php if(isset($_SESSION["username"]) and !empty($_SESSION["username"])){ print 'class="dropdown-toggle" data-toggle="dropdown" '; }?> href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media" style="border-bottom:1px solid #ccc;">
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php print $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?> </h4>
                                        <h5><?php print $_SESSION["role"]; ?></h5>
                                    </div>
                                </div>
                                <div style="margin-top:5px;">
                                <a href="?v=profile" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="?v=login&operation=logout" class="btn btn-danger btn-sm">Logout</a>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>