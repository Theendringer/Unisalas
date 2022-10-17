<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logoUnisales.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Nova Sala</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Salas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("config.php");
    switch(@$_REQUEST["page"]){
        case "novo":
          include("novaSala.php");
          break;
          case "listar":
            include("listarSalas.php");
            break;
            case "salvar":
              include("salvarSala.php");
              break;
              case "editar";
              include("editarSala.php");
              break;
            default:
            print "<h1>Bem Vindo!</h1>
            <br>
            <div id='carouselExampleIndicators' class='carousel slide' data-bs-ride='true'>
            <div class='carousel-indicators'>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1' aria-label='Slide 2'></button>
              <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2' aria-label='Slide 3'></button>
            </div>
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <img src='banner-fies.png' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='banner-noticia.jpg' class='d-block w-100' alt='...'>
              </div>
              <div class='carousel-item'>
                <img src='banner-site-01.jpg' class='d-block w-100' alt='...'>
              </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='prev'>
              <span class='carousel-control-prev-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='next'>
              <span class='carousel-control-next-icon' aria-hidden='true'></span>
              <span class='visually-hidden'>Next</span>
            </button>
          </div>";

    }
?>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>