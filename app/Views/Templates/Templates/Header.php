<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to These</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../fonts/font-awesome.min.css" rel="stylesheet">
    <link href="../fonts/font-awesome.css" rel="stylesheet">
    <link href="../css/blog.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="page-header page-header-white">
                <h1><strong>Publication des Theses</strong> <small class="fa fa-university"> Uninversite de Ngaoundere Dang</small></h1>
            </div>
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4">
                    <a class="text-dark" href="../Formulaires/Inscription.php"><strong>S'inscrire</strong></a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#"><strong>Theses</strong></a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                    </a>
                    <div class="modal fade" id="myModal" tabindex="" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="bg-info modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">Se Connecter</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <form class="form-signin mb-4 needs-validation" action="Libreries/Verifier.php" method="post">
                                        <div class="text-center mb-4">
                                            <img class="mb-4" src="" alt="" width="50" height="50">
                                            <h1 class="h3 mb-3 font-weight-normal">Theses</h1>
                                        </div>
                    
                                        <div class="form-label-group">
                                            <label for="mail"><strong>Adresse Email </strong></label>
                                            <input type="email" id="mail" name="email" class="form-control" placeholder="Entrer votre adrsse Mail" required autofocus>
                                        </div><br>
                    
                                        <div class="form-label-group">
                                            <label for="massword"><strong>Mot de pass</strong></label>
                                            <input type="password" name="pass"id="massword" class="form-control" placeholder="Password" required>
                                        </div><br>
                                        <div class="checkbox mb-3">
                                            <label>
                                            <input type="checkbox" value="souvenir"> Se souvenir de moi. 
                                            </label>
                                        </div>
                                        <button class="btn btn-lg btn-dark btn-block" type="submit" name="connexion">Continuer</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="copyright text-white d-block mb-3 text-muted">
                                    <p class="text-white"><strong> Publication des Theses</strong>. All Rights Reserved &copy; Copyright 2021-2022 </p>
                                </div>
                                <div class="credits text-white">
                                    Designed by<a class="text-dark"href="#"> Team Code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <a type="button" class="btn btn-sm btn-outline-secondary " data-toggle="modal" data-target="#myModal"><strong>Se Connecter</strong></a>
                </div>
            </div> 
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class=" navbar-brand text-white" href="#">
                    <i class="fa fa-graduation-cap fa-1x " style="color:whitegrey"> Theses</i> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div  class="collapse navbar-collapse" id="navbarSupportedContent">         
                    <ul class="navbar-nav col-auto mr-auto">
                        <li class="nav-item" ><a class="nav-link text-white" href="index.php"><i class="fa fa-home"> ACCEUIL</i></a></li>
                        <li class="nav-item"><a class="nav-link text-white fa fa-folder-open" href="page/consulter.php" > CONSUTER</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle"href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autorisation <span class="caret"></span></a>
                            <div class="dropdown-menu bg-info border border-dark " aria-labelledby="navbarDropdown">
                                <a  class=" text-white dropdown-item " href="page/etudiant.php">ETUDIANT</a>
                                <a  class="text-white dropdown-item " href="page/these.php">THESE</a>
                                <a   class="text-white dropdown-item " href="page/jury.php">JURY</a>
                                <a  class="text-white dropdown-item " href="page/valider.php">VALIDER</a>
                                <a  class="text-white dropdown-item " href="page/levee_validation.php">LEVEE VALIDATION</a>
                                <a  class="text-white dropdown-item  " href="page/signee.php">SIGNEE</a>
                                <a  class="text-white dropdown-item " href="page/levee_signature.php">LEVEE SIGNATURE</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-white" href="page/contact.php"> <i class="fa fa-phone fa-1x"> CONTACT US? </i></a></li>
                    </ul>
                </div>
            </nav>
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active bg-info">
                        <div class="jumbotron">
                            <h1> <i class="fa fa-graduation-cap fa-2x " style="color:whitegrey"> Publication des Theses</i></h1>     
                        </div>
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-dark" href="#" role="button">Lire plus</a></p>
                        </div>
                    </div>
                    <div class="carousel-item bg-info">
                        <div class="bg-info">
                            <h1> <i class="fa fa-graduation-cap fa-2x " style="color:whitegrey"> Publication des Theses</i></h1>     
                        </div>
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-dark" href="#" role="button"> Consulter</a></p>
                        </div>
                    </div>
                    <div class="carousel-item bg-info">
                        <div class="bg-info">
                            <h1> <i class="fa fa-graduation-cap fa-2x " style="color:whitegrey"> Publication des Theses</i></h1>     
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        <!--header_end-->
        </header>


        <script src="../js/jquery-latest.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    