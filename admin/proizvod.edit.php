<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 18.10
 */
include 'moduli/header.php';
$id=$_GET["id"];
$sql = "SELECT ProductID as id, ProductSKU, ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductImageTwo as slicica3 , ProductLongDesc as dugOpis, ProductThumb as slicica, ProductImage as slicica2 FROM products WHERE ProductID=".$id;
$result = $conn->query($sql);
?>


    <div class="container bggif">
        <div class="bgyellow" >
            <h3>Kliknite na sta zelite da menjate</h3>
            <table class="table">
                <thead>
                <tr>
                    <th><a href="proizvod.edit.ime.php?id=<?php foreach($result as $row){echo $row["id"];}?>">Ime</th></a>
                    <th><a href="proizvod.edit.cena.php?id=<?php foreach($result as $row){echo $row["id"];}?>">Cena</th></a>
                    <th><a href="proizvod.edit.opis.php?id=<?php foreach($result as $row){echo $row["id"];}?>">Opis</th></a>
                    <th><a href="proizvod.edit.dugOpis.php?id=<?php foreach($result as $row){echo $row["id"];}?>">Dug opis</th></a>
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
                    echo "<td>".$row["opis"]."</td>";
                    echo "<td>".$row["dugOpis"]."</td>";
                    echo "<td>".$row["ProductSKU"]."</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
include 'moduli/footer.php';
?>