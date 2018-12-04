 <!-- Ainun Abidin(1301164159)-->
<?php if ($this->session->flashdata('message')=='berhasil'){
   echo '<script type="text/javascript">
   alert("selamat data anda berhasil disimpan");
 </script>';
}?>
<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/care1/css/main.css" />
    </head>
    <body>
            <nav class="navbar navbar-default clear-mbottom navbar-fixed-top navbar-transparent">
            <div class="container-fluid" style="background-color:black">
                <div class="navbar-header">
                    <li><a class="navbar-brand froz-font" style="font-size: 2.5em" href="<?php  echo site_url('C_home/index'); ?>">Care</a></li>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav">
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_home/index'); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_home/comment'); ?>"><span class="fa fa-bookmark"></span> Support</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 50px">
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_akun/index'); ?>"><i class="fa fa-sign-in" style="color: white"></i> Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
            <center>
            <div class="container" style="margin-top: 150px;color: white;">
                <h1 style="font-size:50px;"><b>Login</b></h1>
			<div class="login">
				<form method="POST" action="<?php  echo site_url('C_akun/proses_login'); ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="email" class="form-control" placeholder="E-mail" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
                        <input type="submit" class="btn btn-primary form-control">
                    </div>
                    <a style="float:left;color:white;font-size: 15px" href="http://localhost/care1/C_akun/resetpassword">Forgot Password?</a>
                    <a style="float:right;color:white;font-size: 15px" href="<?php  echo site_url('C_akun/t_registrasi'); ?>">Registrasi</a>
				</form>
			</div>
		</div>
        </center>
         <div class="container" style="margin-top:150px">
            <div class="divisi" style="background-color: white;">
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