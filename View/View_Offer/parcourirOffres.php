<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil</title>
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="fontawesome/css/all.css" />
</head>

<body>
  <header>
    <div class="logo">
      <img id="logo" src="./images/logo.png" alt="logo" />
    </div>
    <div class="navTop">
      <ul>
        <a href="">
          <li>ACCUEIL</li>
        </a>
        <a href="">
          <li>A PROPOS</li>
        </a>
        <a href="">
          <li>PARCOURIR LES OFFRES</li>
        </a>
        <a href="">
          <li>PUBLIER UNE OFFRE</li>
        </a>
      </ul>
    </div>
    <h1>L'expert emploi 100 % Sport</h1>
  </header>

  <main>
    <section id="criteres">

    </section>
    <section id="liste">
      <?php foreach ($allOffer as $offer) : ?>
        <ul>
          <li><?= $offer["Position"] ?></li>
          <li><?= $offer["Enterprise"] ?></li>
          <li><?= $offer["Begin"] ?></li>
          <li><?= $offer["Contract"] ?></li>

        </ul>

      <?php endforeach ?>
    </section>
  </main>

  <footer>
    <div class="logo">
      <img id="logo" src="./images/logo.png" alt="logo" />
    </div>
    <div class="navFooter">
      <ul>
        <a href="">
          <li>ACCUEIL</li>
        </a>
        <a href="">
          <li>A PROPOS</li>
        </a>
        <a href="">
          <li>PARCOURIR LES OFFRES</li>
        </a>
        <a href="">
          <li>PUBLIER UNE OFFRE</li>
        </a>
      </ul>
      <p class="reseauxSociaux">Nous suivre sur les réseaux sociaux</p>
      <p class="copyright">Copyright Sylvain Foucault 2022</p>
    </div>

  </footer>

  <script src="script.js"></script>
</body>

</html>