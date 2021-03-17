<div class="background" id="background">
	<div class="entete" id="entete">
		<a class="logo" href="../site"><img href="../site" src="../site/images/ffbb_icone.jpg"></a>

		<nav>
			<ul>
                <?php
                
                if(isset($_SESSION["id"])){

                    ?>
                    <li><a href="./">Accueil</a></li>
                    <li><a href="?action=matchs">Matchs</a></li>
                    <li><a href="?action=categorie">Catégories</a></li>
                    <li id="user"><button onclick="Afficher()" class="dropbtn" id="drop"><p><?php echo $_SESSION["username"]; ?></p> </button></li>
                    <div id="myDropdown" class="dropdown-content" name="myDropdown">
                        <a>Mon profil</a>
                        <a href="./modele/logout.php">Déconnexion</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <li><a href="./">Accueil</a></li>
                    <li><a href="?action=matchs">Matchs</a></li>
                    <li><a href="?action=categorie">Catégories</a></li>
                    <li><a onclick="openForm()">Connexion</a></li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
