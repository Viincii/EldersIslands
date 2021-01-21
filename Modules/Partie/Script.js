$(document).ready(function(){
    function checkHP(){
        $.ajax({
            url: "Modules/Partie/checkPV.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
                IDJ: $("#Joueur").val(),
            },
            dateType:"text",

            success : function(data){
                $("#showPV").html("PV :" +data);
            }
        })
    };

    function checkTour(){
        $.ajax({
            url: "Modules/Partie/checkTour.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
            },
            dateType:"text",

            success : function(data){
                $("#showTour").html("Tour joueur :" +data);
                if(data==1 && $("#Joueur").val()==1){
                    $("#buttonPV").css('visibility', 'visible');
                }else if(data==2 && $("#Joueur").val()==2){
                    $("#buttonPV").css('visibility', 'visible');
                }else{
                    $("#buttonPV").css('visibility', 'hidden');
                }
            }
        })
    }

    function checkVictoire(){
        $.ajax({
            url: "Modules/Partie/checkVictoire.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
            },
            dateType:"text",

            success : function(data){
                if(data==0){
                    document.location.href="index.php";
                }
            }
        })
    }

    function checkJoueurPresent(){
        $.ajax({
            url: "Modules/Partie/checkJoueurPresent.php",
            type:"POST",
            data:{
                ID: $("#idJoueur").val(),
            },
            dateType:"text",

            success : function(data){
                if(data==0){
                    document.location.href="index.php";
                }
            }
        })
    }

    $("#buttonPV").on("click", function(){
        $.ajax({
            url: "Modules/Partie/perdrePV.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
                IDJ: $("#Joueur").val(),
            },
            dateType:"text",
            
        })
    });

    setInterval(checkHP, 250);
    setInterval(checkTour, 250);
    //setInterval(checkVictoire, 250);
});