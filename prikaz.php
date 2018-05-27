<?php
$_TITLE = 'Home';
require 'moduli/header.php';
include_once "scripts/connectToDb.php";
$id=$_GET["id"];
$sql = "SELECT ProductID as id, ProductSKU, ProductName as ime , ProductPrice as cena , ProductCartDesc as opis, ProductImageTwo as slicica3 , ProductLongDesc as dugOpis, ProductThumb as slicica, ProductImage as slicica2 FROM products WHERE ProductID=".$id;
$result = $conn->query($sql);

?>

<div class="col-lg-4">
    <div class="text-center">
        <a href="prikaz.php?id=<?php foreach($result as $row){echo $row["id"];}?>"><h3><?php foreach($result as $row){echo $row["ime"];}?></h3></a>
        <br>
        <a href="prikaz.php?id=<?php foreach($result as $row){echo $row["id"];}?>">
            <img border="0" alt="<?php foreach($result as $row){echo $row["ime"];}?>" src="<?php foreach($result as $row){echo $row["slicica"];}?>" width="300" height="300">
        </a>

        <img id="myImg" src="<?php foreach($result as $row){echo $row["slicica2"];}?>" alt="<?php foreach($result as $row){echo $row["ime"];}?>" width="148" height="148">

        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>


        <img id="myImg1" src="<?php foreach($result as $row){echo $row["slicica3"];}?>" alt="<?php foreach($result as $row){echo $row["ime"];}?>" width="148" height="148">

        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img02">
            <div id="caption"></div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myImg1');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>

    </div>



</div>
<div class="col-lg-5">
    <br>
    <p><?php foreach($result as $row){echo $row["dugOpis"];}?></p>
    <br>
    <h4><?php foreach($result as $row){echo $row["opis"];}?></h4>
    <h3>&euro;<?php foreach($result as $row){echo $row["cena"];}?></h3>
    <a href="korpaDodavanje.php?id=<?php foreach($result as $row){echo $row["id"]; $ovaj=$row["id"]; }?>"><button type='submit' class='filterbtn' name='submit' value='add'>Dodaj u korpu</button></a>




</div>
<div class="col-lg-3">
    <br>
    <a href="najjeftiniji.php"><h6>Želite da vidite 5 najjeftinijih proizvoda?</h6></a>
</div>
<?php
$sql = "SELECT UserFirstName as imeKomentar, CommentID, CommentUserID, ProductID , CommentDate as datum, CommentText as komentar FROM comments  JOIN users ON comments.CommentUserID = users.UserID WHERE ProductID=".$ovaj;
$result = $conn->query($sql);
//echo $sql;
?>
<div class="col-lg-8">
    <div class="well">
        <h4>Ostavite komentar:</h4>
        <form  method="POST" action="komentarisanje.php">
            <div class="form-group">
                <textarea name="komentar" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="filterbtn">Potvrdi</button>
        </form>
    </div>
    <hr>
    <h4><?php foreach($result as $row){echo $row["imeKomentar"];}?>:</h4>
    <h5><?php foreach($result as $row){echo $row["komentar"];}?></h5>
    <p><?php foreach($result as $row){echo $row["datum"];}?></p>
    <hr>
</div>



<?php
$_TITLE = 'Home';
require 'moduli/footer.php';
?>

