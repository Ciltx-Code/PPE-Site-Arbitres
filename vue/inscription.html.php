<div class="inscription">
    <?php
    if (isset($_POST['nom'],$_POST['prenom'], $_POST['mail'], $_POST['pwd'], $_POST['naissance']) &&
        (!empty($_POST["nom"]) && !empty($_POST["prenom"])&&(!empty($_POST["mail"]) &&(!empty($_POST["pwd"]) &&
                    (!empty($_POST["naissance"])))))){

        ?>

        <div class="ConfirmInscription">
            <?php

                echo "<h2>Vous êtes inscrit avec succès.</h2>";
                echo "<p>Cliquez <a href='./'>ici</a> pour vous connecter</p>"
            ?>
        </div>

        <?php

    }else{
        ?>

        <div class="inscriptionForm">
            <form method="post" action="">
                <fieldset>
                    <h2>Inscription</h2>
                    <input type="text" name="nom" placeholder="Nom" required><br/>
                    <input type="text" name="prenom" placeholder="Prénom" required><br/>
                    <input type="email" name="mail" placeholder="Email" required><br/>
                    <input type="password" name="pwd" placeholder="Mot de passe" required><br/>
                    <input type="date" name="naissance" placeholder="Date de naissance" required><br/>
                    <input type="submit" name="btn" class="boutonInscription" value="S'inscrire">
                    <p>Déjà inscrit ? Connectez-vous <a href="./">ici</a></p>
                </fieldset>
            </form>
        </div>

        <?php
    }
    ?>
</div>