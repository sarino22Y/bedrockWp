/*window.onload = function(){ 
    alert("mandeha");
}*/
$(function() { 
    $('.wp-block-button>a').click(function(){
        $(".entry-title").hide();
    });
    $("#accordion").accordion();   
        $("#accordion").append("<br><p>Date: <input></p>");
        $("#accordion p>input").attr({id:"datepicker",type:'text'});
        $("#datepicker").datepicker({
            dateFormat: "dd-mm-yy"
        }); 

    $(".widget button").button();
    $(".widget button").click(function(){
        $(this).css("backgroud-color","#5bb04b");
    });
    $(".widget input").click( function( event ) {
      event.preventDefault();
    });
    $("#titreAccueil").click(function(){
        $("#paragraphe1").toggleClass("show hide");
    });
    $("#paragraphe1").hover(function() {        
       $(this).animate({
            opacity: 0.9,
            marginLeft: "0.1in",
            borderWidth: "1px",
            color : "rgb(16, 75, 47)"
        },5000);
    });
});