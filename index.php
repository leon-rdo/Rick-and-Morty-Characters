<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>R&M Characters</title>

    <link rel="shortcut icon" href="./Images/R&M.svg" type="image/x-icon">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./Styles/style.css">


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
                    <img id="RandMLogo" class="me-3" src="./Images/R&M.svg">
                    <strong>R&M Characters</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-1">Rick and Morty Characters!</h1>
                    <p class="lead text-muted">This is a collection of informations about Rick and Morty characters.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                        $str_payload = file_get_contents('https://rickandmortyapi.com/api/character');
                        $json_payload = json_decode($str_payload);
                        foreach($json_payload->results as $index=>$character){
                            ?>
                        <div class="col-12 col-md-6 col-lg-3">
                        <div class="card shadow-sm">
                            <img src="<?php echo $character->image?>" alt="Foto do Personagem <?php echo $character->name?>">
                            <div class="card-body">
                                <h2><?php echo $character->name?></h2>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="./pages/character.php?indice=<?php echo $index?>" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5 bg-dark">
        <div class="container text-light">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">This is a collection of informations about Rick and Morty characters.</p>
            <p class="mb-0">This webpage was made using <a href="https://getbootstrap.com">Bootstrap</a>.
            You can read the documentation on the <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">getting started guide</a>.</p>
            <br>
            <section class="contato">
                <h4>Informações do Autor</h4>
                <ul class="list-group-dark list-group-flush">
                    <li class="list-group-item">E-mail: <a href="mailto:leonardoabreu1212@gmail.com">leonardoabreu1212@gmail.com</a></li>
                    <li class="list-group-item">Telefone: <a href="tel:+5591988458968">91 9 8845-8968</a></li>
                    <li class="list-group-item">Facebook: <a href="https://www.facebook.com/l3ocosta" target="_blank" rel="noopener noreferrer">Leonardo Costa</a></li>
                    <li class="list-group-item">Instagram: <a href="https://www.instagram.com/leonrdo_mtheus/" target="_blank" rel="noopener noreferrer">@leonrdo_mtheus</a></li>
                    <li class="list-group-item">YouTube: <a href="https://www.youtube.com/channel/UCBirplex5Xzxf1BOVkuKr2g" target="_blank" rel="noopener noreferrer">Leonardo Matheus</a></li>
                </ul>
            </section>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>