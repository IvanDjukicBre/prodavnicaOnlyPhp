<?php
$_TITLE = 'Home';
require 'moduli/header.php';
/*if(!isset($_SESSION["korpa"]))
{
    die("<h1>Korpa je prazna</h1>");
}
*/           

if (empty($_SESSION["korpa"])) {
    die("<h1>Korpa je prazna</h1>");
}


$whereIn = implode(',', $_SESSION["korpa"]);
include_once "scripts/connectToDb.php";
//$id=$_GET["id"];
$sql = "SELECT ProductID , ProductName as ime , ProductPrice as cena , ProductThumb as slicica FROM products WHERE ProductID IN ($whereIn)";

$ukupno=0;
$result = $conn->query($sql);
//var_dump($result);
?>


<div class="col-lg-9">
    <br>
    <div class="container">
        <h3>Korpa</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Ime proizvoda</th>
                <th>Cena</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
               
           
            foreach ($result as $row) {
                echo "<tr>"; //<a href='korpaDodavanje.php?id=" .$row["id"]."'><button type='submit' class='filterbtn' name='submit' value='add'>Dodaj u korpu</button>
                echo " <td>" . $row["ime"] . "</td><td>" . $row["cena"] . "</td><td><a href='korpaOduzimanje.php?id=" . $row["ProductID"] . "'><button type='submit' class='btn' name='submit' value='add'>Izbaci iz korpe</button></td>";
                echo "</tr>";
                $ukupno+=$row["cena"];
            }
            
            ?>
            </tbody>
        </table>
    <h4>Ukupno: <?php echo $ukupno; ?>&euro;</h4>
    </div>

</div>

<?php
$_TITLE = 'Home';
require 'moduli/footer.php';
?>
