<?php 
$_TITLE = 'Home';
require 'moduli/header.php'; 
include_once "scripts/connectToDb.php";

$sql = "SELECT ProductID as id, ProductSKU, ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductThumb as slicica FROM products WHERE ProductSKU='Istaknut' limit 6";
$result = $conn->query($sql);

?>

<div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <a href="prikaz.php?id=993">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="slike/slider/sabaton.jpg" alt="First slide">
            </a>
            </div>
            <a href="prikaz.php?id=997">
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="slike/slider/alestorm.jpg" alt="Second slide">
            </a>
            </div>

            <a href="prikaz.php?id=998">
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="slike/slider/powerwolf.jpg" alt="Third slide">
            </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">

        <?php  

foreach($result as $row)
	{
		echo "<div class='col-lg-4 col-md-6 mb-4''><div class='card h-100'>";
        //echo " <td><a href='strana.php?id=" .$row["id"]."'>Link</a></td>";
        echo "<a href='prikaz.php?id=" .$row["id"]."'><img class='card-img-top img-fluid' src='".$row["slicica"]."' alt=''></a>";
        echo "<div class='card-block'>";
        echo "<h4 class='card-title'><a href='prikaz.php?id=" .$row["id"]."'>".$row["ime"]."</a></h4>";
        echo "<h5>$".$row["cena"]."</h5>";
        echo "<p class='card-text'>".$row["opis"]."</p>";
        echo "</div><div class='card-footer'>";
        echo "<small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9733;</small>"; //ocena
        echo "</div></div></div>";
            
           
    }
 
?>

    </div>
    <!-- /.row -->

</div>
<!-- /.col-lg-9 -->


<?php 
$_TITLE = 'Home';
require 'moduli/footer.php'; 
?>
