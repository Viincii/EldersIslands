$(document).ready(function(){
    $("#send").on("click", function(){
        $.ajax({
            url: "Modules/Tchat/insertMessage.php",
            type:"POST",
            data:{
                Envo: $("#idJoueur").val(),
                Dest: $("#Dest").val(),
                Text: $("#Text").val(),
            },
            dataType:"text",
            success :function(){
                $("#Text").flush();
            }
        })
    });

    function recevoirMessages(){
        $.ajax({
            url: "Modules/Tchat/realTimeChat.php",
            type:"POST",
            data:{
                Envo: $("#Envo").val(),
                Dest: $("#Dest").val(),
            },
            dataType:"text",
            success :function(){

            }
        })
    }
    setInterval(recevoirMessages, 1000);
    
});