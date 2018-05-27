<?php 
$_TITLE = 'Home';
require 'moduli/header.php'; 
$id=$_GET["id"];
?>


<div class="col-lg-9">
    <br>
    <div class="container">
        <div class="text-center">
            <h4>Registracija</h4>
            <br>
            <form action="dodavanje.php" method="POST">
                <div class="form-group">
                    <label for="inputdefault">Ime</label>
                    <input class="form-control" id="ime" name="ime" type="text" placeholder="Pera">
                    <?php
                    if($id==1)
                    {
                        echo "<p class='bg-danger'>Niste uneli ime</p>";
                    }
                    ?>
                    
                    <label for="inputdefault">Prezime</label>
                    <input class="form-control" id="prezime" name="prezime" type="text" placeholder="Perić">
                    <?php
                    if($id==2)
                    {
                        echo "<p class='bg-danger'>Niste uneli prezime</p>";
                    }
                    ?>

                    <label for="inputdefault">Email</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="pera.peric@mail.com">
                    <?php
                    if($id==3)
                    {
                        echo "<p class='bg-danger'>Niste uneli email</p>";
                    }
                    ?>

                    <label for="inputdefault">Grad</label>
                    <input class="form-control" id="grad" name="grad" type="text" placeholder="Beograd">
                    <?php
                    if($id==4)
                    {
                        echo "<p class='bg-danger'>Niste uneli ime grada</p>";
                    }
                    ?>

                    <label for="inputdefault">Adresa</label>
                    <input class="form-control" id="adresa" name="adresa" type="text" placeholder="Topolska 18">
                    <?php
                    if($id==5)
                    {
                        echo "<p class='bg-danger'>Niste uneli adresu</p>";
                    }
                    ?>

                    <label for="inputdefault">Sifra</label>
                    <input class="form-control" id="sifra" name="sifra" type="password">
                    <?php
                    if($id==6)
                    {
                        echo "<p class='bg-danger'>Niste uneli šifru</p>";
                    }
                    ?>
                </div>
                <button type="submit" class="filterbtn" name="submit" value="Save Data">Registrij se</button>
            </form>
            <br>
            <a href="login.php?id=0">Vec imate profil? Prijavite se.</a>
        </div>
    </div>
</div>
</div>

<?php 
$_TITLE = 'Home';
require 'moduli/footer.php'; 
?>
