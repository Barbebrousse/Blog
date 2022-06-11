<h1>Bienvenu dans la Moria !!</h1>
<p>"Tu étais l'élu Anakin... Je t'aimais comme un frère."</p>

<?php 
foreach($posts as $post){
?>
<div class="row">
    <h2><?= $post['title'] ?></h2>
    <p><?= $post['content'] ?></p>
</div>
<?php
}
?>