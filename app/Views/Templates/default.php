<?php

use App\App;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/These/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/These/public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/These/public/font-awesome.min.css" />
    <title><?= $this->title; ?></title>
</head>
<body>
    <div class="">
        <div class="jumbotron">
            <h1 class="text-center">PUBLICATION THESE <i class="fa fa-university" style="color:darkgrey"></i></h1>     
        </div>
        <nav class=" mb-2 navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">PUBLICATION_THESE
                <i class="fa fa-search fa-1x " style="color:darkgrey"></i> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="collapse navbar-collapse" id="navbarSupportedContent">         
                <ul class="navbar-nav col-auto mr-auto">
                    <li class="nav-item" ><a class="nav-link" href="../index.php">ACCEUIL<i class="fa fa-home"></i></a></li>
                    <li class="nav-item" ><a class="nav-link" href="../page/consulter.php" >CONSUTER</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autorisation <span class="caret"></span></a>
                        <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
                            <a  class="dropdown-item " href="etudiant.php">ETUDIANT</a>
                            <a  class="dropdown-item " href="these.php">THESE</a>
                            <a   class="dropdown-item " href="jury.php">JURY</a>
                            <a  class="dropdown-item " href="valider.php">VALIDER</a>
                            <a  class="dropdown-item " href="gestion_thèses.php">PUBLICATION THESE</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US?  <i class="fa fa-phone fa-1x"></i></a></li>
                </ul>    
                
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="starter-template" style="padding-top: 100px;">
            <?= $content ?>
        </div>
    </div>
    <div class="row">
            <!--aside-->
            <div class="col-3 list-group">
 
                <a href="#" class="list-group-item list-group-item-action active">Aimeriez vous signalez une perte?  <i class=" icon-chevron-right icon-red offset3"></i></a>
                <a href="#" class="list-group-item list-group-item-action">Objet ayant été rettouvé<i class=" icon-chevron-right icon-blue offset5"></i></a>
                <a href="#" class="list-group-item list-group-item-action">Nos meilleur agents pouv vous aidé!!<i class=" icon-chevron-right offset3"></i> </a>
                <a href="#"class="list-group-item list-group-item-action">Commentaires clients satisfaients..<i class=" icon-chevron-right offset3"></i></a>
                <a href="#"class="list-group-item list-group-item-action">Rejoindre notre communauté?<i class=" icon-chevron-right offset4"></i></a>
               
            <div class="login-form">
        <h1 class="title">login here</h1>

        <form>
                <label>Username</label>
                <input type="text" >
                <label>Password</label>
                <input type="password">
                <br/> <input type="checkbox" >     <label>Remember me</label>         
            <button class="btn btn-primary ">login </button>

        </form>
    </div>   
</div>  



    <script href="/These/public/js/bootstrap.min.js"></script>
    <script src="/These/public/js/jquery-latest.js"></script>

    <style type="text/css">

        body
        {
            background-size:cover;    
        }
        .login-form
        {
            margin-top: 60px;
            box-shadow: 0px 0px 10px 1px grey;
            border-radius:5px;
            padding-bottom:20px;
            background: white;
        }
        .title
        {
            background: #007bbf;
            padding: 10px;
            text-align: center;
            color:#fff;
            border-radius:0px 0px 10px 10px; 

        }

    </style>

</body>
</html>