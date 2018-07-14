<?php
    include('db.php');
    
    //get data from DB to display
    // $query1 = "SELECT * FROM fido_users order by post_id";    
    // $result = mysqli_query($connection, $query1);

    // if(!$result) {
    //     die('DB QUERY FAILED.');
    // }
   
    if(isset($_POST['partners'])){
        //escape variables for security
        $_fullNAme = mysqli_real_escape_string($connection, $_POST['fullNAme']);
        $_dateOB = mysqli_real_escape_string($connection, $_POST['dateOB']);
        $_location= mysqli_real_escape_string($connection, $_POST['location']);
        $_relationStat = mysqli_real_escape_string($connection, $_POST['relationStat']);
        $_children = mysqli_real_escape_string($connection, $_POST['children']);
        $_homeType = mysqli_real_escape_string($connection, $_POST['homeType']);
        $_outdoor = mysqli_real_escape_string($connection, $_POST['outdoor']);
        $_availble = mysqli_real_escape_string($connection, $_POST['availble']);
        $_expirience= mysqli_real_escape_string($connection, $_POST['location']);
        $_partners = mysqli_real_escape_string($connection, $_POST['partners']);
        $_energetic = mysqli_real_escape_string($connection, $_POST['energetic']);
        $_fur = mysqli_real_escape_string($connection, $_POST['fur']);
        $_maturity = mysqli_real_escape_string($connection, $_POST['maturity']);
        $_friendly = mysqli_real_escape_string($connection, $_POST['friendly']);
        $_obidience = mysqli_real_escape_string($connection, $_POST['obidience']);
        $_danagrus= mysqli_real_escape_string($connection, $_POST['danagrus']);
        $_priority = mysqli_real_escape_string($connection, $_POST['priority']);
     

        //SET: insert new data to DB
        $query2 = "INSERT into fido_users(fullName,locationes,relationStatus,Children,HomeType,Outdoor,availabilitys,Expirience,Partners,Energetic,Fur,Maturity,Friendly,Obidience,Danagrus,Priority) values ('$_fullNAme','$_location','$_relationStat','$_children','$_homeType','$_outdoor','$_availble','$_expirience','$_partners','$_energetic','$_fur','$_maturity','$_friendly','$_obidience',$_danagrus,$_priority)";
        $result = mysqli_query($connection, $query2);
        // if(!$result) {
        //     die('DB QUERY FAILED.');
        // }
		
		
        //GET: get data again
        $query2 = "SELECT * FROM fido ";
        $result = mysqli_query($connection, $query2);
    }
    if(!$result) {
        die('DB QUERY FAILED.');
    }
    
    //GET: get data again
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){ //result are in an associative array. keys are cols names 
        echo "<li><h2>" . $row["name"] . "</h2><h6>" . $row["breed"] . "</h6></li>";
    }
    echo "</ul>";
    
    //release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
?>