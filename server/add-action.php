<?php
include('db.php');
echo "welcome";
if(isset($_POST['name'])){
        //escape variables for security
        $name = mysqli_real_escape_string($connection, $_POST['name']);
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
        $query2 = "INSERT into fido(srcUrl,dogID,dogName,breed,ownTo,gender,age,size,wheight,color,fur,loyality,friendly,energetic,obidience) values ('images/dog2.jpg',7,'$name','$breed','gili','$Gender','$age','$size','$weight','$color','$fur','$loyality','$friendly','$energetic','$obidience')";
        $result = mysqli_query($connection, $query2);
        if(!$result) {
            die('DB QUERY FAILED.');
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