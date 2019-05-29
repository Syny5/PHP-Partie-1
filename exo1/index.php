<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 1</h1>
                <p class="lead">Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <p>Bonjour <?php $userName = 'Victor Demilly'; // Je déclare la variable userName
            echo $userName; ?>, comment allez-vous aujourd'hui ?</p>
          <!-- Puis je lui demande de s'afficher avec echo. -->
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
