<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'calculateHoroscope.php';

    if($_POST["personNr"] == null && $_SESSION["horoscope"] == null){
        echo "<p>Var vänlig skriv in ett personnummer!</p>";
    }
    else if($_SESSION["horoscope"] == null){
        $_SESSION["horoscope"] = $horoscope->printSign();
        echo "true";
    }
    else if($_SESSION["horoscope"] != null){
        echo "<p>Du har redan sparat ett horoskop! För att uppdatera använd uppdatera-knappen till höger :)<br>Använd visa-knappen för att se det sparade horoskopet.</p>";
    }
}

else{
    echo "<p>Not requested by POST</p>";
}

?>