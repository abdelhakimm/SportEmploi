<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Forme</title>

</head>
<body>
<a href="../Back/Router/RouterAddress.php?action=all">les addresses</a>


    <form action="../Back/Router/RouterAddress.php" method="post">

        <input type="hidden" name="id" value="<?=$address['Id_Address']?>">

        <label for = "phone"> Numéros </label>
        <input type = "number" name = "number" id = "phone" required value="<?=$address['Number']?>"> <br>

        <label for = "address"> Votre address:  </label> 
        <input type = "text" name = "address" id = "address" value="<?=$address['Address']?>" required> <br>

        <label for = "zip"> Code postale:  </label> 
        <input type = "number" name = "zip" id = "zip" value="<?=$address['Zip']?>" required> <br>

        <label for = "city"> Ville </label>
        <input type = "texte" name = "city" id = "city" value="<?=$address['City']?>"> <br>

        <label for="Envoyer"></label>
        <input type="submit" name="submit"  value="Envoyer">

    </form>
</body>
</html>