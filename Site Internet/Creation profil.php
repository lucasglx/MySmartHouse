<html>
    
  <head>

    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css" />
    <title>Création profil</title>

  </head>

    <body>

        <div class="topnav">
            <a class="active" href="#fr/en">Fr/En</a>
            <a href="Page%20d'accueil.html">Accueil</a>
            <a href="Qui%20sommes%20nous.html">Qui sommes nous ?</a>
            <a href="Contact.html">Contact</a>
            <a href="FAQ.html">FAQ</a>
        </div>

        <div class="bienvenue">
               <img src= "logomysmarthousepetit.png" class="logoentreprise" alt="Logo entreprise"  />
            <h1>Première connexion</h1>
        </div>
        
            <fieldset>
                <legend>Créez votre profil</legend>
                
                <p>
                    <label for="gender">Civilité :</label><br />
                    <select name="gender" id="gender">
                        <option value="male">M.</option>
                        <option value="female">Mme.</option>
                    </select>
              
                    <label for="birth">Date de naissance :
                    </label>
                    <input type="date" name="birth" id="birth" required />
                </p>
                
                <p>
                    <label for="surname">Prénom :
                    </label>
                    <input type="text" name="surname" id="surname" required />
             
                    <label for="name">Nom :
                    </label>
                    <input type="text" name="name" id="name" required />
                </p>
                
                <p>
                    <label for="address">Adresse :
                    </label>
                    <input type="text" name="address" id="address" required />
                </p>
                
                <p>
                    <label for="city">Ville :
                    </label>
                    <input type="text" name="city" id="city" required />
                    
                    <label for="zip">Code Postal :
                    </label>
                    <input type="tel" name="zip" id="zip" required />
                </p>
                
                <p>
                    <label for="country">Pays :
                    </label>
                    <input type="text" name="country" id="country" required/>
                    
                    <label for="phone">Numéro de téléphone :
                    </label>
                    <input type="tel" name="phone" id="phone" required />
                </p>
                <p>
                    <label for="email">Adresse mail :
                    </label>
                    <input type="email" name="email" id="email" required />
                </p>
                    <form>
                    <input type="button" value="Annuler" onclick="history.go(-1)" />
                    </form>
                    
                    <a href="Configuration%20maison.html"><input type="submit" value="Continuer"/></a>
                
                
            </fieldset>

    </body>

</html>
