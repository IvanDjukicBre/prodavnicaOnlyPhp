<?php 
$_TITLE = 'Home';
require 'moduli/header.php'; 
?>
<div class="col-lg-9">
    <br>
    <div class="container">
        <h2>Kontakt</h2>
        <h3>Email: kontakt@laststand.com</h3>
        <h3>Telefon: 011/1111-111</h3>
        <h3>Adresa: Trg Nikole Pašića 13</h3>
        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCABde5yCprfqlKWpjfsAjBsxTDH41eAxQ
            &q=Trg+Nikole+Pasica+13,Belgrade+RS" allowfullscreen>
        </iframe>
        </br>
        <button type="button" class="filterbtn" data-toggle="collapse" data-target="#demo">Postavite nam pitanje</button>
        <div id="demo" class="collapse">

            <form action="pitanje.php" method="POST">
                <div class="form-group">
                    <label for="inputdefault">Email</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="pera.peric@mail.com">


                    <label for="inputdefault">Poruka</label>
                    </br>
                    <div class="input-group">
                        <textarea class="form-control" name="poruka" placeholder="Poruka ili pitanje za nas"></textarea>
                    </div>

                </div>
                <button type="submit" class="filterbtn" name="submit" value="Save Data">Posalji</button>
            </form>
        </div>

    </div>
</div>
<?php 
$_TITLE = 'Home';
require 'moduli/footer.php'; 
?>
