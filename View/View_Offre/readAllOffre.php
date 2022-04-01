<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Parcouriroffre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

          
            <div class="title"><h1><span>Parcourir</span> Les Offres</h1></div>
    <div class="offre one scroll">
        
        <div>
            <p></p>
        </div>
        <input type="submit" value="">
    </div>

    <div class="offre too scroll">
        <h1></h1>
        <div>
            <p></p>
        </div>
        <<input type="submit" value="">
    </div>

    <div class="offre three scrool">
        <h1></h1>
        <div>
            <p></p>
        </div>
        <input type="submit" value="">
    </div>

    <div class="offre for scroll">
        <h1></h1>
        <div>
            <p></p>
        </div>
        <input type="submit" value="">
    </div>
    






       

<a href="../../View/View_Address/formAddress.php?action=all">creer une adresse</a>

    <?php foreach($allJob as $Job): ?>
        <p><a href="../../Back/Router/RouterJob.php?action=id&id=<?= $Job["Id_Job"] ?>">Afficher les Job</a></p>
        <ul>
            <li><?= $Job["localisation"]?></li>
            <li><?= $Job["poste"]?></li>
            <li><?= $Job["begin"]?></li>
            <li><?= $Job["end"]?></li>
            <li><?= $Job["contract"]?></li>
            <li><?= $Job["hours"]?></li>
            <li><?= $Job["salary"]?></li>
            <li><?= $Job["description"]?></li>

        </ul>

    <?php endforeach ?>
        <script src="../Js/javascritp.js"></script>
</body>
</html>