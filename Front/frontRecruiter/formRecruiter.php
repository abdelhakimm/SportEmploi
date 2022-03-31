<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une annonce</title>
    <link rel="stylesheet" href="../Style/formRecruiter.css">
    <link rel="stylesheet" href="./font/fontawesome-free-6.0.0-web/css/all.css">
</head>
<body>

    <header>  
        <div class="logo">
                <img src="../logoEtIcon/logo.png" width="100px" height="100px">
        </div>

        <nav>
            <ul>
                <div id="allNav">
                    <div class="flexNav">
                        <li><a href="../Home/home.php">Accueil</a></li>
                        <li><a href="../aPropos/aPropos.php">A propos</a></li>
                    </div>
                    <div class="flexNav">
                        <li><a href="../frontRecruiter/readAllRecruiter.php">Parcourir les offres</a></li>
                        <li><a href="../frontRecruiter/formRecruiter.php">Publier une offre</a></li>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    <section id="intro">

        <h1>Recrutons ensemble votre talent idéal</h1>

        <p>
        Trouver le candidat idéal demande parfois un temps précieux. Avec les outils Indeed, identifiez, présélectionnez et recrutez rapidement vos candidats, en toute simplicité.
        Vous savez quel profil vous recherchez. 
        <br>
        Nous vous aidons à le trouver.
        </p>

      <p>Votre annonce :</p>

    </section>

    <section>
        <form action="../Back/Router/RouterAddress.php?action=getAllRecruiter" method="post">
            <div id="allItem"></div>

                <div class="itemOne">
                    <div>
                        <label for="societyName">Nom de la Société :</label>
                        <input type="text" name="societyName" id="societyName" required>
                    </div>

                    <div>
                        <label for="jobName">Intitulé du poste :</label>
                        <input type="text" name="jobName" id="jobName" required>
                    </div>

                </div>
                <div class="itemTwo">
                
                    <div>
                        <label for="contractType">Type de contrat :</label>
                        <select name="contractType" id="contractType" required>
                            <option value="CDD">CDD</option>
                            <option value="Interim">Interim</option>
                            <option value="CDI">CDI</option>
                        </select>
                    </div>

                    <div>
                        <label for="hours">Nombre d'heures semaine:</label>
                        <input type="number" name="hours" id="hours" required>
                    </div>

                </div>

                <div class="itemThree">
                    <div>
                         <label for="debutDate">Date de début de contrat :</label>
                         
                         <input type="text" name="debutDate" id="debutDate" required>
                    </div>
                    <div>
                         <label for="endDate">Date de fin de contrat :</label>
                         
                         <input type="text" name="endDate" id="endDate">
                    </div>

                </div>

                <div class="itemFour">
                    <div>
                        <label for="salary">Salaire :</label>
                        <input type="text" name="salary" id="salary" required>
                    </div>
                    <div>
                        <label for="city">Ville :</label>
                        <input type="text" name="city" id="city" required>
                    </div>

                </div>

                <div class="itemFive">
                    <div>
                        <label for="description">Description :</label>
                        <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                    </div>    

                    <input type="submit" value="Poster votre annonce" name="submit">

                </div>

            </div>     

        </form>
    </section>

    <footer>
        
        <div id="allFooter">    
            <nav>
                
                <ul>
                    
                    <li><a href="../Home/home.php">Accueil</a></li>
                    <li><a href="../aPropos/aPropos.php">A propos</a></li>
                    <li><a href="../frontRecruiter/readAllRecruiter.php">Parcourir les offres</a></li>
                    <li><a href="../frontRecruiter/formRecruiter.php">Publier une offre</a></li>
                
                </ul>
            
            </nav>

            <div id="network">
                
                <img src="../logoEtIcon/facebook.png" width="100px" height="100px" alt="">
                
                <img src="../logoEtIcon/logo-twitter.png" width="100px" height="100px" alt="">
                
                <img src="../logoEtIcon/linkedin.png" width="100px" height="100px" alt="">
            
            </div>

            
            <div id="copyright">
                <img src="../logoEtIcon/logo.png" width="353px" height="253px">
                <div class="copy">
                    <img src="../logoEtIcon/1200px-Copyright.svg.png" width="30px" height="30px">
                
                    <p>S’Job @2022. Tous droits réservés.</p>
                </div>
            </div>  
        </div>


    </footer>


</body>
</html>