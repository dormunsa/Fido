$(document).ready(function () {
    $("#feedBack").hide();

});

$(function() {
    $("#addDogForm").submit(function() {
        var Name = $("#Name").val();
        var age = $("#age").val();
        var breed = $("#breed" ).val();
        var Gender = $("#Gender option:selected" ).text();
        var size = $("#size option:selected" ).text();
        var weight = $("#weight" ).val();
        var color = $("#color option:selected" ).text();
        var fur = $("#fur option:selected" ).text();
        var loyality = $("#loyality option:selected" ).text();
        var friendly = $("#friendly option:selected" ).text();
        var energetic = $("#energetic option:selected" ).text();
        var obidience = $("#obidience option:selected" ).text();
        var dataString = 'name=' + Name + '&age=' + age + '&breed=' + breed + '&Gender=' + Gender + '&size=' + size + '&weight=' + weight + '&color=' + color + '&fur=' + fur + '&loyality=' + loyality + '&friendly=' + friendly + '&energetic=' + energetic + '&obidience=' + obidience ;//if desc is empty it will send empty string	
        console.log(dataString);

        $.ajax({
            type: "POST",
            url: "server/add-action.php",
            data: dataString,
            cache: true,
            success: function(html){
                $("#feedBack").fadeIn();

            }  
        });
        return false;
    });
});