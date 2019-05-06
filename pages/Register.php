<?php ?>



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
                        <input type="text" name="mp" class="form-control px-3 py-3" placeholder="Mot de Passe">
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
                    <input type="submit" value="Register" class="btn btn-primary py-3 px-5" name="S'enregistrer">
                </form>
            </div>
        </div>


    </div>
</div>
</div>








