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
        <input type="text" name="name_job" id="name_job" required value="<?=$row['Name_Job']?>"> <br>

        <label for="employer">Société</label>
        <input type="text" name="employer" id="employer"required value="<?=$row['Employer']?>"> <br>

        <label for="localisation">Localisation</label>
        <input type="text" name="localisation" id="localisation" required value="<?=$row['Localisation']?>"> <br>

        <label for="start_date">Poste à pouvoir pour : </label>
        <input type="text" name="start_date" id="start_date" required value="<?=$row['Start_Date']?>">

        <label for="end_date">Fin du poste : </label>
        <input type="text" name="end_date" id="end_date" required value="<?=$row['End_Date']?>">

        <label for="type">Type de contrat : </label>
        <input type="text" name="type" id="type" required value="<?=$row['Type']?>">

        <label for="hours_week">Nombre d'heure par semaine</label>
        <input type="number" name="hours_week" id="hours_week" required value="<?=$row['Hours_Week']?>">

        <label for="salary_month">Salaire mensuel : </label>
        <input type="number" name="salary_month" id="salary_month" required value="<?=$row['Salary_Month']?>">

        <label for="salary_year">Salaire annuel : </label>
        <input type="number" name="salary_year" id="salary_yearcode" required value="<?=$row['Salary_Year']?>">

        <label for="description">Description du poste : </label>
        <input type="text" name="description" id="description"required value="<?=$row['Description']?>">

        <input type="submit" value="envoyer" name="submit">

    </form>
</body>
</html>