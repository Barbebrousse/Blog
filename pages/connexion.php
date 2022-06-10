<section id="connexion">
  <div class="formulaire">
    <h1>Connection</h1>

    <form action="index.php?page=connectForm" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Identifiant</label>
        <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" <?php
            if (isset($_COOKIE['user']))  echo "value= '" . $_COOKIE['user'] . "'" ?>>
        <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
      </div>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>

  </div>

  <div class="formulaire">
    <h1>Inscription</h1>

    <form action="index.php?page=utilisateurs&action=create" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Identifiant</label>
        <input type="text" name="login" class="form-control" id="createLogin" aria-describedby="emailHelp">
        <div id="createlog" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="createpassword">
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

  </div>
</section>