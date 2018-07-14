<?php
include('db.php');
echo "welcome";
if(isset($_POST['name'])){
        //escape variables for security
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $id = mysqli_real_escape_string($connection, $_POST['id']);
        $age = mysqli_real_escape_string($connection, $_POST['age']);
        $breed = mysqli_real_escape_string($connection, $_POST['breed']);
        $Gender = mysqli_real_escape_string($connection, $_POST['Gender']);
        $size = mysqli_real_escape_string($connection, $_POST['size']);
        $weight = mysqli_real_escape_string($connection, $_POST['weight']);
        $color = mysqli_real_escape_string($connection, $_POST['color']);
        $fur = mysqli_real_escape_string($connection, $_POST['fur']);
        $loyality = mysqli_real_escape_string($connection, $_POST['loyality']);
        $friendly = mysqli_real_escape_string($connection, $_POST['friendly']);
        $energetic = mysqli_real_escape_string($connection, $_POST['energetic']);
        $obidience = mysqli_real_escape_string($connection, $_POST['obidience']);
        //SET: insert new data to DB
        $query2 = "UPDATE fido SET dogName='$name',breed='$breed',size='$size' WHERE dogID='$id'" ;
        $result = mysqli_query($connection, $query2);
        if(!$result) {
            die('Error');
        }
        else{
            echo "yes";
        }
    }

    
    //release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);
?>