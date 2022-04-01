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
      <div class="positionementCriteres">
        <h3>Critères de recherche : </h3>
        <form action="<?= router ?>router.php" method="post">
          <div class="formRecherche">
            <div>
              <label for="typeContrat" class="semibold">Type de contrat : </label>
              <?php
              $contract = "all";
              
              if (isset($offersByContract) && count($offersByContract) > 0) {
                $contract = $offersByContract[0]['Contract'];
              }

              ?>
              <select id="typeContrat" name="typeContrat" value="all">
                
                <option value="CDI" <?php if ($contract == "CDI") {
                                      echo ("selected");
                                    } ?>>CDI</option>
                <option value="CDD" <?php if ($contract == "CDD") {
                                      echo ("selected");
                                    } ?>>CDD</option>
                <option value="all" <?php if ($contract == "all") {
                                      echo ("selected");
                                    } ?>>TOUS</option>
              </select>
            </div>
            <div>
              <button type="submit" class="rechercherInput" id="inputSubmit" value="RECHERCHER" name="submit">RECHERCHER</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section id="liste">
      <?php
      if (isset($offersByContract)) {
        $offres = $offersByContract;
        if (count($offres) == 0) {
      ?>
          <p>Veuillez sélectionner un type de contrat</p>
        <?php
        }
      } else {
        $offres = $allOffer;
      }
      $ligneFonce = false;
      foreach ($offres as $offer) : ?>

        <ul>
          <li>
            <?php
            if (!$ligneFonce) {
            ?>
              <div class="ligneClair">
              <?php
              $ligneFonce = true;
            } else {
              ?>
                <div class="ligneFonce">
                <?php
                $ligneFonce = false;
              }
                ?>
                <a href="<?= router ?>router.php?action=id&id=<?= $offer["Id_Offer"] ?>">
                  <div class="lignesOffre">
                    <ul class="position">
                      <li>
                        <p><?= $offer["Id_Offer"] ?></p>
                      </li>
                      <li>

                        <?= $offer["Position"] ?>

                      </li>
                      <li>
                        <p><?= $offer["Enterprise"] ?></p>
                      </li>
                      <li>
                        <p>
                          <?php
                          $datedebut = date_create($offer["Begin"]);
                          echo date_format($datedebut, 'd-m-Y');
                          ?>

                        </p>
                      </li>
                      <li>
                        <p><?= $offer["Contract"] ?></p>
                      </li>
                    </ul>
                  </div>
                </a>
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
        <div class="reseauxSociauxDiv">
          <p class="reseauxSociaux">Nous suivre sur les réseaux sociaux</p>
          <img src="../../View/images/facebookLogo.svg" alt="logo facebook">
          <img src="../../View/images/twitterIcon.svg" alt="logo twitter">
          <img id="logoLinkedin" src="../../View/images/linkedin-logo-icon.svg" alt="logo linkedin">
        </div>
        <p class="copyright">Copyright Sylvain Foucault 2022</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>