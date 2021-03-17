<div class="login-popup">
	<div class="popupFormCategorieModifSuppr" id="popupFormCatModSuppr">

		<form action="" class="form-container" method="post">
			<h2>Veuillez modifier les informations suivantes :</h2>
			<input type="hidden" name="action" value="categorie">
			<input type="hidden"id="num" name="NumCat" value="">
			<label for="nc">
				<strong>Nom de catégorie</strong><br/>
			</label>
			<input type="text" id="nomcat1" value="" placeholder="Nom de categorie" name="NomCat" required><br/>
			<label for="mtn">
				<strong>Montant de l'indéminité</strong>
			</label>
			<input type="text" id="mtnindemnite1" placeholder="Montant" name="MontantIndemnite" required>

			<input type="submit" name="btn" class="btn" value="Modifier">
			<input type="submit" name="btn" class="btn" value="Supprimer">
			<input type="button" class="btn cancel" value="Annuler" onclick="closeFormCategorieModif()">
		</form>
	</div>
</div>