<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Care</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/care1/css/main.css" />
        <style>
td, th {
    text-align: left;
    padding: 10px;
}

</style>
    </head>
    <body style="background-color: lightgrey">
         <nav class="navbar navbar-default navbar-transparent atas">
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
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda/profile"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_beranda"><i class="fa fa-home"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            </nav>
            <div class="row">
                    <!--<div class="col-sm-3 sidenav">
                        <div class="row">
                                <img style="width: 100px;height: 100px;float: left; margin-left: 20px; margin-top: 10px" src="css/image/man-user.png">
                            <div class="col-sm-7" style="padding-right: 0px;">
                                <h4 style="padding-top: 10px;">Welcome to Care site. Thank you for using our site, Have a great day!</h4>
                            </div>
                       </div>
                        <h4 style="padding-left: 15px;padding-top: 10px; font-size: 25px;">Menu</h4>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="beranda.html">Beranda</a></li>
                            <li class="active"><a href="searchmobil.html">MOBIL</a> </li>
                            <li><a href="searchmotor.html">MOTOR</a> </li>
                        </ul>
                    </div>-->
                    <div class="container center">
                        <div class="col-md-11" style="margin-left: 5px;background-color: #B0C4DE; ">
                            <div class="row" style="padding-bottom: 5px; padding-left: 5px;background-color: #778899; border-radius:2px;background-color:white; "><h2>Orders</h2></div>
                            <div align="center"><h1><img src="http://localhost/care1/css/image/logo.png" width="150px">Form Costumer</h1></div>
                            <div class="row" style="background-color: #dddddd; margin-left: 100px; margin-right: 100px; margin-bottom: 40px; ">
                            <form method="POST" action="<?php echo base_url()?>C_beranda/proses_pesanan">
                                <table align="center" style="margin-bottom: 40px; ">
                                    <input type="hidden" name="proses" value="On proses">
                                    <tr>
                                        <th>Data Diri</th>
                                    </tr>
                                    <tr>
                                        <td>Nama </td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_penerima" size="39%" /></td>
                                    </tr>
                                    <tr>
                                        <td>No identitas/KTP/KTM</td>
                                        <td>:</td>
                                        <td><input type="text" name="no_identitas" size="39%" /></td>
                                    </tr>
                                    <tr>
                                        <td>No telp</td>
                                        <td>:</td>
                                        <td><input type="text" name="nomor_telepon" size="40%" /></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat pesan COD</td>
                                        <td>:</td>
                                        <td><textarea rows="5" name="alamat" cols="40%"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Data penyewaan</th>
                                    </tr>
                                    <tr>
                                        <td>Kendaraan</td>
                                        <td>:</td>
                                        <td><input type="text" name="Kendaraan" disabled="yes" value="<?php echo $key->nama; ?>" size="40%"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Penyewaan</td>
                                        <td>:</td>
                                        <td><input type="date" class="form-control" name="tanggal_pemesanan"></td>
                                    </tr>
                                    <tr>
                                        <td>lama Penyewaan</td>
                                        <td>:</td>
                                        <td>
                                            <select class="form-control" name="lama_penyewaan" id="sel1">
                                            <option>---Pilih---</option>
                                            <option>12 jam</option>
                                            <option>1 Hari</option>
                                            <option>2 Hari</option>
                                            <option>3 Hari</option>
                                            <option>4 Hari</option>
                                            <option>5 Hari</option>
                                            <option>6 Hari</option>
                                            <option>7 Hari</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jam penyewaan</td>
                                        <td>:</td>
                                        <td><input type="time" name="jam_penyewaan" size="40%"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center; " >
                                            <button class="btn btn-danger btnsubmit" value="Submit">Cancel</button>
                                            <button class="btn btn-primary btnsubmit" value="Submit">Submit</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container">
                <div class="divisi" style="background-color: white">
                    <h2>Costumer Service</h2>
                    <div class="col-md-12">
                        <a>Contact Person <span class="fa fa-phone-square"style="font-size: 1.5em"></span> (+62)81210455957</a>
                        <a class="email">Email <span class="fa fa-envelope"style="font-size: 1.5em"></span> care@gmail.com</a>
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