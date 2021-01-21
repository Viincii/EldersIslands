$(document).ready(function(){
    $("#send").on("click", function(){
        $.ajax({
            url: "Modules/Tchat/insertMessage.php",
            type:"POST",
            data:{
                Envo: $("#Envo").val(),
                Dest: $("#Dest").val(),
                Text: $("#Text").val(),
            },
            dateType:"text",
        })
    });

    /*setInterval(function(){
        $.ajax({
            url: "Modules/Tchat/realTimeChat.php",
            type:"POST",
            data:{
                Envo: $("#Envo").val(),
                Dest: $("#Dest").val(),
                Text: $("#Text").val(),
            },
            dateType:"text",
        })
    })
    */
});