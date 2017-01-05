<?php 
     
     echo ("Hello GitHub");
     print("<br>");
     $var = "I am work!!";
     echo($var);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main news portal</title>
    <link href="Content/Css/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="Content/Css/MyCss/Main.css" rel="stylesheet">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control btn-sm">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control btn-sm">
                </div>
                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
            </form>
        </div>
    </div>
</div>

<div class="jumbotron">
    <div class="content-head">
        <div class="row">
            <div class="col-md-4">
                <div class="name"><strong>The best news <br> portal!!!</strong></div>
            </div>
            <div class="col-md-8">
                <div class="head-block">
                    <div class="advertising">
                        <span>In this place would be your advertising...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 20px">
        <div class="headline">
            <div class="navbar-header">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"> <span>Home</span></a></li>
                        <li><a href="#Main"><span>Main</span> </a></li>
                        <li><a href="#Country"><span>Country</span></a></li>
                        <li><a href="#Economic"><span>Economic</span></a></li>
                        <li><a href="#Politic"><span>Politic</span></a></li>
                        <li><a href="#about"><span>Social</span></a></li>
                        <li><a href="#contact"><span>Sport</span></a></li>
                        <li><a href="#contact"><span>Weather</span></a></li>
                        <li><a href="#contact"><span>Other</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="jumbotron">
    <div class="container-hot-news">
        <div class="row">
            <div class="col-md-6">
                <div id="topNew1" class="top-news" style="background-image:url('img/images (1).jpg') ">
                    <div class="top-news-empty"></div>
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="topNew2" class="top-news" style="background-image:url('img/images.jpg') ">
                    <div class="top-news-empty"></div>
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                </div>
            </div>
        </div>

        <div class="container-news">
            <div id="Main" class="news-header">
                <div class="news-header-in"><span>Main</span></div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (13).jpg')">
                        <div class="left-news-empty"></div>
                        <h3>Name</h3>
                        <p>yrtrtreterertertertertertertert</p>
                    </div>
                </div>
                <div class="col-lg-7 right-news">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="img/images%20(16).jpg ">
                        </div>
                        <div class="col-lg-9">
                            <span>Name</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="img/images%20(17).jpg ">
                        </div>
                        <div class="col-lg-9">
                            <span>Name</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="img/images%20(18).jpg ">
                        </div>
                        <div class="col-lg-9">
                            <span>Name</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Country" class="news-header"><div class="news-header-in"><span>Country</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Economic" class="news-header"><div class="news-header-in"><span>Economic</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Politic" class="news-header"><div class="news-header-in"><span>Politic</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Social" class="news-header" ><div class="news-header-in"><span>Social</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')">
                        <h1>1</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Sport" class="news-header"><div class="news-header-in"><span>Sport</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Weather" class="news-header"><div class="news-header-in"><span>Weather</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>
        <div class="container-news">
            <div id="Other" class="news-header"><div class="news-header-in"><span>Other</span></div></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="left-news" style="background-image:url('img/images (2).jpg')"><h1>1</h1></div>
                </div>
                <div class="col-lg-7">
                    <div><h1>1</h1></div>
                    <div><h1>2</h1></div>
                    <div><h1>3</h1></div>
                </div>
            </div>
        </div>

    </div>





    <hr>
    <footer>
        <p>&copy; itstep 2017 </p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="Content/JavaScript/jquery/jquery-1.10.2.min.map"></script>
<script src="Content/JavaScript/Bootstrap/bootstrap.min.js"></script>
<script src="Content/JavaScript/MyJavaScript/jsMain.js"></script>
</body>
</html>


