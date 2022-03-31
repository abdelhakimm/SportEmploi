<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/candidatez.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <label for="">Email</label><br>
                        <input type="mail" id="" name="email" value="" placeholder="Exemple : DupontAlain@gmail.com" required>

                        <label for="">Telephone</label>
                        <input type="number" id="" name="telephone" value="" placeholder="Exemple : 07********" required><br><br>
                </div>
            </div>
                <label for="">Description</label><br>
                <textarea name="description" rows="8" cols="60" ></textarea>

                <div class="sub">
                <input type="submit">
                </div>
                
        </div>
      

        </form>
    </div>




        <?php 
        require "footer.php";
        ?>
<script src=""></script>
</body>
</html>