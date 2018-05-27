<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 1.6.2017.
 * Time: 18.15
 */

$_TITLE = 'Home';
session_start();
$uporedi=$_GET["id"];
//var_dump($uporedi);
//var_dump($_SESSION['korpa']);
//array_push($_SESSION['korpa'],$_GET["id"]);
$i=0;
/*unset($_SESSION['korpa'][$_GET["id"]]);*/
foreach($_SESSION['korpa'] as $key=>$itemKorpa)
{
    //var_dump($itemKorpa); die();
    if($itemKorpa==$uporedi)
    {
        
        unset($_SESSION['korpa'][$key]);
        break; //da bi obrisao samo jedan a ne sve, u slucaju da se dozvoljava da isti proizvod bude vise puta dodat
        
        /*
        if (($key = array_search($itemKorpa, $_SESSION['korpa'])) !== false) {
            var_dump($key = array_search($itemKorpa, $_SESSION['korpa']));
            unset($_SESSION['korpa'][$i]);
            break;
        }
      */
    }
    $i++;
}
//var_dump ($_SESSION['korpa']) ;
header('Location: '.'korpa.php');


?>