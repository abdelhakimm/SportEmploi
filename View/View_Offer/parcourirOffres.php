<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Parcourir offres</title>
  <link rel="stylesheet" href="../../View/style/style.css" />
  <link rel="stylesheet" href="fontawesome/css/all.css" />
</head>

<body>
  <header class="fondGrisClair">
    <div class="logoMenu">
      <div class="logo">
        <img id="logo" src="../../View/images/logo.png" alt="logo" />
      </div>
      <div class="nav">
        <ul>
          <a href="../../View/index.php">
            <li>ACCUEIL</li>
          </a>
          <a href="../../View/aPropos.php">
            <li>A PROPOS</li>
          </a>
          <a href="../Router/router.php?action=all">
            <li>PARCOURIR LES OFFRES</li>
          </a>
          <a href="./router.php?action=create">
            <li>PUBLIER UNE OFFRE</li>
          </a>
        </ul>
      </div>
    </div>
  </header>

  <main>

    <div class="parcourirOffres">
      <h2 class="alignCenter">PARCOURIR LES OFFRES</h2>
    </div>

    <section id="criteres">
      <p>Critères de recherche</p>
      <form action="<?= router ?>router.php" method="post">

        <div>
          <label for="typeContrat">Type de contrat : </label>
          <select id="typeContrat" name="typeContrat">
            <option value="CDI"></option>
            <option value="CDI">CDI</option>
            <option value="CDD">CDD</option>
          </select>
        </div>
        <div>
          <div>
            <input type="submit" id="inputSubmit" value="RECHERCHER" name="submit"></input>
          </div>
        </div>
      </form>
    </section>
    <section id="liste">
      <?php foreach ($offersByContract as $offer) : ?>
        <p><a href="<?= router ?>router.php?action=id&id=<?= $offer["Id_Offer"] ?>">Afficher l'offre</a></p>
        <ul>
          <li>
            <ul class="position">
              <li>
                <?= $offer["Position"] ?>
              </li>
              <li>
                <?= $offer["Enterprise"] ?>
              </li>
              <li>
                <?= $offer["Begin"] ?>
              </li>
              <li>
                <?= $offer["Contract"] ?>
              </li>
            </ul>

          </li>

        </ul>

      <?php endforeach ?>
    </section>
  </main>

  <footer>
    <div class="logoMenu">
      <div class="logo">
        <img id="logo" src="../../View/images/logo.png" alt="logo" />
      </div>
      <div class="nav">
        <ul>
          <a href="../../View/index.php">
            <li>ACCUEIL</li>
          </a>
          <a href="../../View/aPropos.php">
            <li>A PROPOS</li>
          </a>
          <a href="../Router/router.php?action=all">
            <li>PARCOURIR LES OFFRES</li>
          </a>
          <a href="./router.php?action=create">
            <li>PUBLIER UNE OFFRE</li>
          </a>
        </ul>
        <p class="reseauxSociaux">Nous suivre sur les réseaux sociaux</p>
        <p class="copyright">Copyright Sylvain Foucault 2022</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>