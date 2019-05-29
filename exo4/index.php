<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 4</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 1 - Exercice 4</h1>
                <p class="lead">Créer une variable de type string, une variable de type int, une variable de type float,
                  une variable de type booléan et les initialiser avec une valeur de votre choix. Les afficher.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <p><?php $string ='Coucouuu !'; $number = 20; $decimalNumber = 23.4; $booleanTrue = true; $booleanFalse = false; ?></p>
            <p><?php echo $string; ?> </p>
            <p><?php echo $number;?></p>
            <p><?php echo $decimalNumber;?></p>
            <p><?php echo $booleanTrue;?></p>
            <p><?php echo $booleanFalse;?></p>
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
