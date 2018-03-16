<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "GET"){

    if($_SESSION == null){
        echo "<p>Det finns inget horoskop sparat, skriv in ditt personnummer!</p>";
    }
    else {
        echo ($_SESSION["horoscope"]);
    }
}
else {
    echo "<p>Not requested by GET</p>";
}

?>