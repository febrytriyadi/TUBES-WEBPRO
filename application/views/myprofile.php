<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Care</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/care1/css/main.css" />
        <script src="js/main.js"></script>
    </head>
    <body>
         <nav class="navbar navbar-default navbar-transparent navbar-fixed-top atas">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2.5em; color:white" href="http://localhost/care1/C_beranda">Care</a>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda/profile"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?></a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_akun/logout"><i class="fa fa-home"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            </nav>
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
                            <li><a href="http://localhost/care1/C_beranda/">Home</a></li>
                            <li><a href="http://localhost/care1/C_beranda/searchmobil">Search a Car</a> </li>
                            <li><a href="http://localhost/care1/C_beranda/searchmotor">Search a Bike</a> </li>
                        </ul>
                    </div>
                    <div class="form-group col-sm-9">
                        <div class="container">
                            <div class="row" style="margin-top: 50px;margin-left: 50px;color:white;">
                            <form method="post">
                            <h2><strong>BIODATA DIRI</strong></h2>
                                <div class="form-group">
                                    <label for="sell" style="margin-right: 10px">Nama   : </label>
                                    <input type="text" name="nama" style="color: white; width: 50%; background:transparent; border:0px" value="<?php echo $this->session->userdata('nama') ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sell" style="margin-right: 10px">Email  : </label>
                                    <input type="text" name="email" style="color: white; width: 50%; background:transparent; border:0px" value="<?php echo $this->session->userdata('email') ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sell" style="margin-right: 5px">Phone  : </label>
                                    <input type="text" name="phone" style="color: white; width: 50%; background:transparent; border:0px" value="<?php echo $this->session->userdata('phone') ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sell">Alamat : </label>
                                    <input type="text" name="alamat" style="color: white; width: 50%; background:transparent; border:0px" value="<?php echo $this->session->userdata('alamat') ?>" disabled>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $this->session->userdata('phone'); ?>" style="width:30%">Edit Biodata <i class="glyphicon glyphicon-pencil"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        <div id="<?php echo $this->session->userdata('phone'); ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button"  class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><strong>Edit Profile</strong></h4>
                                    </div>
                                    <div class="modal-body">                                            
                                    <form method="POST" action="<?php echo base_url(); ?>C_akun/proses_update_akun">
                                            <input type="hidden" name="email" value=<?php echo "'".$this->session->userdata('email')."'"; ?>>
                                            <div class="form-group">
                                                <label for="sell" style="margin-right: 35px">Nama   : </label>
                                                <input type="text" name="nama" style="color: black; width: 50%" value="<?php echo $this->session->userdata('nama') ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="sell" style="margin-right: 30px">Phone  : </label>
                                                <input type="text" name="phone" style="color: black; width: 50%" value="<?php echo $this->session->userdata('phone') ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="sell" style="margin-right: 25px">Alamat : </label>
                                                <input type="text" name="alamat" style="color: black; width: 50%" value="<?php echo $this->session->userdata('alamat') ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="sell" style="margin-right: 5px">Password : </label>
                                                <input type="password" name="password" style="color: black; width: 50%" value="<?php echo $this->session->userdata('password') ?>">
                                            </div>
                                            <center>
                                            <div class="form-group">
                                                <input type='submit' class="btn btn-primary" style="width:200px" value='Simpan'/>
                                            </div>
                                            </center>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        <div class="container" style="margin-top: 200px">
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
            <footer>
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
        </footer>
    </body>
</html>