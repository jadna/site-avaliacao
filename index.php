<?php
  $login_cookie = $_COOKIE['login'];

    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>

  <title>Recomendação de Pontos de Interesse para Grupos de Indivíduos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

 

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Group Systems Recommendation for POI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pesquisa">Pesquisa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#instrucoes">Instruções</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cadastro.html"> Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.html"> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.mapdevelopers.com/what-is-my-address.php" target="_blank"> Coordenada</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white" style="background-image: url(background.jpg);">
    <div class="container text-center">
      <h1>Avaliação Experimental</h1>
      <h2>Recomendação de Pontos de Interesse para Grupos de Indivíduos</h2>
      <p class="lead">Aqui estão apresentas as instruções para participação no experimento com o objetivo de validar o tema da pesquisa</p>
    </div>
  </header>

  <section id="pesquisa">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style="text-align: center;">Objeto da pesquisa </h2>
          <p class="lead" style="text-align: justify;">Neste trabalho estamos desenvolvendo um Sistema de Recomendação de Pontos de Interesse (POI) para Grupos. 
            Pontos de Interesse podem ser bares, restaurantes, museus, parques, monumentos, locais de atrações turísticas na cidade, praias, 
            eventos, etc. Tais recomendações se baseiam nas preferências dos grupos de usuários e sua localização geográfica, logo o objetivo 
            mor é recomendar POIs que estejam geograficamente mais mais próximos do grupo que atendam seus interesses simultaneamente.
          </p>
          <!--ul>
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul!-->
        </div>
      </div>
    </div>
  </section>

  <section id="instrucoes" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style="text-align: center;">Instruções de Participação </h2>
          <p class="lead"></p>
          <ol>
            <!--li style="text-align: justify;">Acesse o link <a href="#avaliacao">da avaliação</a> e cadastre seus dados pessoais, como nome e e-mail. Essas informações serão utilizadas para futuro contato. Após o experimento, essas informações serão apagadas da base de dados.</li-->
            <li style="text-align: justify;">Acesse o link <a href="cadastro.html">cadastro</a> e crie seu usuário informando um e-mail e senha. Após o experimento, essas informações serão apagadas da base de dados.</li>
            <li style="text-align: justify;">Após a criação do usuário você será redirecionado para página de login, efetue o login para ter acesso ao sistema.</li>
            <li style="text-align: justify;">Informe sua (ou uma preferida) posição geográfica (latitude e longitude). Se quiser saber sua coordenada acesse o link <a href="https://www.mapdevelopers.com/what-is-my-address.php" target="_blank">Coordenadas</a> no topo do site.</li>
            <li style="text-align: justify;">Ao entrar no sistema avalie pelo menos 20 POIs, atribuindo notas de 1 a 5 (onde 1 indica que não gostou daquele local e 5 você gostou muito). Locais não visitados não precisam ser avaliados. NÃO ESQUEÇA DE CLICAR EM SALVAR!</li>
            <li style="text-align: justify;">Após as coletas de dados, será criado grupos aleatórios de 3, 5 e 10 pessoas, então você e seu GRUPO receberá um e-mail com as recomendações de pontos de interesse a partir das informações providas nos itens 2 e 3.</li>
            <!--li style="text-align: justify;">Para cada item de recomendação, avalie com notas de 1 a 5 (onde 1 indica que não gostou daquele local e 5 você gostou muito).</li>
            <li style="text-align: justify;">Após as coletas de dados, você receberá um e-mail  com as recomendações de pontos de interesse a partir das informações providas nos itens 3 e 4. Para cada item de recomendação, avalie com notas de 1 a 5 (onde 1 indica discorda totalmente, e 6 que concorda totalmente).</li-->
          </ol>
         </div>
      </div>
    </div>
  </section>

  <!--section id="maps">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 style="text-align: center;">Coordenada</h2>
          <div id="map" width="800" height="900" style="border:0"></div>
          <iframe width=800px height=500px frameborder=0px></iframe> 
          <script>
            function initMap() {
              var myLatlng = {lat: -12.736694907261837, lng: -38.16154205797099};

              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 5, center: myLatlng});

              // Create the initial InfoWindow.
              var infoWindow = new google.maps.InfoWindow(
                  {content: 'Click the map to get Lat/Lng!', position: myLatlng});
              infoWindow.open(map);

              // Configure the click listener.
              map.addListener('click', function(mapsMouseEvent) {
                // Close the current InfoWindow.
                infoWindow.close();

                // Create a new InfoWindow.
                infoWindow = new google.maps.InfoWindow({position: mapsMouseEvent.latLng});
                infoWindow.setContent(mapsMouseEvent.latLng.toString());
                infoWindow.open(map);
              });
            }
          </script>
          <defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC97oj_73Oab6zrUkHfWH-gq7zF2omHkOo&callback=initMap">
          </defer>
        </div>
      </div>
    </div>
  </section -->



  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Jadna Almeida</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
