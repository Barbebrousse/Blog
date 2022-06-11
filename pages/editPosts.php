<div>
<h1>Création  d'un article</h1>

<form action="index.php?page=articles&action=create" method="post">
    <div class="row">
        <input type="text" name="title" placeholder="Saisir le titre">
    </div>
    <div class="row">
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-content">Publier</button>
    </div>
</form>
</div>