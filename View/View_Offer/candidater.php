<form action="<?= router ?>router.php" method="post">

    <div class="ligneForm">
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name">
    </div>
    <div class="ligneForm">
        <label for="firstname">Prénom : </label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div class="ligneForm">
        <label for="email">Adresse e-mail : </label>
        <input type="date" id="email" name="email">
    </div>
    <div class="ligneForm">
        <label for="phone">Numéro de téléphone : </label>
        <input type="date" id="phone" name="phone">
    </div>
    <div class="ligneForm">
        <label for="motivation">Lettre de motivation : </label>
        <textarea type="text" id="motivation" name="motivation">
    </div>
    
    <div class="rgpdLigne">
        <input type="checkbox" id="rgpd" name="rgpd">
        <label for="rgpd">j'accèpte les conditions</label>
    </div>
    <div class="buttonLigne">
        <input type="submit" value="PUBLIER" name="submit"></input>
    </div>

</form>