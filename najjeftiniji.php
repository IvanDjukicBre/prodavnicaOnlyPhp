<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 12.6.2017.
 * Time: 17.25
 */

$_TITLE = 'Home';
require 'moduli/header.php';

include_once "scripts/connectToDb.php";

$sql = "SELECT ProductID as id, ProductCategoryID , ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductThumb as slicica FROM products ORDER BY ProductPrice ASC LIMIT 5;";
$result = $conn->query($sql);

?>

<div class="col-lg-9">
    </br>
    <!--
    <a href="poCeni.php?id=1"><button type="submit" class="filterbtn" name="submit" value="Filter">20 najjeftinijih proizvoda</button></a>-->

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


        }
        ?>
    </div>
    <!-- /.row -->


</div>
<?php
$_TITLE = 'Home';
require 'moduli/footer.php';
?>
