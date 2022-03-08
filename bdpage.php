<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Aula senac RS" />
    <meta name="author" content="Vulgo Muca">
    <meta name="referrer" content="origin">


    <title>Banco de Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/bdpage.css" rel="stylesheet">
</head>

<body>
    <!-- -------------NAV BAR----------------- -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href=""><?php echo "Apolônio"; ?></a>
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
                    <button class="btn btn-find my-2 my-sm-0" type="submit"><?php echo "Pesquise"; ?></button>
                </form>
            </div>
        </nav>
    </header>
    <!-- -------------NAV BAR----------------- -->
    <!-- -------------BANNER------------------ -->
    <section>
        <h1 class="titlle-h1 mt-5"><?php echo "Banco de Dados"; ?></h1>
        <img src="img/img1.png" alt="">
    </section>
    <!-- -------------BANNER------------------ -->
    <!-- -------------CONTEUDO------------------ -->
    <section>
        <h2><?php echo "Como é o funcionamento de Banco de Dados"; ?></h2>
        <hr noshade=”noshade” width="70%" size="20px">
        <div class="content">
            <p><?php echo "Mussum Ipsum, cacilds vidis litro abertis. Pra lá , depois divoltis porris, 
            paradis.Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!Leite de capivaris, 
            leite de mula manquis sem cabeça.Atirei o pau no gatis, per gatis num morreus.In elementis mé pra quem é amistosis quis leo.Admodum accumsan disputationi eu sit. 
            Vide electram sadipscing et per.Cevadis im ampola pa arma uma pindureta.Per aumento de cachacis, eu reclamis."; ?></p>
            <p><?php echo "Nec orci ornare consequat. Praesent lacinia ultrices consectetur. 
            Sed non ipsum felis.Cevadis im ampola pa arma uma pindureta.Casamentiss faiz malandris se 
            pirulitá.Copo furadis é disculpa de bebadis, arcu quam euismod magna."; ?></p>
            <p><?php echo "Nec orci ornare consequat. Praesent lacinia ultrices consectetur. 
            Sed non ipsum felis.Cevadis im ampola pa arma uma pindureta.Casamentiss faiz malandris se 
            pirulitá.Copo furadis é disculpa de bebadis, arcu quam euismod magna."; ?></p>
            <p><?php echo "Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.
            Quem manda na minha terra sou euzis!Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!
            Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis."; ?></p>
            <p><?php echo "Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.
            Quem manda na minha terra sou euzis!Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!
            Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis."; ?></p>
        </div>
    </section>
    <!-- -------------CONTEUDO------------------ -->
    <hr noshade=”noshade” width="70%" size="20px">
    <!-- -------------PERGUNTAS - FORMS------------------  -->
    <form>
        <h4 class="tittle  mt-5"><?php echo "Teve dúvida? Mande-nos uma pergunta!"; ?></h4>
        <div class="form-group mt-3">
            <label for="email"><?php echo "Email"; ?></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted"><?php echo "Nunca compartilharemos seu e-mail com mais ninguém."; ?></small>
        </div>
        <div class="form-group">
            <label for="perguntas"><?php echo "Faça uma pergunta"; ?></label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" for="exampleCheck1"><?php echo "Aceito receber novidades futuras"; ?></label>
        </div>
        <button type="submit" class="btn btn-primary btn-dark"><?php echo "Enviar"; ?></button>
    </form>
    <!-- -------------PERGUNTAS - FORMS------------------  -->
    <!-- ALERT SIMPLES -->
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong><?php echo "Hey, um lembrete importante!"; ?></strong><?php echo "Não esqueça de verificar seu email ;)"; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- ALERT SIMPLES -->
    <!-- -------------FOOTER------------------ -->
    <footer class="foot-end">
        <p>&copy;<?php echo "Apolônio Arts"; ?></p>
    </footer>
    <!-- -------------FOOTER------------------ -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>