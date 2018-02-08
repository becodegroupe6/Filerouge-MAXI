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
            <label for="nom">Votre Nom</label>
            <input type="text" name="nom" placeholder="Ex: Dupont">
            <br/>
            <label for="prenom">Votre Prénom</label>
            <input type="text" name="prenom" placeholder="Ex: Marc">
            <br/>
            <label for="Sexe">Masculin</label>
            <input type="radio" name="sexe">
            <br/>
            <label for="Sexe">Feminin</label>
            <input type="radio" name="sexe">
            <br/>
            <label for="Age">Votre Âge</label>
            <input type="number" name="age" min=0 max=100>
            <br/>
            <label for="tel">Votre tel</label>
            <input type="tel" name="phone" placeholder="Ex: 04XX XXX XXX">
            <br/>
            <label for="Email">Votre email</label>
            <input type="email" name="email" placeholder="email">
            <br/>
            <label for="Email2">Confirmer votre email</label>
            <input type="email" name="email2" placeholder="Confirmer votre email">
            <br/>
            <label for="mdp">Votre mot de passe</label>
            <input type="password" name="pass" placeholder="Votre mot de passe">
            <br/>
          </form>
        </div>
    </div>
  </body>
</html>
