<?php
    include_once("./readingSpace.php");

    for ($i=0; $i < count($oeuvre); $i++) {
        $oeuvre[$i];
        $chap = readFiler("./images/$oeuvre[$i]/");
        file_put_contents("./series", "");
        for ($j=0; $j < count($chap); $j++) { 
            if(is_dir("./images/$oeuvre[$i]/$chap[$j]")) {
                echo $chap[$j];
            }
        }
    };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page d'accueil</title>
</head>
<body>

    <div class="b-example-divider">
        
    </div>

    <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Custom cards</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
        <?php
            foreach ($oeuvre as $key => $value) {
                echo "<a href='./images/" . $value . "'>
                <div class='card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg' style='background-image: url('./images/" . $value . "/cover');' >
                <div class='d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1'>
                <h2 class='pt-5 mt-5 mb-4 display-6 lh-1 fw-bold'>$value</h2>
                <ul class='d-flex list-unstyled mt-auto'>
                    <li class='d-flex align-items-center me-3'>
                    <svg class='bi me-2' width='1em' height='1em'>test<use xlink:href='#geo-fill'/></svg>
                    <small>Earth</small>
                    </li>
                    <li class='d-flex align-items-center'>
                    <svg class='bi me-2' width='1em' height='1em'><use xlink:href='#calendar3'/></svg>
                    <small>3d</small>
                    </li>
                </ul>
                </div>
            </div>
            </div></a>";
                
            }?>
            
        

        <!-- <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
            <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>Pakistan</small>
                </li>
                <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>4d</small>
                </li>
            </ul>
            </div>
        </div>
        </div>

        <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small>California</small>
                </li>
                <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                <small>5d</small>
                </li>
            </ul>
            </div>
        </div> -->
        </div>
    </div>
    </div>
</body>
</html>