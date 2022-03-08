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
  <link href="js/teste.js" rel="js">

</head>

<body>

  <a href="#"><button type="button" class="btn btn-secondary" rel="tooltip" data-toggle="tooltip" reldata-placement="top" title="Tooltip on top">
      Tooltip on top
    </button></a>
  <a href="#"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
      Tooltip on right
    </button></a>
  <a href="#"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
      Tooltip on bottom
    </button></a>
  <a href="#"><button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
      Tooltip on left
    </button></a>

  <button type="button">teste</button>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <hr>
  <hr>
  <hr>

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

  <nav aria-label="Page navigation example">
  <ul class="pagination pages">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<hr><hr> <hr>
<button type="button" class="popoVer btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Top popover">
  Popover on top
</button>
  <script href="js/teste.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>