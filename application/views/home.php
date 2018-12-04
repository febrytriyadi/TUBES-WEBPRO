<!-- Anisa Fatikasari(1301164608)
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url("/css/main.css");?>" />
        <script src="js/main.js"></script>
    </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
        <div class="main-froz-bg">
        <!-- Navbar Home -->
        <nav class="navbar navbar-default clear-mbottom navbar-fixed-top navbar-transparent">
            <div class="container-fluid" style="background-color:black">
                <div class="navbar-header">
                    <li><a class="navbar-brand froz-font" style="font-size: 2.5em" href="#home">Care</a></li>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav">
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_home/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="froz-font borbot" href="#our_team"><i class="fa fa-address-book"></i> Our Team</a></li>
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_home/comment'); ?>"><span class="fa fa-bookmark"></span> Support</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 50px">
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_akun/index'); ?>"><i class="fa fa-sign-in" style="color: white"></i> Sign in</a>
                        </li>
                    </ul>
                    <!-- Navbar Login -->
                    <div class="nav navbar-nav" id="menu">
                    <div class="nav navbar-nav" style="margin-top:15px" id="user">
                    </div>
                    
                    </div>
                </div>
            </div>
        </nav>
            <!-- Tampilan Home -->
        <div class="jumbotron full-jumbotron clear-mbottom " style="background-color: rgba(0,0,0,.4)" id="home">
            <div class="container-fluid" style="margin-top:30%">
                <img class="photo-circle logo" src="http://localhost/care1/css/image/logocare.png" style="width: 300px;height: 100px">
                <h1 class="froz-font caree"><small class="fon" style="color: white font-size:1.5em">Rental Kendaraan Berbasis Web<br>Easy to find vehicle! </small></h1>
            </div>
        </div>
        <div style="background-color: white">
        <!-- Tampilan Our Team -->
        <div class="container" id="our_team">
            <div style="margin-top: 100px">
                <h1 class="froz-font text-center" style="margin: 50px 50px; padding-bottom: 10px">Meet the Team</h1>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img class="photo-circle" src="<?php echo base_url("/css/img/febry.png"); ?>" style="width: 170px;height: 150px">
                        <p class="froz-font" style="font-size: 1.5em">Febry Triyadi<span class="froz-font">(1301162195)</span></p>
                        <a style="text-decoration: none"><img src="http://localhost/care1/css/image/line.png" style="width: 20px;height: 20px"> febrytriyadi</a>
                        <a style="text-decoration: none"><i class="fa fa-instagram" style="font-size: 1.5em"></i> febrytriyadi98</a>
                        <br>
                        <a style="text-decoration: none"><i class="fa fa-envelope" style="font-size: 1.5em"></i> triyadifebry@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img class="photo-circle" src="http://localhost/care1/css/image/nisa.PNG" style="width: 155px;height: 150px">
                        <p class="froz-font" style="font-size: 1.5em">Anisa Fatikasari<span class="froz-font">(1301164608)</span></p>
                        <a style="text-decoration: none"><img src="http://localhost/care1/css/image/line.png" style="width: 20px;height: 20px"> anisaftksr99</a>
                        <a style="text-decoration: none"><i class="fa fa-instagram" style="font-size: 1.5em"></i> anisafatikasari</a>
                        <br>
                        <a style="text-decoration: none"><i class="fa fa-envelope" style="font-size: 1.5em"></i> fatikasari.anisa@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img class="photo-circle" src="http://localhost/care1/css/image/haikal.PNG" style="width:170px; height: 150px">
                        <p class="froz-font" style="font-size: 1.5em">Ainun Abidin<span class="froz-font">(1301164159)</span></p>
                        <a style="text-decoration: none"><img src="http://localhost/care1/css/image/line.png" style="width: 20px;height: 20px"> haikaldblendo</a>
                        <a style="text-decoration: none"><i class="fa fa-instagram" style="font-size: 1.5em"></i> haikaldblendo</a>
                        <br>
                        <a style="text-decoration: none"><i class="fa fa-envelope" style="font-size: 1.5em"></i> haikal.ainun@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img class="photo-circle" src="http://localhost/care1/css/image/anis.PNG" style="width: 155px; height: 150px">
                        <p class="froz-font" style="font-size: 1.5em">Nisrina Nurhuda<span class="froz-font">(1301164268)</span></p>
                        <a style="text-decoration: none"><img src="http://localhost/care1/css/image/line.png" style="width: 20px;height: 20px"> anis2604</a>
                        <a style="text-decoration: none"><i class="fa fa-instagram" style="font-size: 1.5em"></i> nisrinanurhuda</a>
                        <br>
                        <a style="text-decoration: none"><i class="fa fa-envelope" style="font-size: 1.5em"></i> nisrinanurhuda26@gmail.com</a>
                    </div>
                </div>
            </div>
            </div>
            <!-- Costumer Service -->
            <div class="container">
                <div class="divisi">
                    <h2>Costumer Service</h2>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <center>
                            <a>Contact Person <span class="fa fa-phone-square" style="font-size: 1.5em"></span> (+62)81210455957</a>
                        </center>
                    </div>
                    <div class="col-md-6">
                        <center>
                            <a>Email <span class="fa fa-envelope" style="font-size: 1.5em"></span> care@gmail.com</a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="footer1" style="color: white;">
                <div class="container-fluid">
                    <table>
                        <tr>
                            <td>
                                <h2 style="padding-left: 10px">Support By: </h2>
                            </td>
                            <td style="padding-left: 10px"><img src="http://localhost/care1/css/image/283px-Telkom_University_Logo.svg.png" style="width: 50px;height: 50px"></td>
                            <td style="padding-left: 10px"><img src="http://localhost/care1/css/image/hima.png" style="width: 50px;height: 50px"></td>
                        </tr>    
                    </table>
                    <br>
                    <div class="row text-center" style="padding-bottom: 20px">
                        <h1 style="font-size: 10pt">Copyright &copy; 2018 - All right reserved. Design by <h1 style="color: deeppink; font-size: 12pt">Group 4</h1><i class="fa fa-heart" style="color: deeppink"></i></h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>