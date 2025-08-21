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
    <div class="main">
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
    
        <div class="row">
            
            <div class="col-3 m-4">
                <!--aside-->
                <div class="list-group">
                    <a href="?p=admin.etudiant.index" class=" m-1 btn list-group-item list-group-item-action ">
                        Etudiant
                    </a>
                    <a href="?p=admin.ufd.index" class=" m-1 btn list-group-item list-group-item-action ">
                        UFD
                    </a>
                    <a href="?p=admin.etablissement.index" class=" m-1 btn list-group-item list-group-item-action">
                        Etablissement
                    </a>
                    <a href="?p=admin.departement.index" class=" m-1 btn list-group-item list-group-item-action">
                        Departement
                    </a>
                    <a href="?p=admin.parcours.index" class=" m-1 btn list-group-item list-group-item-action ">
                        Parcours
                    </a>
                </div>
            </div>  
            <div class="col-8">
                <div class="starter-template" style="padding: 5 px;">
                    <?= $content ?>
                </div>
            </div>
        </div>
        <footer class="pt-4 my-md-5 pt-md-5  text-white bg-dark border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <h3>PUBLICATION THESE</h3>
        
                    <div class="copyright d-block mb-3 text-muted">
                        &copy; Copyright<strong>Publication des Theses</strong>.   All Rights Reserved 
                    </div>
                    <div class="credits">
                        Designed by<a href="#">Boss Workers Teams</a>
                    </div>
                    <p>
        
                    </p>
        
                </div>
                <div class=" col-6 col-md">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-home"> ACCUEIL</i></a></li>
                        <li><a href="#"><i class="fa fa-folder-open"> CONSULTER</i></a></li>
                        <li><a href="#"><i class="fa fa-permission"> Autorisation</i></a></li>
                        <li><a href="#"><i class="fa fa-phone"> Nous Contacter</i></a></li>
                    </ul>
        
                </div> 
                <div class="col-6 col-md ">
                    <h2>Contact Us</h2>
                    <p>
                        24 Block D <br>
                        UN, Ngaoundéré<br>
                        Cameroon<br>
                        <strong>Phone:</strong>+2372366337<BR>
                        <strong>Email:</strong>website@email.com<br>
                    </p>
                </div>
                <div class="col-6 col-md ">
                    <h2>Follow Us</h2>
                    <p>S'il vous plait veuillez nous suivre sur les reseux soiaux :</p>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-6 col-md ">
                    <h2>Our Newsletter</h2>
                    <p></p>
                    <form accept="" method="POST">
                        <input type="email" name="email" class="form-control">
                        <a type="submit" class="btn btn-primary" value="Subscribe" href="">envoyer</a> 
                    </form>
                </div>
            </div>
        </footer>
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