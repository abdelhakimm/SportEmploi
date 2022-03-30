<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MàJ Annonces</title>

</head>
<body>
<a href="../../Back/Router/RouterJob.php?action=all">Les Annonces</a>

    <form action="../../Back/Router/RouterJob.php" method="post">

        <input type="hidden" name="id" value="<?=$row['Id_Job']?>">

        <label for="name_job">Intitulé du poste</label>  
        <input type="text" name="name_job" id="name_job" required value="<?=$row['name_job']?>"> <br>

        <label for="employer">Société</label>
        <input type="text" name="employer" id="employer"required value="<?=$row['employer']?>"> <br>

        <label for="Localisation">Localisation</label>
        <input type="text" name="Localisation" id="Localisation" required value="<?=$row['localisation']?>"> <br>

        <label for="start_date">Poste à pouvoir pour : </label>
        <input type="text" name="start_date" id="start_date" required value="<?=$row['start_date']?>">

        <label for="end_date">Fin du poste : </label>
        <input type="text" name="end_date" id="end_date" required value="<?=$row['end_date']?>">

        <label for="type">Type de contrat : </label>
        <input type="text" name="type" id="type" required value="<?=$row['type']?>">

        <label for="hours_week">Nombre d'heure par semaine</label>
        <input type="number" name="hours_week" id="hours_week" required value="<?=$row['hours_week']?>">

        <label for="salary_month">Salaire mensuel : </label>
        <input type="number" name="salary_month" id="salary_month" required value="<?=$row['salary_month']?>">

        <label for="salary_year">Salaire annuel : </label>
        <input type="number" name="salary_year" id="salary_yearcode" required value="<?=$row['salary_year']?>">

        <label for="description">Description du poste : </label>
        <input type="text" name="description" id="description"required value="<?=$row['description']?>">

        <input type="submit" value="envoyer" name="submit">

    </form>
</body>
</html>