		<div class="categorie">
			
			<?php

            if(isset($_SESSION["id"])){
			echo "<div class='table_categorie' id='table_categorie'><table> <tr> 
			<td>Selection</td>
			<td>Nom de catégorie</td>
			<td>Montant de l'indémnité</td></tr>";


			$listeCategories = getCategories();
			echo "<form name='form' method='post'>";
			while($ligne = $listeCategories -> fetch(PDO::FETCH_OBJ)){
				echo "<tr>";?>
				<td><input type='radio' name='select' value="<?php echo($ligne->num_catégorie);?>" onclick="openFormCategorieModif('<?php echo($ligne->nom_catégorie); ?>', '<?php echo($ligne->montant_indemnité); ?>')"></td>
				<?php
				echo "<td>$ligne->nom_catégorie </td>";
				echo "<td>$ligne->montant_indemnité €</td>";
				echo "</tr>";
			}
			echo "</table></div></form>";
			?>

			

			<div class="button_categorie">
				<button type="submit" id="blur" onclick="openFormCategorie()" class="btn blur">Ajouter une catégorie</button>
			</div>
            <?php }else{
                echo "<div class='table_categorie' id='table_categorie'><table> <tr> 

			<td>Nom de catégorie</td>
			<td>Montant de l'indémnité</td></tr>";


            $listeCategories = getCategories();
            echo "<form name='form' method='post'>";
            while($ligne = $listeCategories -> fetch(PDO::FETCH_OBJ)){
                echo "<tr>";?>
                <?php
                echo "<td>$ligne->nom_catégorie </td>";
                echo "<td>$ligne->montant_indemnité €</td>";
                echo "</tr>";
            }
            echo "</table></div></form>";
                }?>
		</div>


