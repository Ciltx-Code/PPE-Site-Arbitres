<div class="arbitres">
    <?php
    if(isset($_SESSION["id"])){
        echo "<div class='table_categorie' id='table_categorie'>
        <table> 
        <tr>
        <td></td> 
        <td>Adresse</td>
        <td>Date</td>
        <td>Heure</td>
        <td>Equipe 1</td>
        <td>Equipe 2</td>
        <td>Arbitre 1</td>
        <td>Montant</td>
        <td>Arbitre 2</td>
        <td>Montant</td></tr>";

        $listeMatchs = getMatchs();
        $count = 0;
        while($ligne = $listeMatchs -> fetch(PDO::FETCH_OBJ)){
            $numsalle = getSalleByAdresse($ligne->adresse_salle);
            $equipe1 = getEquipeById($ligne->num_equipe_1);
            $equipe2 = getEquipeById($ligne->num_equipe_2);
            $arbitre1 = getArbitreById($ligne->num_arbitre_p);
            $arbitre2 = getArbitreById($ligne->num_arbitre_s);
            echo "<tr>";?>
            <td>
                <input type='radio' name='select' 
                value="<?php echo($ligne->num_match);?>"
                onclick="openFormMatchModif('<?php echo($numsalle) ;?>', '<?php echo($ligne->date_match);?>', '<?php echo($ligne->heure_match);?>','<?php echo($ligne->num_equipe_1) ;?>','<?php echo($ligne->num_equipe_2) ;?>','<?php echo($ligne->num_arbitre_p) ;?>','<?php echo($ligne->num_arbitre_s) ;?>','<?php echo($ligne->montant_déplt_p);?>','<?php echo($ligne->montant_déplt_s);?>','<?php echo($ligne->num_match);?>')">
            </td>
            <?php

            echo "<td>$ligne->adresse_salle</td>";
            echo "<td>$ligne->date_match</td>";
            echo "<td>$ligne->heure_match</td>";
            echo "<td>$equipe1</td>";
            echo "<td>$equipe2</td>";
            echo "<td>$arbitre1</td>";
            echo "<td>$ligne->montant_déplt_p</td>";
            echo "<td>$arbitre2</td>";
            echo "<td>$ligne->montant_déplt_s</td>";
            echo "</tr>";
            $count++;
        }
        echo "</table></div>";
        ?>
        <div class="button_categorie">
            <button type="submit" id="blur" onclick="openFormMatch()" class="btn blur">Ajouter un match</button>
        </div>
    <?php }else{
        echo "<div class='table_categorie' id='table_categorie'>
        <table>
        <tr>
        <td>Adresse de la salle</td>
        <td>Date du match</td>
        <td>Heure du match</td>";

        $listeMatchs = getMatchs();

        while($ligne = $listeMatchs -> fetch(PDO::FETCH_OBJ)){
            echo "</tr>";
            echo "<tr>";?>
            <?php
            echo "<td>$ligne->adresse_salle</td>";
            echo "<td>$ligne->date_match</td>";
            echo "<td>$ligne->heure_match</td>";
            echo "</tr>";
        }
        echo "</table></div>";
    }

    ?>
</div>