<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 19.43
 */
include 'moduli/header2.php';
?>

<?php
//proverim da li treba da se radi create
if( isset($_REQUEST['action']) and $_REQUEST['action']=='create' ){
    //moze i bez isset, dovoljno je samo ovo drugo, ali bacice notice ako nije setovano

    //prihvatam i cistim nove vrednosti
    $naziv = $db->real_escape_string($_REQUEST['naziv']);
    $cena = $db->real_escape_string($_REQUEST['cena']);
    $tezina = $db->real_escape_string($_REQUEST['tezina']);
    $kategorija = $db->real_escape_string($_REQUEST['kategorija']);
    $slika3 = $db->real_escape_string($_REQUEST['slika3']);
    $opis = $db->real_escape_string($_REQUEST['opis']);
    $slicica = $db->real_escape_string($_REQUEST['slicica']);
    $slika2 = $db->real_escape_string($_REQUEST['slika2']);
    $kategorijaID = $db->real_escape_string($_REQUEST['kategorijaID']);

    //proverim da li je sve korektno uneto - backend validacija
    $validno = true;  //pretpostavim da je sve ok
    $errmsg = '';
    if(strlen($naziv)<3){  //trazim greske, redom
        $validno = false;
        $errmsg .= '<p>Naziv nije korektno unet</p>';
    }
    //kraj validacije
    if($validno){
        //izvrsim upit
        $db->query("insert into products (ProductName, ProductPrice, ProductWeight, ProductCartDesc, ProductImageTwo, ProductLongDesc, ProductThumb, ProductImage, ProductCategoryID) values ('$naziv','$cena','$tezina','$kategorija','$slika3','$opis','$slicica','$slika2','$kategorijaID')");

        //posto je uneo, treba da uradim redirekciju na spisak ili na edit tog novog
        //header("Location: kategorije.list.php"); die();
        $nov_id = $db->insert_id; //dohvatim poslednji generisani id
        header("Location: index.php"); die();
    } else {
        //nije validno, prikazem poruku, i ne izvrsim upit
        ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Greska!</strong> <?= $errmsg ?>
        </div>
        <?php
    }
}
?>

<div class="container bggif">
    <div class="bgyellow" >
        <h1>Novi artikal</h1>
        <form method="post" action="cd.create.php">
            <input type="hidden" name="action" value="create" />
            <a href="cd.list.php" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <button class="btn btn-success pull-right">Sacuvaj</button>

            <hr />
            <div class="form-group">
                <label>Naziv:</label>
                <input type="text" name="naziv" value="" class="form-control" />

                <label>Cena:</label>
                <input type="text" name="cena" value="" class="form-control" />

                <label>Tezina:</label>
                <input type="text" name="tezina" value="" class="form-control" />

                <label>Kategorija:</label>
                <input type="text" name="kategorija" value="" class="form-control" />

                <label>Slika 2:</label>
                <input type="text" name="slika3" value="" class="form-control" />

                <label>Opis:</label>
                <input type="text" name="opis" value="" class="form-control" />

                <label>Slicica:</label>
                <input type="text" name="slicica" value="" class="form-control" />

                <label>Slika 2:</label>
                <input type="text" name="slika2" value="" class="form-control" />

                <label>Kategorija id (1 CD, 2 EARBOOK, 3 VINYL, 4 T-SHIRT):</label>
                <input type="text" name="kategorijaID" value="" class="form-control" />
            </div>
        </form>
    </div>
</div>

<?php
include 'moduli/footer.php';
?>
