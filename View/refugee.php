<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Refugies</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div class="Formulaire">
        <div class="cardCenter">
          <form class="Refugies" action="index.html" method="post">
            <div class="Nom">
              <div class="Left">
                <label for="nom">Votre Nom
                </label>
              </div>
              <div class="Right">
                <input type="text" name="nom" placeholder="Ex: Dupont">
              </div>
            </div>
            <label for="prenom">Votre Prénom
            </label>
            <input type="text" name="prenom" placeholder="Ex: Marc">
            <br/>
            <input type="radio" name="sexe">
            <label for="sexe">Masculin</label>
            <input type="radio" name="sexe">
            <label for="sexe">Feminin</label>
            <br/>
            <label for="Age">Votre âge
            </label>
            <input type="number" name="age" min=0 max=100>
            <br/>
            <label for="Email">Votre adresse email
            </label>
            <input type="email" name="email">
            <br/>
            <label for="tel">Votre tél
            </label>
            <input type="tel" name="phone" placeholder="Ex: 04XX XXX XXX">
            <br/>
            <label for="Email2">Confirmez l'adresse e-mail
            </label>
            <input type="email" name="email2">
            <br/>
            <label for="mdp">Votre mot de passe
            </label>
            <input type="password" name="pass">
            <br/>
            <label for="situation">Votre situation
            </label>
            <textarea name="situation" rows="8" cols="80"></textarea>
            <br/>
            <button type="submit" name="button">Inscription</button>
          </form>
        </div>
    </div>
  </body>
</html>
