<div class="login-popup">
	<div class="popupFormCategorie" id="popupFormCat">

		<form action="" class="form-container" method="post">
			<h2>Veuillez entrer les informations suivantes :</h2>
			<input type="hidden" name="action" value="categorie">
			<label for="nc">
				<strong>Nom de catégorie</strong><br/>
			</label>
			<input type="text" id="nomcat" value="<?php echo $_POST['nomcat']; ?>" placeholder="Nom de categorie" name="nomcat" required><br/>
			<label for="mtn">
				<strong>Montant de l'indéminité</strong>
			</label>
			<input type="text" id="mtnindemnite" value="<?php echo $_POST['mtnindemnite']; ?>" placeholder="Montant" name="mtnindemnite" required>

			<input type="submit" name="btn" class="btn" value="Enregistrer">
			<input type="button" class="btn cancel" value="Annuler" onclick="closeFormCategorie()">
		</form>
	</div>
</div>