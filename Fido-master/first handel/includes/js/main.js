
    $(document).ready(function () {
      var json_data = []

      $.getJSON("/includes/data/DATA.json", function (data) {
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
     });

     
     