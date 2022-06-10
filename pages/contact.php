

<div id="message">
    <h1>Contact</h1>
    <p>Ici vous apprendrez à echanger avec un maitre disparu.</p>
</div>
<div id="container">
	<div class="form">
		<form action="index.php?page=contactForm" method="post" action="#">
			<div id="formulaire">
				<div class="left">
					<input type="text" name="nom" placeholder="Nom" style="width: 45%; height: 25px;" required/>

					<input type="text" name="prénom" placeholder="Prénom" style="width: 45%; height: 25px;"  required/>
				</div>
				<div class="right">
					<input type="mail" name="email" placeholder="Votre Email" style="width: 45%; height: 25px;" required/>

					<input type="tel" name="tel" placeholder="Téléphone (facultatif)" style="width: 45%; height: 25px;"/>
				</div>
				<div class="message">
					<input type="text" name="message" placeholder="Votre Message" style="width: 92%; height: 100px;" require>
				</div>
				<button type="submit">Envoyer</button>
			</div>
		</form>
	</div>