<?php
session_start();
if(isset($_SESSION["email"])) {
    $filepath = 'peron.jpg';
    echo '<img src="' . $filepath . '">';

?>
    </p>
<?php
echo '<a href="entry.php">Retornar';
}

else {
    echo "error";

}