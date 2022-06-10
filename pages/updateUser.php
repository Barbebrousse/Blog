<div class="formulaire">

    <form action="index.php?page=utilisateurs&action=save" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
      <div class="mb-3">
          <h2>Modifier les Identifiants de <?= $user['name'] ?></h2>
        <label for="exampleInputEmail1" class="form-label">Identifiant</label>
        <input type="text" name="login" class="form-control" id="updateLogin" value="<?= $user['name'] ?>">
        <div id="createlog" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="updatepassword" value="<?= /* <?= raccourci pour eviter d'écrire le echo*/ $user['password'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Modifer</button>
    </form>

  </div>