<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/page.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    
    <title>testPage</title>
</head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">

        </script>
        <script src="./js/bootstrap.min.js">

        </script>


        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Oeuvre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="page-header header container-fluid">
            <div class="overlay">
            <!-- <div class="description">
                <h1>Welcome to the Landing Page!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
            </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1" style="background: #1c1c1c;">
                            <img src="./images/Le meilleur assassin/cover.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script>
            $(document).ready(function(){
                $('.header').height($(window).height());
            })
        </script>
    </body>
</html>