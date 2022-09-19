function save(element, question, emotion, resp) {
    var idQuestion= question;
    var idEmotion= emotion;
    var reponse= resp;
    $.ajax({
        type : "POST",  //type of method
        url  : "registrar.php",  //your page
        data : { idQuestion : idQuestion, idEmotion : idEmotion, reponse : reponse },// passing the values
        success: function(res){  
                                //do what you want here...
                }
    });
 window.location = 'registrar.php?question=' + idQuestion + "&emotion=" + idEmotion + "&resp=" + reponse; 
}