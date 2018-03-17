
$(document).ready(function(){
            
    //Skriver ut horoskopet om det finns sparat i SESSION
    viewHoroscope = function(){
        $.ajax({
            url:"php/viewHoroscope.php",
            method: "GET",
            success: function(results){
                $(".content").html(results);
            }
        });
    }

    viewHoroscope();

    //Visar sparat horoskop
    $("#visaHoroskop").click(function(){
        viewHoroscope();
    });
    
    //Sparar horoskopet i SESSION och skriver ut om SESSION är tomt
    //Om det redan finns ett horoskop sparat i SESSION säger den ifrån
    $("#sparaHoroscope").click(function(){
                
        $.ajax({
            url:"php/addHoroscope.php",
            method: "POST",
            data:{
                "personNr": $("#angivetNummer").val()
            },
            success: function(results){
                if(results == true){
                    viewHoroscope();
                }
                else { 
                    $(".content").html(results);
                }
            }
        });
    });
    
    //Uppdaterar SESSION med det nya horoskopet och skriver ut
    //Ber dig sparat ett horoskop om SESSION är tomt
    $("#uppdateraHoroscope").click(function(){
                
        $.ajax({
            url:"php/updateHoroscope.php",
            method: "PUT",
            data:{
                "personNr": $("#angivetNummer").val()
            },
            success: function(results){
                if(results == true){
                    viewHoroscope();
                } else {
                    $(".content").html(results);
                }
            }
        }); 
    });
    
    //Tömmer SESSION 
    //Säger ifrån om det inte finns något sparat
    $("#raderaHoroscope").click(function(){
                
        $.ajax({
            url:"php/deleteHoroscope.php",
            method: "DELETE",
            data:{
                "personNr": $("#angivetNummer").val()
            },
            success: function(results){
                $(".content").html(results);
            }
        });   
    });
});