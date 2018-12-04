<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Care</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/care1/css/main.css" />
    </head>
    <body style="background-color: lightgrey">
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
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_akun/myprofile"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?></a></li>
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_akun/Logout"><i class="fa fa-home"></i> Logout</a></li>
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
                        <h4 style="padding-left: 15px; font-size: 30px;">Menu</h4>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="http://localhost/care1/C_beranda">Home</a></li>
                            <li><a href="http://localhost/care1/C_beranda/searchmobil">Search a Car</a> </li>
                            <li><a href="http://localhost/care1/C_beranda/searchmotor">Search a Bike</a> </li>
                        </ul>
                    </div>
                    <div class="form-group col-sm-9">
                        <div class="container">
                            <div class="row" style="padding-top: 10px;">
                                <?php
                                    foreach($data as $key): 
                                ?>
                            <div class="row">
                                <div class="col-md-7" style="margin-top: 10px;background-color: white; border-radius: 5px">
                                    <div class="col-md-4">
                                        <img src=<?php echo "'http://localhost/care1/css/image/".$key->lokasi.".jpg'"?> style="float: left; padding: 10px 10px 10px; width: 200px;height: 180px">
                                    </div>
                                    <div class="col-md-5" style="padding-top: 10px">
                                        <table width="200">
                                            <tr>
                                                <td><?php echo $key->nama ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tipe</td>
                                                <td>:</td>
                                                <td><?php echo $key->tipe ?></td>
                                            </tr>
                                            <tr>
                                                <td>Transmisi</td>
                                                <td>:</td>
                                                <td><?php echo $key->transmisi ?></td>
                                            </tr>
                                            <tr>
                                                <td>12 jam</td>
                                                <td></td>
                                                <td style="color: orange">Rp. <?php $pajak=$key->harga*0.1; $harga=$key->harga/2+$pajak; echo number_format($harga,0); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Full Day</td>
                                                <td></td>
                                                <td style="color: orange">Rp. <?php echo number_format($key->harga,0); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Stock</td>
                                                <td>:</td>
                                                <td><?php echo $key->stock ?></td>
                                            </tr>
                                        </table>     
                                    </div>
                                    <div class="col-md-3" style="padding-top: 50px">
                                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#order<?php echo $key->id_motor; ?>" style="background-color: orange;color: white;">Order</button>
                                        <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#myModal" style="background-color: orange;color: white;" href="spek.php">Specification</button>
                                    </div>
                                </div>     
                            </div>
                            <div id="order<?php echo $key->id_motor; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><strong>Order</strong></h4>
                                        </div>
                                        <div class="modal-body">                                            
                                        <form method="POST" action="<?php echo base_url(); ?>C_transaksi/proses_pesanan">
                                                <input type="hidden" name="id_motor" value=<?php echo "'".$key->id_motor."'"; ?>>
                                                <input type="hidden" name="proses" value="On proses">
                                                <input type="hidden" name="id_kendaraan" value="<?php echo $key->id_motor; ?>">
                                                <input type="hidden" name="nama_kendaraan" value="<?php echo $key->nama; ?>">
                                                <table>
                                                    <tr>
                                                        <td>Nama </td>
                                                        <td> : </td>
                                                        <td><input type="text" style="border-radius: 10px; width: 100%;" name="nama_penerima" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Identitas/KTP/KTM </td>
                                                        <td>:</td>
                                                        <td><input type="text" style="border-radius: 10px; width: 100%;" name="no_identitas" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nomor Telepon </td>
                                                        <td>:</td>
                                                        <td><input type="text" style="border-radius: 10px; width: 100%;" name="nomor_telepon" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Data penyewaan</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kendaraan</td>
                                                        <td>:</td>
                                                        <td><input type="text" name="nama_kendaraan" disabled="yes" value="<?php echo $key->nama; ?>" size="40%"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Pemesanan</td>
                                                        <td>:</td>
                                                        <td><input type="date" name="tanggal_pemesanan" style="border-radius: 10px; width: 100%;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lama Penyewaan </td>
                                                        <td>:</td>
                                                        <td>
                                                            <select class="form-control" name="lama_penyewaan" id="sel1" required>
                                                                <option value="">- - - Pilih - - -</option>
                                                                <option value="12 jam">12 jam</option>
                                                                <option value="1 hari">1 Hari</option>
                                                                <option value="2 hari">2 Hari</option>
                                                                <option value="3 hari">3 Hari</option>
                                                                <option value="4 hari">4 Hari</option>
                                                                <option value="5 hari">5 Hari</option>
                                                                <option value="6 hari">6 Hari</option>
                                                                <option value="7 hari">7 Hari</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat </td>
                                                        <td>:</td>
                                                        <td><textarea name="alamat" style="color:black; border-radius: 10px; width:50%; height:100px" required></textarea></td>
                                                    </tr>
                                                </table>
                                                <center>
                                                    <input type='reset' class="btn btn-danger" style="width:200px" value='Batal'/>
                                                    <input type='submit' class="btn btn-primary" style="width:200px" value='Simpan'/>
                                                </center>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><strong>Specification</strong></h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php echo $key->spek; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endforeach;    
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
        <div class="container">
                <div class="divisi" style="background-color: white">
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