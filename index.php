<?php 
    include 'ModelNews.php';


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
                        <li><a href="#Social"><span>Social</span></a></li>
                        <li><a href="#Sport"><span>Sport</span></a></li>
                        <li><a href="#Weather"><span>Weather</span></a></li>
                        <li><a href="#Other"><span>Other</span></a></li>
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
                <div id="<?php getIdHot($hot[0]); ?>" class="top-news click" style="background-image:url('<?php getImg($hot[0]); ?>') ">
                    <div class="top-news-empty"></div>
                    <h2><?php echo($hot[0]['Ns_Name']) ; ?></h2>
                    <p><?php echo($hot[0]['Ns_Header']) ; ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="<?php getIdHot($hot[1]); ?>" class="top-news click" style="background-image:url('<?php getImg($hot[1]); ?>') ">
                    <div class="top-news-empty"></div>
                    <h2><?php echo($hot[1]['Ns_Name']) ; ?></h2>
                    <p><?php echo($hot[1]['Ns_Header']) ; ?></p>
                </div>
            </div>
        </div>


<?php    foreach($resurse->getCategory() as $value){
      $news=$resurse->getNews($value['Ct_Id']);
        ?>
        <div class="container-news">
            <div id="<?php echo($value['Ct_Name']) ; ?>" class="news-header">
                <div class="news-header-in"><span><?php echo($value['Ct_Name']); ?></span></div>
            </div>
                <div class="row">
                <div class="col-sm-5">
                    <div id="<?php echo($news[0]['Ns_Id'])  ?>" class="left-news click" style="background-image:url('<?php getImg($news[0]); ?>')">
                        <div class="left-news-empty"></div>
                        <h3><?php echo($news[0]['Ns_Name']); ?></h3>
                        <p><?php echo($news[0]['Ns_Header']); ?></p>
                    </div>
                </div>

                <div class="col-lg-7 right-news">
                    <?php for($i=1;$i<4;$i++){   ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?php getImg($news[$i]); ?>">
                        </div>
                        <div class="col-lg-9">
                            <span id="<?php echo($news[$i]["Ns_Id"]); ?>" class="new-right-name click"><?php echo($news[$i]['Ns_Name']); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

<?php  }?>

    </div>





    <hr>
    <footer>
        <p>&copy; itstep 2017 </p>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="Content/JavaScript/jquery/jquery-1.10.2.min.map"></script>
<script src="Content/JavaScript/Bootstrap/bootstrap.min.js"></script>
<script src="Content/JavaScript/MyJavaScript/jsMain.js"></script>
</body>
</html>


