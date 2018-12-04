<?php
    include_once("koneksi.php")
?>

<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css" />
        <!--<script>
            function hello()
            {
                alert('Verification your E-mail.');
                with(window)
                    {
                        location('main3.html');
                    }
            }
        </script>-->
    </head>
    <body>
            <nav class="navbar navbar-default atas navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2.5em;" href="home.html">Care</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav">
                        <li><a class="froz-font borbot" href="home.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="froz-font borbot" href="#our_team"><i class="fa fa-address-book"></i> Our Team</a></li>
                        <li><a class="froz-font borbot" href="support.php"><span class="fa fa-bookmark"></span> Support</a></li>
                    </ul>
                    <!-- Navbar Login -->
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 50px">
                        <li><a class="froz-font borbot" href="login.php"><i class="fa fa-sign-in" style="color: white"></i> Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        <div class="container" style="margin-top:50px">
            <h1 style="margin-left:15px">Registrasi</h1>
            <!--<h4 style="margin-left:15px">We can help you reset your password using your email address linked to your account.</h4>-->
            <div class="col-md-4 form-group">
                <table>
                    <form method="POST" action="proses_regis.php">
                        <?php
			                 $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			                 $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap']:false;
			                 $email = isset($_GET['email']) ? $_GET['email'] : false;
			                 $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
                             $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
                             $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
			
			                 if($notif == "require"){
				                echo "<div class='notif'>Maaf, kamu harus melengkapi form dibawah ini</div>";
			                 }else if($notif == "password"){
				                echo "<div class='notif'>Maaf, password yang kamu masukan tidak sama</div>";
			                 }else if($notif == "email"){
				                echo "<div class='notif'>Maaf, email yang kamu masukan sudah terdaftar</div>";
			                 }
                        ?>
                    <label class="text-left">Nama Pengguna</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" value="<?php echo $nama_lengkap ?>">
                    <label class="text-left">E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo $email ?>">
                    <label class="text-left">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="phone" value="<?php echo $phone ?>">
                    <label class="text-left">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
                    <label class="text-left">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    <label class="text-left">Re-type Password</label>
                        <input type="password" class="form-control" placeholder="Re-type Password">
                    <div style="padding-top: 10px">
                        <input type="submit" value="register">
                    </div>
                    </form>
                </table>
            </div>
        <div class="col-md-6" style="margin-left:150px; margin-top:50px"> 
                        <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                            <!-- Indicators -->                             
                            <ol class="carousel-indicators"> 
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                 
                                <li data-target="#carousel1" data-slide-to="1"></li>                                 
                                <li data-target="#carousel1" data-slide-to="2"></li>                                 
                            </ol>                             
                            <!-- Wrapper for slides -->                             
                            <div class="carousel-inner"> 
                                <div class="item active"> 
                                    <img src="css/image/Untitled-1.jpg" alt="" /> 
                                </div>                                 
                                <div class="item"> 
                                    <img src="css/image/333.jpg" alt="" /> 
                                    <!--<div class="carousel-caption"> 
                                        <h3>Slide 2 title</h3> 
                                        <p>Slide 2 description.</p> 
                                    </div>-->                                     
                                </div>                                 
                                <div class="item"> 
                                    <img src="css/image/Plain-Black-HD-Desktop-Backgrounds.jpg" alt="" /> 
                                    <!--<div class="carousel-caption"> 
                                        <h3>Slide 3 title</h3> 
                                        <p>Slide 3 description.</p> 
                                    </div>-->                                     
                                </div>                                 
                            </div>                             
                            <!-- Controls -->                             
                            <a class="left carousel-control" href="#carousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> 
                            <a class="right carousel-control" href="#carousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
                        </div>
                    </div>
        </div>
        <div class="container" style="margin-top: 10px">
                <div class="divisi">
                    <h2>Costumer Service</h2>
                <div class="col-md-12">
                <a>Contact Person <span class="fa fa-phone-square"style="font-size: 1.5em"></span> (+62)81210455957</a>
                <a class="email">Email <span class="far fa-envelope"style="font-size: 1.5em"></span> triyadifebry@gmail.com</a>
                </div>
            </div>
            </div>
        <div class="footer" style="color: white;">
                <div class="container-fluid">
                    <br>
                    <h2 style="padding-left: 10px">Support By: </h2>
                    <br>
                    <div class="row">
                        <div class="row text-center">
                        <h1 style="font-size: 10pt">Made a Love <i class="fas fa-heart" style="color: deeppink"></i></h1>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Care</h1>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
    </body>