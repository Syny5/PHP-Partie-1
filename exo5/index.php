<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 5</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 5</h1>
                <p class="lead">Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
                  Donner une valeur à cette variable et l'afficher.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php $pasDeValeur = null;
            echo $pasDeValeur;
            $pasDeValeur = 15;
            echo $pasDeValeur ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
