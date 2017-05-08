<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <title>RosTorv</title>

        <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
   <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <p>hej</p>
            </div>
            <div class="col-lg-6">
                <h1>Login</h1>
            </div>  
            </div>
        <div class="col-lg-3">
            <div class="container-fluid top-nav text-right"><a href="#" class="text-uppercase" data-toggle="modal" data-target="#login-modal">Login</a></div>
        </div>
    </div>


<div id="login-modal" class="modal" role="dialog">
    <div class="modal-dialog margin-auto">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center text-uppercase">Login to Your Account</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn-primary" value="Login">
                    </div>
                </form>
                <p><a class="small modal-links" href="#" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Register</a><a class="small modal-links" href="#" data-dismiss="modal" data-toggle="modal" data-target="#forget-modal">Forget Password</a></p>
            </div>
        </div>
    </div>
</div>
</head>
<body>
<!--             <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
                <h1>Login to Your Account</h1><br>
                <form>
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                </form>
                    
            <div class="login-help">
                    <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
</div>
 -->
</body>


        <!-- Styles -->
        <style>
a{color:#000;}
a:hover, a:focus, a:active{color:#000; text-decoration:none;}
.margin-auto{margin:10px auto;}
.top-nav{padding:10px 0; background:#ccc;}
.top-nav a{margin-right:10px; color:#999;}
.top-nav a:hover{color:#000; text-decoration:underline;}
.modal-dialog{max-width:340px;}
.modal-content{box-shadow:3px 3px 6px #757272; background:#f7f7f7; border-radius:0px;}
.modal-body h2{font-size:18px; margin-top:35px; margin-bottom:20px;}
.form-control{border-radius:0px;}
.modal-links{ color:#999; margin-right:10px;}
</style>
</html>