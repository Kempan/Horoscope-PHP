<?php

$date = substr($_POST["personNr"], -4, 4);

class Person{
    private $horoscope;

    function __construct($date){
        
        $this->date = $date;

        if(strlen($date) < 4){
            $this->horoscope = "<p>Felaktigt personnummer!</p>";
        }

        elseif($date >= '1222' && $date <= '1230' || $date >= '0101' && $date <= '0119'){  
            $this->horoscope = "<h1>Stenbock: 22 december - 19 januari</h1><img src='pics/stenbock.jpg' class='pics'><p>Element: Jord<br>Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal</p>";
        }

        elseif($date >= '0120' && $date <= '0131' || $date >= '0201' && $date <= '0218'){  
            $this->horoscope = "<h1>Vattuman: 20 januari - 18 februari</h1><img src='pics/vattuman.jpg' class='pics'><p>Element: Vatten<br>Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär</p>";
        }

        elseif($date >= '0219' && $date <= '0228' || $date >= '0301' && $date <= '0320'){  
            $this->horoscope = "<h1>Fisk: 19 februari - 20 mars</h1><img src='pics/fisk.jpg' class='pics'><p>Element: Vatten<br>Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande</p>";
        }
         
        elseif($date >= '0321' && $date <= '0331' || $date >= '0401' && $date <= '0419'){  
            $this->horoscope = "<h1>Vädur: 21 mars - 19 april</h1><img src='pics/vadur.jpg' class='pics'><p>Element: Eld<br>Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv</p>";
        }
         
        elseif($date >= '0420' && $date <= '0430' || $date >= '0501' && $date <= '0520'){  
            $this->horoscope = "<h1>Oxe: 20 april - 20 maj</h1><img src='pics/oxe.jpg' class='pics'><p>Element: Jord<br>Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk</p>";
        }

        elseif($date >= '0521' && $date <= '0531' || $date >= '0601' && $date <= '0621'){  
            $this->horoscope = "<h1>Tvilling: 21 maj - 21 juni</h1><img src='pics/tvilling.jpg' class='pics'><p>Element: Luft<br>Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad</p>";
        }

        elseif($date >= '0622' && $date <= '0630' || $date >= '0701' && $date <= '0722'){  
            $this->horoscope = "<h1>Kräfta: 22 juni - 22 juli</h1><img src='pics/krafta.jpg' class='pics'><p>Element: Vatten<br>Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske</p>";
        }
         
        elseif($date >= '0723' && $date <= '0731' || $date >= '0801' && $date <= '0822'){  
            $this->horoscope = "<h1>Lejon: 23 juli - 22 augusti</h1><img src='pics/lejon.jpg' class='pics'><p>Element: Solen<br>Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen</p>";
        }

        elseif($date >= '0823' && $date <= '0831' || $date >= '0901' && $date <= '0922'){  
            $this->horoscope = "<h1>Jungfru: 23 augusti - 22 september</h1><img src='pics/jungfru.jpg' class='pics'><p>Element: Jord<br>Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig</p>";
        }

        elseif($date >= '0923' && $date <= '0930' || $date >= '1001' && $date <= '1022'){  
            $this->horoscope = "<h1>Våg: 23 september - 22 oktober</h1><img src='pics/vag.jpg' class='pics'><p>Element: Luft<br>Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens</p>";
        }
         
        elseif($date >= '1023' && $date <= '1031' || $date >= '1101' && $date <= '1121'){  
            $this->horoscope = "<h1>Skorpion: 23 oktober - 21 november</h1><img src='pics/skorpion.jpg' class='pics'><p>Element: Vatten<br>Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig, stark</p>";
        }

        elseif($date >= '1122' && $date <= '1130' || $date >= '1201' && $date <= '1221'){  
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

$horoscope = new Person($date);

?>