<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pie PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= BASE_URI?>/webroot/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?= BASE_URI?>/webroot/css/main.css" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div>
            <img src="<?= BASE_URI?>/webroot/assets/icone_nav.png" alt="icone_play" height="15">
            <a class="navbar-brand" href="<?= BASE_URI?>/">MyCinoche</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li>
                <a class="nav-link" href="<?= BASE_URI?>/">Home</a>
                </li>
                <li>
                <a class="nav-link" href="<?= BASE_URI?>/user">User</a>
                <li>
                <a class="nav-link" href="<?= BASE_URI?>/user/add">Add</a>
                </li>
                </li>
                <li>
                <a class="nav-link" href="<?= BASE_URI?>/user/login">Login</a>
                </li>
                <li>
                <a class="nav-link" href="<?= BASE_URI?>/user/register">Register</a>
                </li>
                <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop_film" data-toggle="dropdown">
                            Films
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="films.php">Search</a>
                            <a class="dropdown-item" href="projection.php">Projection</a>
                        </div>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop_membre" data-toggle="dropdown">
                        Membres
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="search_membre.php">Search</a>
                        <a class="dropdown-item" href="edit_abo.php">Edit abonnement</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop_historique" data-toggle="dropdown">
                        Historique
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="search_historique.php">Search</a>
                        <a class="dropdown-item" href="edit_historique.php">Edit historique</a>
                        <a class="dropdown-item" href="ajout_historique.php">Ajout historique</a>
                    </div>
                </li> -->
                <li class="nav-item active"></li>
                <li class="nav-item dropdown"></li>
            </ul>
        </div>
    </nav>
</header>
<br>
<br>
<br>
<br>


<?= $view ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?= BASE_URI?>/webtoot/js/main.js"></script>
</body>
</html>
