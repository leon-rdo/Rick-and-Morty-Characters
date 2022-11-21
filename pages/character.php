<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>R&M Characters</title>
    <link rel="shortcut icon" href="../Images/R&M.svg" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
<header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other background
                            context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
                            to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="./index.php" class="navbar-brand d-flex align-items-center">
                    <img id="RandMLogo" class="me-3" src="../Images/R&M.svg">
                    <strong>R&M Characters</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid" style="background-image: linear-gradient(grey, black);">
            <div class="row justify-content-md-center">
                    <?php
                    $str_payload = file_get_contents('https://rickandmortyapi.com/api/character');
                    $json_payload = json_decode($str_payload);
                    foreach ($json_payload->results as $index => $character) {
                        if ($index == $_GET["indice"]) {
                    ?>
                    <div class="col-auto">
                        <img class="characterPic" src="<?php echo $character->image?>" alt="Foto do Personagem <?php echo $character->name?>">
                    </div>
                    <div class="col-8">
                    <ul class="list-group mb-5">
                        <li class="list-group-item list-group-item-dark text-center" aria-current="true">
                            <h1 class="display-1"><?php echo $character->name?></h1>
                        <li class="list-group-item">Status: <?php echo $character->status?></li>
                        <li class="list-group-item">Species: <?php echo $character->species?></li>
                        <li class="list-group-item">Type: <?php echo $character->type?></li>
                        <li class="list-group-item">Gender: <?php echo $character->gender?></li>
                        <li class="list-group-item">
                            Origin: <?php echo $character->origin->name?>
                                    <?php echo $character->origin->url?>
                        </li>
                    </ul>
                    </div>                    
                    <?php
                        }
                    }
                    ?>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>