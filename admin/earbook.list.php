<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 16.09
 */

include 'moduli/header.php';
$sql = "SELECT ProductID as id, ProductCategoryID , ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductThumb as slicica FROM products WHERE ProductCategoryID=2";
$result = $conn->query($sql);
?>
    <div class="container bggif">
        <div class="bgyellow" >
            <h1>Lista svih EARBOOK-ova</h1>
            <hr/>
            <table class="table">
                <thead>
                <tr>
                    <th>Ime</th>
                    <th>Cena</th>
                    <th width="130px"></th>
                    <th width="130px"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($result as $row)
                {
                    echo "<tr>";
                    echo "<td>".$row["ime"]."</td>";
                    echo "<td>".$row["cena"]."</td>";
                    echo "<td><a href='proizvod.edit.php?id=" . $row["id"] . "'>Izmeni artikal</a></td>";
                    echo "<td><a href='obrisi.php?id=".$row["id"]."'>Obrisi artikal</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <a href="cd.create.php" class="btn btn-info" role="button">Dodaj novi artikal</a>
    </div>
<?php
include 'moduli/footer.php';
?>