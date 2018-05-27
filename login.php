<?php 
$_TITLE = 'Home';
require 'moduli/header.php';

?>

<div class="col-lg-9">
    <br>
    <div class="container">
        <div class="text-center">
            <h4>Prijava</h4>
            <br>

            <form action="prijava.php" method="POST">
                <div class="form-group">
                    <label for="inputdefault">Email</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="pera.peric@mail.com">

                    
                    <label for="inputdefault">Sifra</label>
                    <input class="form-control" id="sifra" name="sifra" type="password">
                    <?php
                    $id=$_GET["id"];
                    if($id==1)
                    {
                        echo "<p class='bg-danger'>Pogrešna šifra ili email</p>";
                    }
                    ?>
                </div>
                <button type="submit" class="filterbtn" name="submit" value="Save Data">Prijavi se</button>
            </form>
            <br>
            <a href="register.php?id=0">Nemate profil? Registrujte se</a>
        </div>
    </div>
</div>

<?php 
$_TITLE = 'Home';
require 'moduli/footer.php'; 
?>
