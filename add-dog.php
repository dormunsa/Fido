
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
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img id="message" src="images/messageBox.jpeg"></button>
                  </form>
                </div>
              </nav>
              <aside id="sideNav">
              <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link sides" id="selectedNav" href="add-dog.php">Add Dog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link sides" id="side1" href="#">Delete Dog</a>
         </li>
         <li class="nav-item">
            <a class="nav-link sides" id="side3" href="#">Edit Dog</a>
         </li>
    
    </ul>
            </aside>
            <main>
            <form id="addDogForm" class="form-inline container" action="" method="post">
            <h4 id="peronalDeta"> Personl Details </h4>
              <section class="container Details" id="personDet">
                <article class="row"></article>
                <article class="row"></article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Name</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <input type="text" class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs" id="Name">
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Age</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <input type="number" class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs" id="age">
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Breed</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <input type="text" class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs" id="breed">
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Gender</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="Gender">
                            <option selected value="Single">Male</option>
                            <option value="Married">Female</option>
                        </select>
                    </article>
                    <article class="row"></article>
                <article class="row"></article>
              </section>

                <h4 id="appearence"> Apperance </h4>
              <section class="container Details" id="prefence">
                <article class="row"></article>
                <article class="row"></article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Size</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="size">
                            <option selected value="Large">Large</option>
                            <option value="Medium">Medium</option>
                            <option value="Small">Small</option>
                        </select>
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Weight</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <input type="number" class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs" id="weight" placeholder="0.lb">
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Color</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="color">
                            <option selected value="Brown And White">Brown And White</option>
                            <option value="Black And White">Black And White</option>
                            <option value="Black">Black</option>
                        </select>
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Fur</p>
                        <div class"offset-xl-2 offset-md-2"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="fur">
                            <option selected value="Short">Short</option>
                            <option value="Long">Long</option>
                            <option value="Medium">Medium</option>
                        </select>
                    </article>
                    <article class="row"></article>
                <article class="row"></article>
              </section>
              
              <h4 id="chara"> Characteristic </h4>
              <section class="container Details" id="habit">
                <article class="row"></article>
                <article class="row"></article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Loyality</p>
                        <div class="offset-xl-1 offset-md-1"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="loyality">
                            <option selected value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </article>
                    <article class="row">
                    <p class="formLabeles col-xl-3 col-md-3">Friendly</p>
                        <div class="offset-xl-1 offset-md-1"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="friendly">
                            <option selected value="Yes">Yes</option>
                            <option value="No">No</option>
                      </select>
                    </article>
                    <article class="row">
                        <p class="formLabeles col-xl-3 col-md-3">Energetic</p>
                        <div class="offset-xl-1 offset-md-1"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="energetic">
                            <option selected value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                        </select>
                    </article>
                    <article class="row">
                    
                    <p class="formLabeles col-xl-3 col-md-3">Obidience</p>
                        <div class="offset-xl-1 offset-md-1"></div>
                        <select class="col-xl-7 col-md-7 form-control-xl form-control-sm inputs"  placeholder="Location:" id="obidience">
                          <option selected value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                        </select>
                    </article>
                    <article class="row"></article>
                   <article class="row"></article>
              </section>

                  <button type="submit" class="button">Save</button>
            
        </form>
        <section class="container Details" id="feedBack">
                <article class="row"></article>
                <article class="row"></article>
                    <article class="row">
                        <p id="sucss" class="formLabeles col-xl-12 col-md-12">Added Succssed</p>
                
                    </article>
                    <article class="row">
                    <div class="offset-xl-4 offset-md-4"></div>
                    <img id="checked" src="images/checked1.png" class="formLabeles col-xl-4 col-md-4">
                        <div class="offset-xl-4 offset-md-4"></div>
                    </article>
                    <article class="row">
                        <p id="added" class="formLabeles col-xl-12 col-md-12">Your Dog Has Been Add To The Sysytem</p>
                    </article>
                    <article class="row">
                    <div class="offset-xl-5 offset-md-3"></div>
                    <a href="giliDogList.php"><button type="submit" id="button1" class="col-md-6 col-xl-6">Back To My Dogs</button></a>
                    <div class="offset-xl-5 offset-md-3"></div>
                    </article>
                    
                    <article class="row"></article>
                   <article class="row"></article>
              </section>
                
    </main>
    <script src="includes/js/jquery-3.1.1.min.js" async></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="includes/js/add-dog.js" async></script>
</body>
</html>