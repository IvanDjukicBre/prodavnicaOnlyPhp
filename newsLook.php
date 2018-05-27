<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 1.6.2017.
 * Time: 19.56
 */

$_TITLE = 'Home';
require 'moduli/header.php';
include_once "scripts/connectToDb.php";
$id = $_GET["id"];
$sql = "SELECT NewsID as id, NewsName as ime , NewsDesc as opis, NewsImage as slika, NewsDate as datum, NewsAuthor as autor FROM news WHERE NewsID=" . $id;
$result = $conn->query($sql);
echo "<div class=\"col-lg-9\"><br><div class=\"container\"><div class=\"text-center\"><br>";
foreach ($result as $row) {
    echo "<h5>" . $row["ime"] . "</h5><br>";
    echo "<p>" . $row["opis"] . "</p>";
    echo "<img src=" . $row["slika"] . " alt=" . $row["ime"] . " height='100%' width='100%' > ";
    echo "<h6>Vest pripremio:" . $row["autor"] . " Datum:" . $row["datum"] . "</h6>";
}
echo "</div></div></div></div></div>";
?>

<?php
$_TITLE = 'Home';
require 'moduli/footer.php';
?>
