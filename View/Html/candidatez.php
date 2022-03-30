<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/candidatez.css">
    <title>Document</title>
</head>
<body>
        <?php
        require "header.php";
        ?>

    <div class="form">
        <div class="candid">
            <h1>CANDIDATEZ</h1>
            <form action="" method="">
                <label for="">Nom</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple : Dupont" required><br><br>

                <label for="">Prenom</label><br>
                <input type="text" id="" name="Nom" value="" placeholder="Exemple : Alain" required><br><br>
            <div class="inli">
                 <div>
                        <label for="">Email</label>
                        <input type="mail" id="" name="email" value=""  required>

                        <label for="">Telephone</label>
                        <input type="int" id="" name="telephone" value=""  required><br><br>
                </div>
            </div>
                <label for="">Description</label><br>
                <textarea name="description" rows="8" cols="60" ></textarea>        
        </div>








        </form>
    </div>




        <?php 
        require "footer.php";
        ?>
<script src=""></script>
</body>
</html>