<?php
if (isset($_POST['connect'])) {
    extract($_POST, EXTR_OVERWRITE);
    $log = new ClientDB($cnx);
    $client = $log->getClient($login,$password);
    /*var_dump($client);*/
    if (is_null($client)) {
        print "<br/>Données incorrectes";
    } else {
        $_SESSION['log'] = $login;
        unset($_SESSION['page']);
        print "<meta http-equiv=\"refresh\": Content=\"0;URL=index.php \">";
    }
}
?>

<div class="block-30 block-30-sm item" style="background-image: url('./Admin/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">Register</span>
                <h2 class="heading">Connect </h2>
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
                        <input type="text" name="login" class="form-control px-3 py-3" placeholder="Adresse mail">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control px-3 py-3" placeholder="Mot de Passe">
                    </div>
                    <input type="submit" value="Connection" class="btn btn-primary py-3 px-5" name="connect"> 

                </form>

            </div>
            <a href="index.php?page=Register.php">Pas encore de compte ? Créez en un </a>
        </div>


    </div>
</div>
</div>








