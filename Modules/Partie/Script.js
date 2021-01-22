$(document).ready(function(){
    function checkHP(){
        $.ajax({
            url: "Modules/Partie/checkPV.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
                IDJ: $("#Joueur").val(),
            },
            dataType:"text",

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
            dataType:"text",

            success : function(data){
                $("#showTour").html("Tour joueur :" +data);
                if(data==1 && $("#Joueur").val()==1){
                    $("#buttonPV").css('visibility', 'visible');
                    $(".choix").css('visibility', 'visible');
                }else if(data==2 && $("#Joueur").val()==2){
                    $("#buttonPV").css('visibility', 'visible');
                    $(".choix").css('visibility', 'visible');
                }else{
                    $("#buttonPV").css('visibility', 'hidden');
                    $(".choix").css('visibility', 'hidden');
                }
            }
        })
    }

    function partieComplète(){
        $.ajax({
            url: "Modules/Partie/partieComplete.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
            },
            dataType:"text",

            success : function(data){
                $("#complet").value = 'true';
            }
        });
    }

    function checkVictoire(){
        $.ajax({
            url: "Modules/Partie/checkVictoire.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
            },
            dataType:"text",

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
            dataType:"text",

            success : function(data){
                if(data!=null){
                    document.location.href=data;
                }
            }
        })
    }

    function checkCrea(){
        $.ajax({
            url: "Modules/Partie/checkCrea.php",
            type:"POST",
            data:{
                ID: $("#idPartie").val(),
            },
            dataType:"text",

            success : function(data){
                $test = data.split('|');
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
            dataType:"text",

            success : function(){
                document.location.href="index.php?module=Jouer&action=Partie&id="+$("#idPartie").val()+"&J="+$("#Joueur").val();
            }
        })
    });

    setInterval(checkHP, 250);
    setInterval(checkTour, 250);
    setInterval(checkVictoire, 250);
});