<?php
$_TITLE = 'Home';
require 'moduli/header.php';

include_once "scripts/connectToDb.php";
$id=$_GET["id"];
$sql = "SELECT ProductID as id, ProductCategoryID , ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductThumb as slicica FROM products WHERE ProductID>=".$id." ORDER BY ProductID ASC LIMIT 6";
$result = $conn->query($sql);
$poslednji=0;
?>

<div class="col-lg-9">
    </br>
    <div class="row">
        <?php
        foreach ($result as $row) {
            echo "<div class='col-lg-4 col-md-6 mb-4''><div class='card h-100'>";
            //echo " <td><a href='strana.php?id=" .$row["id"]."'>Link</a></td>";
            echo "<a href='prikaz.php?id=" . $row["id"] . "'><img class='card-img-top img-fluid' src='" . $row["slicica"] . "' alt=''></a>";
            echo "<div class='card-block'>";
            echo "<h4 class='card-title'><a href='prikaz.php?id=" . $row["id"] . "'>" . $row["ime"] . "</a></h4>";
            echo "<h5>$" . $row["cena"] . "</h5>";
            echo "<p class='card-text'>" . $row["opis"] . "</p>";
            echo "</div><div class='card-footer'>";
            echo "<small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small>"; //ocena
            echo "</div></div></div>";
            $poslednji=$row["id"];
            $prvi=$id-6;
        }
        ?>
    </div>
    <div class="row">
        <div class="col-lg-3">
        <?php

        echo "<a href='store.php?id=".$prvi."'><button type='submit' class='filterbtn'>Prošla strana</button></a>";
        ?>
        </div>
        <br>
        <div class="col-lg-6">
        <?php

        echo "<a href='store.php?id=".$poslednji."'><button type='submit' class='filterbtn'>Sledeća strana</button></a>";
        ?>
        </div>
    </div>

</div>
<?php
$_TITLE = 'Home';
require 'moduli/footer.php';
?>
