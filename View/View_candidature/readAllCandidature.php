<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/candidature.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
   

<div class="title"><h1>Voir <span>Candidature</span></h1></div>
<div class="candid one scroll">
    
    <div>
        <p></p>
    </div>
    <div class="env">
    <input type="submit" target="_blank" value="Postulez" onclick="location.href='./candidatez.php';" type="button">
    </div>
</div>

<div class="candid too scroll">
    <h1></h1>
    <div>
        <p></p>
    </div>
    <div class="env">
    <input type="submit" target="_blank" value="Postulez" onclick="location.href='./candidatez.php';" type="button">
    </div>
</div>

<div class="candid three scrool">
    <h1></h1>
    <div>
        <p></p>
    </div>
    <div class="env">
    <input type="submit" target="_blank" value="Postulez" onclick="location.href='./candidatez.php';" type="button">
    </div>
</div>

<div class="candid for scroll">
    <h1></h1>
    <div>
        <p></p>
    </div>
    <div class="env">
    <input type="submit" target="_blank" value="Postulez" onclick="location.href='./candidatez.php';" type="button">
    </div>
</div>
<a href="../../View/View_Address/formAddress.php?action=all">creer une adresse</a>

    <?php foreach($allCandidature as $Candidature): ?>
        <p><a href="../../Back/Router/RouterCandidature.php?action=id&id=<?= $Candidature["Id_Candidature"] ?>">Afficher les Candidature</a></p>
        <ul>
            <li><?= $Candidature["name"]?></li>
            <li><?= $Candidature["firstname"]?></li>
            <li><?= $Candidature["email"]?></li>
            <li><?= $Candidature["phone"]?></li>
            <li><?= $Candidature["motivation"]?></li>
            <li><?= $Candidature["id_Job"]?></li>

        </ul>

    <?php endforeach ?>


    <script src="../Js/javascritp.js"></script>
</body>

</html>