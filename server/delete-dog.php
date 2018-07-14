<?php
 include('db.php');
 echo "<h2> yessss </h2>";
 if(isset($_POST['dogName'])){
    //escape variables for security
    $dogName = mysqli_real_escape_string($connection, $_POST['dogName']);
    $dogId = mysqli_real_escape_string($connection, $_POST['dogId']);
    //SET: insert new data to DB
    $query2 = "DELETE FROM fido WHERE dogID=$dogId";
    $result = mysqli_query($connection, $query2);
    if(!$result) {
        die('DB QUERY FAILED.');
    }
    else{
      
        echo "<h2> yessss <h2>";
    }

    //GET: get data again
    $query2 = "SELECT * FROM tbl_test order by title desc";
    $result = mysqli_query($connection, $query2);
}
    //release returned data
    mysqli_free_result($result);

    //close DB connection
    mysqli_close($connection);

 ?>