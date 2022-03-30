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

        <input type="hidden" name="id" value="<?=$Job['Id_Job']?>">

        <label for="type">Intitulé du poste</label>  
        <input type="text" name="type" id="type" required value="<?=$Job['Name_Job']?>"> <br>

        <label for="employer">Société</label>
        <input type="text" name="employer" id="employer"required value="<?=$Job['Employer']?>"> <br>

        <label for="Localisation">Localisation</label>
        <input type="text" name="Localisation" id="Localisation" required value="<?=$Job['Localisation']?>"> <br>

        <label for="start_date">Poste à pouvoir pour : </label>
        <input type="hours_week" name="start_date" id="start_date" required value="<?=$Job['Start_Date']?>">

        <label for="end_date">Fin du poste : </label>
        <input type="text" name="end_date" id="end_date" required value="<?=$Job['End_Date']?>">

        <label for="type">Type de contrat : </label>
        <input type="text" name="type" id="type" required value="<?=$Job['Type']?>">

        <label for="hours_week">Nombre d'heure par semaine</label>
        <input type="hours_week" name="hours_week" id="hours_week" required value="<?=$Job['Hours_Week']?>">

        <label for="salary_month">Salaire mensuel : </label>
        <input type="text" name="salary_month" id="salary_month" required value="<?=$Job['Salary_Month']?>">

        <label for="salary_year">Salaire annuel : </label>
        <input type="hours_week" name="salary_year" id="salary_yearcode" required value="<?=$Job['Salary_Year']?>">

        <label for="description">Description du poste : </label>
        <input type="text" name="description" id="description"required value="<?=$Job['Description']?>">

        <input type="submit" value="envoyer" name="submit">

    </form>
</body>
</html>