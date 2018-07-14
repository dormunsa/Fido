<?php
 include('server/db.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title> Gili_Dog_list </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="includes/css/style3.css">
  <meta charset="UTF-8">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img id="logo" src="images/fido_logo.jpeg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="#">MY DOGS</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">FIND ADOPTER</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">MATCHES</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">APPROVE</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">ADOPTED</a>
                    </li>

                    </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img id="logo" src="images/messageBox.jpeg"></button>
                  </form>
                </div>
              </nav>
              <aside id="sideNav">
              <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link sides" id="side2" href="add-dog.php">Add Dog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link sides" id="side1" href="#">Delete Dog</a>
         </li>
         <li class="nav-item">
            <a class="nav-link sides" id="side3" href="#">Edit Dog</a>
         </li>
    
    </ul>
            </aside>
            <main class="container" id="dogsContainer">
                <section class="row">
                    <?php
                    $query2 = "SELECT * FROM fido ";
                    $result = mysqli_query($connection, $query2);
                
                if(!$result) {
                    die('DB QUERY FAILED.');
                }
                
                //GET: get data again
                
                while($row = mysqli_fetch_assoc($result)){ //result are in an associative array. keys are cols names 
                    echo "<article class='col-xl-3 col-md-4 dogsPic' id='dogsCont" .$row["dogID"]. "'>'";
                    echo "<img class='picture' src=" .$row['srcUrl']. " id='dog" .$row["dogID"]. "'>'";
                    echo "<i class='fa fa-times-circle-o delete' aria-hidden='true' id='deleteDog" .$row["dogID"]. "'></i>'";
                    echo "<i class='fa fa-pencil edit' aria-hidden='true' id='editDog" .$row["dogID"]. "'></i>'";
                    echo "<h6 class='dogName' id=dogName" .$row["dogID"]. ">" .$row["dogName"]. "</h6>" ;
                    echo "</article>";
              
                }
                
                
                    ?>


                </section>
                <section class="container Details" id="deleted">
                <article class="row"></article>
                <article class="row"></article>
                    <article class="row">
                        <p id="sucss" class="formLabeles col-xl-12 col-md-12">Delete Succssed</p>
                
                    </article>
                    <article class="row">
                    <div class="offset-xl-4 offset-md-4"></div>
                    <img id="checked" src="images/delete.png" class="formLabeles col-xl-4 col-md-4">
                        <div class="offset-xl-4 offset-md-4"></div>
                    </article>
                    <article class="row">
                        <p id="added" class="formLabeles col-xl-12 col-md-12">Your Dog Has Been Deleted From The Sysytem</p>
                    </article>
                    
                    <article class="row"></article>
                   <article class="row"></article>
              </section>
            </main>
    <script src="includes/js/jquery-3.1.1.min.js" async></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="includes/js/gili-dog-list.js" async></script>
</body>
</html>