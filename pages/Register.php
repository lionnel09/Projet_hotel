
<?php
if (isset($_POST['Register'])) {
    extract($_POST, EXTR_OVERWRITE);

    if (empty($nom) || empty($prenom) || empty($mp) || empty($tel) || empty($adr) || empty($cp) || empty($ville) || empty($email)) {
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs</span>";
    } else {
        $cl = new ClientDB($cnx);
        $retour = $cl->addClient($_POST);
        if ($retour == 1) {
            print "<br/>Insertion effectuée";
        } else if ($retour == 2) {
            print "<br/> Déjà encodé";
        }
        //var_dump($_GET);
    }
}
?>



<div class="block-30 block-30-sm item" style="background-image: url('./Admin/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Register</span>
                <h2 class="heading">Connect</h2>
            </div>
        </div>
    </div>
</div>




<div class="site-section">
    <div class="container">
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>" >
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control px-3 py-3" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom" class="form-control px-3 py-3" placeholder="Prénom">
                    </div>
                     <div class="form-group">
                        <input type="text" name="email" class="form-control px-3 py-3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="mp" class="form-control px-3 py-3" placeholder="Mot de Passe">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel" class="form-control px-3 py-3" placeholder="Téléphone">
                    </div>
                    <div class="form-group">
                        <input type="text" name="adr" class="form-control px-3 py-3" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cp" class="form-control px-3 py-3" placeholder="Code Postal">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ville" class="form-control px-3 py-3" placeholder="Ville">
                    </div>
                    <input type="submit" value="S'enregistrer" class="btn btn-primary py-3 px-5" name="Register">
                </form>
            </div>
        </div>


    </div>
</div>
</div>








