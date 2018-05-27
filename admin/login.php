<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 20.48
 */
include 'moduli/header.php';
?>




<div class="container">
    <div class="text-center">
        <h4>ADMIN PANEL LOGIN</h4>
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
<?php
include 'moduli/footer.php';
?>