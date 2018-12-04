 <!-- Ainun Abidin(1301164159)-->
<!DOCTYPE html>
<html id="lang">
    <head>
        <title>Reset Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://localhost/care1/css/main.css" />
        <script>
            function hello()
            {
                alert('Verification your E-mail.');
                with(window)
                    {
                        location('http://localhost/care1/C_akun');
                    }
            }
        </script>
    </head>
    <body>
            <nav class="navbar navbar-default navbar-transparent navbar-fixed-top atas">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2.5em; color:white" href="http://localhost/care1/C_home/">Care</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav">
                        <li><a class="froz-font borbot" href="http://localhost/care1/C_home/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_home/comment'); ?>"><span class="fa fa-bookmark"></span> Support</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 50px">
                        <li><a class="froz-font borbot" href="<?php  echo site_url('C_akun/index'); ?>"><i class="fa fa-sign-in" style="color: white"></i> Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>
        <div class="container" style="margin-top:50px;color:white;">
            <h1 style="margin-left:15px">Reset Password</h1>
            <h4 style="margin-left:15px">We can help you reset your password using your email address linked to your account.</h4>
            <div class="col-md-4">
                    <label class="text-left" style="padding-top: 10px">
                    E-mail</label><input type="text" class="form-control" placeholder="E-mail" required>
                    <br>
                    <a class="btn btn-success btn-block save" onclick="hello()" href="http://localhost/care1/C_akun/">Reset Password</a>
                </div>
        <div class="col-md-6" style="margin-left:50px; margin-top:35px; margin-right: 50px"> 
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
                                    <img src="http://localhost/care1/css/image/love.jpg" alt="" /> 
                                </div>                                 
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/gg.jpg" alt="" /> 
                                    <!--<div class="carousel-caption"> 
                                        <h3>Slide 2 title</h3> 
                                        <p>Slide 2 description.</p> 
                                    </div>-->                                     
                                </div>                                 
                                <div class="item"> 
                                    <img src="http://localhost/care1/css/image/do.png"> 
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
        <div class="container" style="margin-top: 10px;">
                <div class="divisi" style="background-color:white;">
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