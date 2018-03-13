<?php

class Person{
    private $horoscope;

    function __construct($date){
        
        $this->date = $date;

        if(strlen($date) < 4){
            $this->horoscope = "<p>Felaktigt personnummer!</p>";
        }

        elseif($date <= '1222' && $date <= '0120'){  
            $this->horoscope = "<h1>Stenbock: 22 december - 19 januari</h1><img src='pics/stenbock.jpg' class='pics'><p>Element: Jord<br>Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal</p>";
        }

        elseif($date >= '0121' && $date <= '0218'){  
            $this->horoscope = "<h1>Vattuman: 20 januari - 18 februari</h1><img src='pics/vattuman.jpg' class='pics'><p>Element: Vatten<br>Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär</p>";
        }

        elseif($date >= '0219' && $date <= '0320'){  
            $this->horoscope = "<h1>Fisk: 19 februari - 20 mars</h1><img src='pics/fisk.jpg' class='pics'><p>Element: Vatten<br>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande</p>";
        }
         
        elseif($date >= '0221' && $date <= '0420'){  
            $this->horoscope = "<h1>Vädur: 21 mars - 19 april</h1><img src='pics/vadur.jpg' class='pics'><p>Element: Eld<br>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv</p>";
        }
         
        elseif($date >= '0421' && $date <= '0521'){  
            $this->horoscope = "<h1>Oxe: 20 april - 20 maj</h1><img src='pics/oxe.jpg' class='pics'><p>Element: Jord<br>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk</p>";
        }

        elseif($date >= '0522' && $date <= '0621'){  
            $this->horoscope = "<h1>Tvilling: 21 maj - 21 juni</h1><img src='pics/tvilling.jpg' class='pics'><p>Element: Luft<br>Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad</p>";
        }

        elseif($date >= '0622' && $date <= '0722'){  
            $this->horoscope = "<h1>Kräfta: 22 juni - 22 juli</h1><img src='pics/krafta.jpg' class='pics'><p>Element: Vatten<br>Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske</p>";
        }
         
        elseif($date >= '0723' && $date <= '0823'){  
            $this->horoscope = "<h1>Lejon: 23 juli - 22 augusti</h1><img src='pics/lejon.jpg' class='pics'><p>Element: Solen<br>Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen</p>";
        }

        elseif($date >= '0824' && $date <= '0922'){  
            $this->horoscope = "<h1>Jungfru: 23 augusti - 22 september</h1><img src='pics/jungfru.jpg' class='pics'><p>Element: Jord<br>Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig</p>";
        }

        elseif($date >= '0923' && $date <= '1023'){  
            $this->horoscope = "<h1>Våg: 23 september - 22 oktober</h1><img src='pics/vag.jpg' class='pics'><p>Element: Luft<br>Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens</p>";
        }
         
        elseif($date >= '1024' && $date <= '1122'){  
            $this->horoscope = "<h1>Skorpion: 23 oktober - 21 november</h1><img src='pics/skorpion.jpg' class='pics'><p>Element: Vatten<br>Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig, stark</p>";
        }

        elseif($date >= '1123' && $date <= '1221'){  
            $this->horoscope = "<h1>Skytt: 22 november - 21 december</h1><img src='pics/skytt.jpg' class='pics'><p>Element: Eld<br>Ärlig, generös, idealistisk, optimistisk, överdrivande, entusiastisk, sökare</p>";
        }

        else {
            $this->horoscope = "<p>Felaktigt personnummer!</p>";
        }

    }
    
    public function printSign(){
        return $this->horoscope;
    }
    
}

$date = substr($_POST["personNr"], -4, 4);
$horoscope = new Person($date);

?>