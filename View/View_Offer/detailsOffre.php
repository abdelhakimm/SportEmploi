<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre</title>
</head>

<body>
    <a href="<?= router ?>router.php?action=all">voir toutes les offres</a>

    <ul>
        <li><?= $offer["Position"] ?></li>
        <li><?= $offer["Enterprise"] ?></li>
        <li><?= $offer["Begin"] ?></li>
        <li><?= $offer["End"] ?></li>
    </ul>

    <?php foreach ($allApplication as $application) : ?>

        <ul>
            <li>
                <ul class="position">
                    <li>
                        <?= $application["Name"] ?>
                    </li>
                    <li>
                        <?= $application["Firstname"] ?>
                    </li>
                    <li>
                        <?= $application["Email"] ?>
                    </li>
                    <li>
                        <?= $application["Phone"] ?>
                    </li>
                    <li>
                        <?= $application["Motivation"] ?>
                    </li>
                </ul>

            </li>

        </ul>

    <?php endforeach ?>

    <a href="<?= router ?>router.php?action=candidater&id=<?= $offer['Id_Offer'] ?>">CANDIDATER</a>
</body>

</html>