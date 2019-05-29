<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 3</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 3</h1>
                <p class="lead">Créer une variable km. L'initialiser à 1. Afficher son contenu.
                Changer sa valeur par 3. Afficher son contenu.
                Changer sa valeur par 125. Afficher son contenu.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <span><?php $km = 1 ?>
            <?php echo 'À la ' . $km . ','; ?>
            <?php $km = 3 ?>
            <?php echo 'À la ' . $km . ',';?>
            <?php $km = 125 ?>
            <?php echo 'À la ' . $km . ' !!!';?></span>
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
