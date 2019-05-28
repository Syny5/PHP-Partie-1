<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 2</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid" id="jumb">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 2</h1>
                <p class="lead" id="enonce">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php $lastName = 'Demilly';
            $firstName = 'Victor';
            $age = 24;
            ?>
            <p>- Salutations messire <?php echo $firstName . ' ' . $lastName;?>, ma douce amie me demandait votre âge.
            Mes certitudes étant limitées, je n'osa point lui en affirmer. Auriez-vous l'amabalité de m'en informer ?</p>
            <p><?php echo "- J'ai " . $age . " ans, mon brave."?></p>
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
