<?php ?>
<div class="container">
    <a class="navbar-brand" href="index.html">VoitusCoorporation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu">Menu</span> 
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php?page=Accueil.php" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="index.php?page=Hotel.php" class="nav-link">Hotel</a></li>
            <li class="nav-item"><a href="#ancre" class="nav-link">Info</a></li>
            <?php if (empty($_SESSION['log'])) {
                ?>
                <li class="nav-item"><a href="index.php?page=Connection.php" class="nav-link">Connecter_Vous</a></li>
                <?php
            } else {
                ?>
                <li class="nav-item"><a href="index.php?page=Disconnect.php" class="nav-link">Deconnexion</a></li>
                    <?php
                }
                ?>

        </ul>
    </div>
</div>
