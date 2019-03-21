<!-- isi data auth dan config dan show profile -->
<?php 
require_once("auth.php"); 
include_once("config.php");
$result = mysqli_query($conn,"SELECT * FROM postingan ORDER by id_posting DESC");
require_once("timeline.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesbuk Timeline</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light header fixed-top">
  <a class="navbar-brand text-white" href="#">Pacebook</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline mr-auto my-2 my-lg-0">
    <div class="search">
        <input type="text" id="inputText" placeholder="Search Facebook">
        <div class="search-icon">
            <img src="http://icons.iconarchive.com/icons/icons8/ios7/256/Very-Basic-Search-icon.png" ></img>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="timeline.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="profile.php"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container margintop">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<!-- isi session database foto -->" />
                    
                    <h3><?php $_SESSION['user']['name'] ?></h3>
                    <p><?php $_SESSION['user']['email'] ?></p>

                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="add.php" method="POST" >
                <div class="form-group">
                    <textarea  name="data" class="form-control" placeholder="Apa yang kamu pikirkan?" required></textarea>
                    <input style="width:100%" name="posting" class="btn btn-primary" type="Submit" value="bagikan">
                </div>
            </form>

           <!-- Looping dan outputkan hasil dari database yang telah di panggil -->
           <?php while($user_data=mysqli_fetch_array($result)){ ?>
            <div class="card mb-3">
                <div class="container"> 
                        <i onclick="myFunction()" class="fa fa-gear  dropdown-toggle float-right mt-3" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-toggle="modal" href="" data-target="#myModal<?php echo $baris['id_posting'] ?>">Edit</a>
                            <?php echo " <a class='dropdown-item' href='delete.php?id=$user_data[id_posting]'>Delete</a></td></tr>" ?>
                        </div>
                </div>       
                <div class="card-body">
                    <div class="mt-3 ml-3 row ">    
                        <img class="img img-responsive rounded-circle mb-3" width="50" height="50" src="img/<!-- isi session image -->" />
                        <h4 class="ml-2 card-title"><?php $_SESSION['user']['name'] ?> </h4>
                    </div>
                    <?php echo $user_data['posting']; ?>
                </div>
            </div>

                    <!-- The Modal -->
            <div class="modal" id="myModal<?php echo $baris['id_posting'] ?>">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Edit Postingan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form action="edit.php?id=<?php echo $baris['id_posting'] ?>" method="POST" >
                            <div class="form-group">
                                <textarea  name="data" class="form-control" placeholder="Apa yang kamu pikirkan?" required></textarea>
                                <input style="width:100%" name="update" class="btn btn-primary mt-3" type="Submit" value="bagikan">
                                <input type="hidden" name="id" value="<?php echo $baris['id_posting']; ?>">
                            </div>
                    </form>
                    </div>  
                </div>
                </div>
            </div>
            <!-- isi end looping  -->
            <?php } ?>  
        </div>
    
    </div>
</div>
<script src="js/main.js"></script>
</body>
</html>