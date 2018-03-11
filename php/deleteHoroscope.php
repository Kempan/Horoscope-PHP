<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    
    if($_SESSION["horoscope"] == null){
        echo "<p>Det finns inget horoskop sparat!</p>";
    } else{
        echo "<p>Horoskop raderat!</p>";
        session_destroy();
    }
    
} else {
    echo "<p>Not requested by DELETE</p>";
}

?>