
<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url("css/main.css"); ?>" />
    </head>
    <body>
        <!-- Navbar -->
         <nav class="navbar navbar-default clear-mbottom navbar-transparent navbar-fixed-top atas">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2.5em; color: white" href="http://localhost/care1/C_beranda">Care</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav">
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda/pilihmobil"><i class="fa fa-car"></i> Car</a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda/pilihmotor"><i class="fa fa-motorcycle"></i> Bike</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="background-color: black">
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_akun/myprofile"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?></a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_akun/logout"><i class="fa fa-home"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            </nav>
        <!-- Tampilan Samping Menu -->
        <div class="row jarak">
                    <div class="col-sm-3 sidenav">
                        <div class="row">
                                <img style="width: 100px;height: 100px;float: left; margin-left: 20px; margin-top: 10px" src="http://localhost/care1/css/image/man-user.png">
                            <div class="col-sm-7">
                                <h4 style="padding-top: 10px">Welcome to Care site. Thank you for using our site, Have a great day!</h4>
                            </div>
                        </div>
                        <h4 style="padding-left: 15px;padding-top: 10px; font-size: 25px;">Menu</h4>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="http://localhost/care1/C_beranda">Home</a></li>
                            <li><a href="http://localhost/care1/C_beranda/searchmobil">Search a Car</a> </li>
                            <li><a href="http://localhost/care1/C_beranda/searchmotor">Search a Bike</a> </li>
                        </ul>
                    </div>
            <!-- Tampilan Gambar -->
                    <div class="form-group col-sm-9">
                        <div class="col-md-8">
                        <div id="carousel1" class="carousel slide" data-ride="carousel" style="margin-bottom:100px"> 
                            <ol class="carousel-indicators"> 
                                <li data-target="#carousel1" data-slide-to="0" class="active"></li>                                 
                                <li data-target="#carousel1" data-slide-to="1"></li>                                 
                                <li data-target="#carousel1" data-slide-to="2"></li>  
                                
                                <li data-target="#carousel1" data-slide-to="3"></li> 
                                
                                <li data-target="#carousel1" data-slide-to="4"></li> 
                                
                                <li data-target="#carousel1" data-slide-to="5"></li> 
                                
                            </ol>                              
                            <div class="carousel-inner"> 
                                <div class="item active"> 
                                    <img src="http://localhost/care1/css/image/biru.png" style="width: 100%;height: 100%" alt="" /> 
                                    <div class="carousel-caption"> 
                                        <h3>Avanza</h3> 
                                        <p>Transmisi Manual, G5, 2018</p> 
                                    </div>
                                </div>                                 
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/kuning.png" style="width: 100%;height: 100%" alt="" /> 
                                    <div class="carousel-caption"> 
                                        <h3>Jazz</h3> 
                                        <p>Transmisi Manual, G5, 2017</p> 
                                    </div>                                  
                                </div>                                 
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/merah.png" style="width: 100%;height: 100%" alt=""> 
                                    <div class="carousel-caption"> 
                                        <h3>Brio</h3> 
                                        <p>Transmisi Manual, G5, 2011</p> 
                                    </div>                                     
                                </div>    
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/motor1.png" style="width: 100%;height: 100%" alt=""> 
                                    <div class="carousel-caption"> 
                                        <h3>Vario</h3> 
                                        <p>Transmisi Matic, 125cc, 2014</p> 
                                    </div>                                     
                                </div>  
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/lambo.jpg" style="width: 100%;height: 100%" alt=""> 
                                    <div class="carousel-caption"> 
                                        <h3>Lamborghini</h3> 
                                        <p>Transmisi Manual, 225cc, 2015</p> 
                                    </div>                                     
                                </div> 
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/vario.png" style="width: 100%;height: 100%" alt=""> 
                                    <div class="carousel-caption"> 
                                        <h3>Vario</h3> 
                                        <p>Transmisi Matic, 150cc, 2015</p> 
                                    </div>                                     
                                </div> 
                            </div>   
                            
                            <!-- Controls -->                             
                            <a class="left carousel-control" href="#carousel1" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> 
                            <a class="right carousel-control" href="#carousel1" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
                        </div>
                        </div>
                        
                    <?php
                        foreach($data as $key):
                          
                    ?>
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <img src=<?php echo "'http://localhost/care1/css/image/".$key->lokasi.".jpg'"?> style="width: 170px;height: 150px">
                            <p class="froz-font" style="font-size: 1.5em"><?php echo $key->nama; ?></p>
                            <a href="order.php" style="color:blue">Rp. <?php echo number_format($key->harga,0); ?></a>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                     <?php
                        foreach($isi as $key):  
                    ?>
                    <div class="col-md-3 text-center">
                        <div class="card">
                            <img src=<?php echo "'http://localhost/care1/css/image/".$key->lokasi.".jpg'"?> style="width: 170px;height: 150px">
                            <p class="froz-font" style="font-size: 1.5em"><?php echo $key->nama; ?></p>
                            <a href="order.php" style="color:blue">Rp. <?php echo number_format($key->harga,0); ?></a>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
            </div>
        </div>
        <!-- Costumer Service -->
        <div class="container" style="margin-top: 30px">
                <div class="divisi" style="background-color:white">
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
            </div>
        <div class="footer" style="color: white;">
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
    </body>
</html>