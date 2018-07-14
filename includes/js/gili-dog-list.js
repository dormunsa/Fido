$(document).ready(function () {
    $(".delete").hide();
    $("#deleted").hide();
    $("#side1").click(function(){
    if($(".delete").css('display') == 'none')
    {
      $(".delete").fadeIn();
      $("#side1").css('color','#ffffff');
      $("#side1").css('opacity','1');
    }
   
    else 
    {
      $(".delete").fadeOut();
      $("#side1").css('color','#f8f9fa');
      $("#side1").css('opacity','0.4');
    }
  });

    $(".edit").hide();
    $("#side3").click(function(){
    if($(".edit").css('display') == 'none')
    {
      $(".edit").fadeIn();
      $("#side3").css('color','#ffffff');
      $("#side3").css('opacity','1');
    }
   
    else 
    {
      $(".edit").fadeOut();
      $("#side3").css('color','#f8f9fa');
      $("#side3").css('opacity','0.4');
    }
  
  });
  

  

});

 // post to delete dog
 $(function() {
    $("#deleteDog1").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName1").html();
      var dogId=1;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
     
   
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
              $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
                $('#dogsCont1').hide()
                $("#dogName1").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
    $("#deleteDog2").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName2").html();
      var dogId=2;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
        $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
                $('#dogsCont2').hide()
                $("#dogName2").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
    $("#deleteDog3").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName3").html();
      var dogId=3;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
        $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
                $('#dogsCont3').hide()
                $("#dogName3").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
    $("#deleteDog4").click(function() {
      $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
      var dogName = $("#dogName4").html();
      var dogId=4;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
        $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
                $('#dogsCont4').hide()
                $("#dogName4").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
    $("#deleteDog5").click(function() {
      $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
      var dogName = $("#dogName5").html();
      var dogId=5;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
        $("#deleted").fadeIn().delay(5000).fadeOut('fast');;
                $('#dogsCont5').hide()
                $("#dogName5").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
    $("#deleteDog6").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName6").html();
      var dogId=1;
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/delete-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
        $('#deleted').fadeIn().delay(5000).fadeOut('fast');
                $('#dogsCont6').hide()
                $("#dogName6").hide()
              
				console.log(html)
				}  
            });
            return false;
    });
  });


  $(function() {
    $("#editDog1").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName1").html();
      var dogId=1;
      window.location.replace("edit-dog.php?id=1");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
          
				}  
            });
            return false;
    });
    $("#editDog2").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName2").html();
      var dogId=2;
      window.location.replace("edit-dog.php?id=2");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
               
				}  
            });
            return false;
    });
    $("#editDog3").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName3").html();
      var dogId=3;
      window.location.replace("edit-dog.php?id=3");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
          
				}  
            });
            return false;
    });
    $("#editDog4").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName4").html();
      var dogId=4;
      window.location.replace("edit-dog.php?id=4");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
           
				}  
            });
            return false;
    });
    $("#editDog5").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName5").html();
      var dogId=5;
      window.location.replace("edit-dog.php?id=5");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
          
				}  
            });
            return false;
    });
    $("#editDog6").click(function() {
      console.log("inside!!!!")
      var dogName = $("#dogName6").html();
      var dogId=1;
      window.location.replace("edit-dog.php?id=6");
      var dataString ='dogName='+dogName+'&dogId='+dogId; 
    console.log(dataString);
      $.ajax({
			type: "POST",
			url: "server/update-dog.php",
			data: dataString,
			cache: true,
			success: function(html){
                console.log('dor')
              
				}  
            });
            return false;
    });
  });