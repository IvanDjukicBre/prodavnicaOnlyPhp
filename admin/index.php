<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 15.15
 */
include 'moduli/header.php';
?>

    <div class="container bggif">
        <br><br><br><br><br><br><br><br><br><br>
        <div class="bgyellow" >
        <h1>Admin panel</h1>
            <p>Klikom na odredjeno dugme dobicete listu svega u toj kategoriji</p>
            <hr />
            <h3>Prodavnica</h3>
            <a class="btn btn-lg btn-success" href="cd.list.php">CD</a>
            <a class="btn btn-lg btn-success" href="earbook.list.php">EARBOOK</a>
            <a class="btn btn-lg btn-success" href="vinyl.list.php">VINYL</a>
            <a class="btn btn-lg btn-success" href="tshirt.list.php">T-SHIRT</a>
            <hr />
            <h3>Vesti</h3>
            <a class="btn btn-lg btn-success" href="vesti.list.php">Vesti</a>
        </div>
    <br><br>
        <a href="https://www.accuweather.com/en/rs/zemun/298199/weather-forecast/298199" class="aw-widget-legal">
            <!--
            By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
            -->
        </a><div id="awtd1497473177758" class="aw-widget-36hour"  data-locationkey="" data-unit="c" data-language="sr" data-useip="true" data-uid="awtd1497473177758" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
    </div>
<?php
include 'moduli/footer.php';
?>