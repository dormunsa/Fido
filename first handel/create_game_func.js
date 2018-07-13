$(function() {
			$("#createGame").submit(function() {
				var desc = $("#desc").val();
				var dateTime = $("#dateTime").val();
				var street = $( "#street option:selected" ).text();
				var city = $( "#city option:selected" ).text();
				var country = $( "#country option:selected" ).text();
				var part = $( "#part option:selected" ).text();
				var phoneNum = $("#phoneNum").val();

				var dataString = 'desc=' + desc + '&dateTime=' + dateTime+'&street='+street+'&city='+city+'&country='+country+'&part='+part+'&phoneNum='+phoneNum;//if desc is empty it will send empty string	
			
				//console.log(dataString);
				$("#loader").show();
				$("#loader").fadeIn(300).html('<span class="loading">Loading..</span>');
				
				$.ajax({
					type: "POST",
					url: "create_game_in_db.php",
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