<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 18.21
 */

include 'moduli/header.php';
$id=$_GET["id"];

if(isset($_POST['field1']))
{
    $id=$_GET["id"];
    $izmena=$_POST['field1'];
    //var_dump($izmena);
    $sql ="UPDAsTE `products` SET `ProductName` = ".$izmena." WHERE `products`.`ProductID` = ".$id;
    var_dump($sql);
    //header('Location: '.'index.php');
}
?>

<div class="container">


<form action="<?php echo "proizvod.edit.ime.php?id=".$id."'";?> method="POST">

    <div class="form-group">
        <label for="inputdefault">Ime</label>
        <input class="form-control" id="ime" name="field1" type="text">

    </div>
    <button type="submit" class="btn btn-primary btn-lg" name="submit" value="Save Data">Dodaj</button>
</form>
</div>

<?php
include "/moduli/footer.php";
?>
