<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de publication</title>
</head>
<body>

<a href="../Back/Router/RouterJob.php?action=all">Retournez aux offres</a>

    <form action="../../Back/Router/RouterJob.php" method="post">

        <label for="name_job">Intitulé du poste</label>  
        <input type="text" name="name" id="name">

        <label for="employer">Société</label>
        <input type="text" name="employer" id="employer">

        <label for="localisation">Localisation</label>
        <input type="text" name="localisation" id="localisation">

        <label for="start_date">Poste à pouvoir pour : </label>
        <input type="text" name="start_date" id="start_date">

        <label for="end_date">Fin du poste : </label>
        <input type="text" name="end_date" id="end_date">

        <label for="type">Type de contrat : </label>
        <input type="text" name="type" id="type">

        <label for="hours_week">Nombre d'heure par semaine</label>
        <input type="number" name="hours_week" id="hours_week">

        <label for="salary_month">Salaire mensuel : </label>
        <input type="number" name="salary_month" id="salary_month">

        <label for="salary_year">Salaire annuel : </label>
        <input type="number" name="salary_year" id="salary_year">

        <label for="description">Description du poste : </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        
        <input type="submit" value="envoyer" name="submit">
    </form>
</body>
</html>