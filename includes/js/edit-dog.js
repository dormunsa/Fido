

$(document).ready(function () {
    $("#feedBack").hide();
    id = getDogID();
    $.getJSON("includes/data/DATA.json", function (data) {
        console.log(data)
        json_data = data
        for (var dog of data) {
       if(id==dog.id){
           $("#Name").val(dog.name);
           $("#age").val(dog.age);
           $("#breed").val(dog.breed);
           $('#Gender option:eq(Gender)').prop('selected', true);
           $('#size option:eq(size)').prop('selected', true);
           $('#color option:eq(Color)').prop('selected', true);
           $('#fur option:eq(Fur)').prop('selected', true);
           $('#loyality option:eq(Loyality)').prop('selected', true);
           $('#friendly option:eq(Friendly)').prop('selected', true);
           $('#energetic option:eq(Energetic)').prop('selected', true);
           $('#obidience option:eq(Obidience)').prop('selected', true);
           $("#weight").val(dog.Weight);
         
       }
        }
        });
});
function getDogID(){
    // // debugger;
    // console.log (window.location.search);

    var aKeyValue= window.location.search.substring(1).split('&');
    var id= aKeyValue[0].split("=")[1];
    console.log(id);
    return id;
}
$(function() {
    $("#addDogForm").submit(function() {
        var Name = $("#Name").val();
        var age = $("#age").val();
        var breed = $("#breed" ).val();
       
        var size = $("#size option:selected" ).text();
        var weight = $("#weight" ).val();
        var color = $("#color option:selected" ).text();
        var fur = $("#fur option:selected" ).text();
        var loyality = $("#loyality option:selected" ).text();
        var friendly = $("#friendly option:selected" ).text();
        var energetic = $("#energetic option:selected" ).text();
        var obidience = $("#obidience option:selected" ).text();
        var id=id;
        var dataString = 'name=' + Name + '&id=' + id + '&age=' + age + '&breed=' + breed + '&Gender=' + Gender + '&size=' + size + '&weight=' + weight + '&color=' + color + '&fur=' + fur + '&loyality=' + loyality + '&friendly=' + friendly + '&energetic=' + energetic + '&obidience=' + obidience ;//if desc is empty it will send empty string	
        console.log(dataString);

        $.ajax({
            type: "POST",
            url: "server/update-dog.php",
            data: dataString,
            cache: true,
            success: function(html){
                $("#feedBack").fadeIn();
            }  
        });
        return false;
    });
});
