
    $(document).ready(function () {
      // get Json 
      var json_data = []
      $.getJSON("includes/data/DATA.json", function (data) {
      console.log(data)
      json_data = data
      for (var dog of data) {
      var dogImage = $('<img />');
      dogImage.attr('src',dog.srcUrl)
      dogImage.addClass('imgs')
      var mainContainer = $('#imagesContainer3');
      var text= $("<div></div>").text(dog.name);
      text.text=dog.name;
      var infinity= $("<i></i>");
      infinity.addClass('fas fa-infinity');
      var imageContainer= $("<div></div>");
      imageContainer.addClass('profilePicture');
      text.addClass('bottom-left');
      imageContainer.append(dogImage);
      imageContainer.append(text);
      imageContainer.append(infinity);
      mainContainer.append(imageContainer);
      var option = $(
        '<option>' + dog.breed + '</option>'
        )
        $('#selectFilter').append(option)
      }
      });
      // set filters in dog shearch 
      $('#selectFilter').on('change', function (e) {
        var value = e.target.value
        console.log(value)
        for (var dog of json_data) {
        if (dog.breed == value)
       { var dogImage = $('<img />');
       var dogLink = $("<a></a>")
       dogImage.attr('src',dog.srcUrl)
       dogImage.addClass('imgs')
       var mainContainer = $('#imagesContainer3');
       var text= $("<div></div>").text(dog.name);
       text.text=dog.name;
       var imageContainer= $("<div></div>");
       imageContainer.addClass('profilePicture');
       text.addClass('bottom-left');
       imageContainer.append(dogImage);
       imageContainer.append(text);}
        }
        $('#imagesContainer3').html(imageContainer);
        })

     // post to add user
     $(function() {
      $("#editProf").submit(function() {
        console.log("inside!!!!")
        var fullNAme = $("#fullName").val();
        var dateOB = $("#birth").val();
        var location = $("#location" ).val();
        var relationStat = $("#relationStat option:selected" ).text();
        var children = $("#children option:selected" ).text();
        var homeType = $("#homeType option:selected" ).text();
        var outdoor = $("#outdoor option:selected" ).text();
        var availble = $("#availble option:selected" ).text();
        var expirience = $("#expirience option:selected" ).text();
        var partners = $("#partners option:selected" ).text();
        var energetic = $("#energetic option:selected" ).text();
        var fur = $("#fur option:selected" ).text();
        var maturity = $("#maturity option:selected" ).text();
        var friendly = $("#friendly option:selected" ).text();
        var obidience = $("#obidience option:selected" ).text();
        var danagrus = $("#danagrus option:selected" ).text();
        var priority = $("#priority option:selected" ).text();
        var dataString = 'fullNAme=' + fullNAme + '&dateOB=' + dateOB+'&location='+location+'&relationStat='+relationStat+'&children='+children+'&homeType='+homeType+'&outdoor='+outdoor+'&availble='+availble+'&expirience='+expirience+'&partners='+partners+'&energetic='+energetic+'&fur='+fur+'&maturity='+maturity+'&friendly='+friendly+'&obidience='+obidience+'&danagrus='+danagrus+'&priority='+priority;
      console.log(dataString);
        // //console.log(dataString);
        $("#loader").show();
        $("#loader").fadeIn(300).html('<span class="loading">Loading..</span>');
        
        $.ajax({
          type: "POST",
          url: "addUser.php",
          data: dataString,
          cache: true,
          success: function(html){
            $("#loader").after(html);
            $("#loader").hide();
            console.log(html);
          }  
        });
        return false;
      });
    });
  });
  
    
     