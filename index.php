<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aula senac RS" />
    <meta name="author" content="Vulgo Muca">
    <meta name="referrer" content="origin">


    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <!-- -------------NAV BAR----------------- -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href=""><?php echo "Apolônio Arts"; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link btn" data-toggle="tooltip" data-placement="top" title="Home" href="index.php"><?php echo "Inicio"; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn" data-toggle="tooltip" data-placement="bottom" title="Code" href="#"><?php echo "Código"; ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn" data-toggle="tooltip" data-placement="bottom" title="Programming" href="#"><?php echo "Programação"; ?></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link btn" data-toggle="tooltip" data-placement="bottom" title="Vai Cavalo" href="teste.php"><?php echo "Go Horse"; ?></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Go Horse" aria-label="Search">
                    <button class="btn btn-find my-2 my-sm-0" type="submit" data-toggle="modal" data-target="search"><?php echo "Pesquisar"; ?></button>
                </form>
            </div>
        </nav>
    </header>
    <!-- -------------NAV BAR----------------- -->

    <!-- -------------BANNER------------------ -->
    <section>
        <h1 class="titlle-h1 mt-5"><?php echo "Apolônio"; ?></h1>
        <img src="img/img4.jpeg" alt="">
    </section>
    <!-- -------------BANNER------------------ -->

    <!-- -------------CONTEUDO------------------ -->
    <section>
        <h2><?php echo "Como entrar no mundo dos códigos"; ?></h2>
        <hr noshade=”noshade” width="70%" size="20px">
        <div class="content">
            <p><?php echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus, erat id gravida fringilla,
                velit diam maximus tellus, a luctus urna ipsum ac turpis. Vestibulum nec porttitor nunc, vitae malesuada
                enim. Proin sit amet dolor porttitor, consectetur ligula at, convallis sem. Duis vitae est rutrum,
                gravida erat ac, euismod nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ex eu
                felis finibus elementum sodales in ipsum. Cras dignissim dolor lectus, iaculis consectetur libero semper
                nec. Donec accumsan nisl quam, non porta mi vulputate quis. Suspendisse eget mollis ipsum, quis tempus
                tellus. Nam id commodo orci. Duis ac erat sed dolor rutrum bibendum. Morbi sit amet lacus eget sem
                sollicitudin tincidunt in vitae tortor. Quisque in nunc quis dui luctus semper in mattis enim. Nunc
                lacinia maximus ex, nec finibus nulla rhoncus ac."; ?></p>
            <p><?php echo "Integer rhoncus ante nunc, id tristique nisi finibus tristique. Praesent sit amet auctor erat. Integer
                dolor risus, vehicula ut tempus vitae, pulvinar in lorem. Cras ut diam ornare, bibendum augue nec,
                efficitur diam. Ut vel malesuada dolor. Pellentesque velit urna, convallis vel efficitur ac, tempor
                tristique orci. Vestibulum et condimentum justo. Morbi in rhoncus turpis, eu semper augue. Nulla at nisl
                in felis congue dapibus nec faucibus tellus. Suspendisse lobortis, odio bibendum facilisis finibus, urna
                arcu imperdiet tortor, non aliquet diam massa vitae nibh."; ?></p>
            <p><?php echo "Nullam interdum eget nunc non bibendum. Morbi tristique neque nisl. Maecenas quam justo, dictum sed justo
                vitae, dignissim tempor tellus. Praesent varius mattis leo, vel gravida tellus pharetra sit amet.
                Vivamus tincidunt magna vel tempor mollis. Phasellus eget orci metus. Vestibulum tortor nunc, tempor nec
                eros vel, egestas commodo enim. Sed vulputate faucibus vehicula. Cras in maximus mi. Nullam gravida sem
                eget erat egestas maximus in id ante. Praesent tempor augue ac metus vehicula maximus. Nulla euismod id
                turpis vulputate suscipit. Donec blandit, neque in eleifend tempus, lacus turpis mattis nisi, vel
                malesuada ante libero nec tortor."; ?></p>
            <p><?php echo "Integer rhoncus ante nunc, id tristique nisi finibus tristique. Praesent sit amet auctor erat. Integer
                dolor risus, vehicula ut tempus vitae, pulvinar in lorem. Cras ut diam ornare, bibendum augue nec,
                efficitur diam. Ut vel malesuada dolor. Pellentesque velit urna, convallis vel efficitur ac, tempor
                tristique orci. Vestibulum et condimentum justo. Morbi in rhoncus turpis, eu semper augue. Nulla at nisl
                in felis congue dapibus nec faucibus tellus. Suspendisse lobortis, odio bibendum facilisis finibus, urna
                arcu imperdiet tortor, non aliquet diam massa vitae nibh."; ?></p>
        </div>
    </section>
    <!-- -------------CONTEUDO------------------ -->
    <hr noshade=”noshade” width="70%" size="20px">
    <!-- -------------TITULOS------------------ -->
    <section>
        <h2 class="titlle-h1 mt-5"><?php echo "ENTRE MAIS A FUNDO SOBRE PROGRAMAÇÃO"; ?></h2>
    </section>
    <!-- -------------TITULOS------------------ -->
    <!-- -------------CARDS------------------ -->
    <div class="card-deck row">
        <ul class="col-12 col-md-6 col-lg-4">
            <li class="card shadow p-3 mb-5 bg-white rounded">
                <img src="img/img5.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Banco de Dados"; ?></h5>
                    <p class="card-text"><?php echo "his is a longer card with supporting. This content is a little bit longer."; ?></p>
                    <a href="bdpage.php"><button type="button" class="btn btn-dark"><?php echo "Ver mais"; ?></button></a>
                </div>
            </li>
        </ul>
        <ul class="col-12 col-md-6 col-lg-4">
            <liv class="card shadow p-3 mb-5 bg-white rounded">
                <img src="img/img6.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "HTML"; ?></h5>
                    <p class="card-text"><?php echo "This card has supporting text below as a natural lead-in to additional content."; ?>
                    </p>
                    <a href="htmlpage.php"><button type="button" class="btn btn-dark"><?php echo "Ver mais"; ?></button></a>
                </div>
            </liv>
        </ul>
        <ul class="col-12 col-md-6 col-lg-4">
            <li class="card shadow p-3 mb-5 bg-white rounded">
                <img src="img/img7.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "CSS"; ?></h5>
                    <p class="card-text"><?php echo "This is a wider card with supporting text bell content."; ?></p>
                    <a href="page-css.php"><button type="button" class="btn btn-dark"><?php echo "Ver mais"; ?></button></a>
                </div>
            </li>
        </ul>
    </div>
    <!-- -------------CARDS------------------ -->
    <hr noshade=”noshade” width="70%" size="20px">
    <!-- -------------FOOTER------------------ -->

    <footer class="foot-end">
        <p>&copy;<?php echo "Apolônio Arts"; ?></p>
    </footer>
    <!-- -------------FOOTER------------------ -->

    <script href="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
</body>

</html>