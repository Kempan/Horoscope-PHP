<?php

parse_str(file_get_contents("php://input"), $_PUT);
session_start();

if($_SERVER["REQUEST_METHOD"] == "PUT"){

    if($_SESSION["horoscope"] == null){
        echo "<p>Det finns inget horoskop sparat! Använd spara-knappen till vänster :)</p>";
    }
    else if($_PUT["personNr"] == null) {
        echo "<p>Var vänlig skriv in ett personnummer!</p>";
    }
    else{
        $_POST["personNr"] = $_PUT["personNr"];
        include 'calculateHoroscope.php';
        $falseCheck = $horoscope->printSign();

        if($falseCheck != "<p>Felaktigt personnummer!</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            $true = true;
            echo $true;
        }
        else {
            echo $falseCheck;
            session_destroy();
        }
    }  
} 
else {
    echo "<p>Not requested by PUT</p>";
}

?>