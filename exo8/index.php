<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 8</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 8</h1>
                <p class="lead">Créer 3 variables.
                  Dans la première mettre le résultat de l'opération 3 + 4.
                  Dans la deuxième mettre le résultat de l'opération 5 * 20.
                  Dans la troisième mettre le résultat de l'opération 45 / 5.
                  Afficher le contenu des variables.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $firstResult = 3 + 4;
              $secondResult = 5 * 20;
              $thirdResult = 45 / 5;
            ?>
            <p><?php echo $firstResult ?></p>
            <p><?php echo $secondResult ?></p>
            <p><?php echo $thirdResult ?></p>
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
