<?php
session_start();
if(isset($_SESSION["email"])) {

    echo $_SESSION["email"];

    ?>
    </p>
    <?php
    echo '<a href="peron1.php">Foto Peron';
    ?>

    </p>
<?php
echo '<a href="logout.php">Cerrar Sesion';


}



