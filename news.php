<?php
$_TITLE = 'Home';
require 'moduli/header.php';
include_once "scripts/connectToDb.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT NewsID as id, NewsName as ime , NewsDesc as opis, NewsImage as slika, NewsDate as datum, NewsAuthor as autor FROM news";
$result = $conn->query($sql);
echo "<div class=\"col-lg-9\">
    <br>
    <div class=\"container\">
        <div class=\"text-center\">
            <h4>Vesti</h4>
            <br>";
//href='prikaz.php?id="
foreach ($result as $row) {
    echo "<a href='newsLook.php?id=" . $row["id"] . "'>";
    echo "<h5>" . $row["ime"] . "</h5>";
    echo "<hr>";
}
echo "</div></div></div></div></div>";
$_TITLE = 'Home';
require 'moduli/footer.php';
?>
