 <!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container  text-center" id="login-box">

<div class="container">

<div class="col-md-12 col-lg-offset-2">

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="row">

            <div class="col-md-8 mobile-pull">
              <article role="login">
                <h3 class="text-center"><i class="fa fa-lock"></i>Ro's Torv</h3>
        
                <form role="form" action="" method="post" name="loginform">
        <fieldset>
          <legend>Login</legend>
          
          <div class="col-lg-2 col-lg-offset-2">
          <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="username" placeholder="Your Username" required class="form-control" />
          </div>

          <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" placeholder="Your Password" required class="form-control" />
          </div>

          <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-primary" onclick="window.location='{{ url("/forside") }}'" />
          </div>
          </div>
        </fieldset>
      </form>

              </article>
            </div>
          </div>
          <!-- end of row -->
        </div>
        <!-- end of home -->

</body>

<style type="text/css">
  
.login-signup {
  padding: 25 0 25px;
  margin-top:25px;

}
#login-box {
  top: 20%;

}
.login-signup {
  padding: 0 0 25px;
}

.btn-primary {
  width: 350px;
  height: 100%;
  margin: auto;
  text-align:center;
  }

.form-control {
  width: 350px;
  height: 100%;
}
.box-center {
  margin: auto;
  text-align: 
}
.btn-success {
  background: #23bab5;
  border-radius:0;
  border: 2px solid #23bab5;
  webkit-transition: all 400ms cubic-bezier(.4,0,.2,1);
  transition: all 400ms cubic-bezier(.4,0,.2,1);
}


a {
  color: #23bab5;
}

ul {
  list-style-type: none;
}

article[role="login"] {
  background: #fff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 10px rgba(0, 0, 0, 0.24);
  webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
  transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
  padding: 30px 50px;
  margin-bottom: 20px;
}

article[role="login"] input[type="submit"] {
  padding: 10px 15px;
  font-size: 16px;
}

article[role="login"]:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
  -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 1px 15px rgba(0, 0, 0, 0.23);
  webkit-transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
  transition: all 400ms cubic-bezier(0.4, 0, 0.2, 1);
}

article[role="login"] h3 {
  font-size: 26px;
  font-weight: 300;
  color: #23bab5;
  margin-bottom: 20px;
}

article[role="login"] p {
  font-size: 16px;
  padding: 5px 15px;
}

.nav-tab-holder {
  padding: 0 0 0 30px;
  float: right;
}
  .nav-tab-holder {
    float: none;
    overflow: hidden;
  }

  .nav-tabs > li > a {
    font-size: 13px;
    font-weight: 600;
    padding: 10px 5px;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .nav-tabs > li {
    width: 50%;
  }

.nav-tab-holder .nav-tabs {
  border: 0;
  float: none;
  display: table;
  table-layout: fixed;
  width: 100%;
  
}


.nav-tab-holder 
.nav-tabs > li > a {
  background: #d9d9d9;
  color: #6c6c6c;
  margin: 0;
  font-size: 18px;
  font-weight: 300;
}

.nav-tab-holder .nav-tabs > li {
  margin-bottom: -3px;
  text-align: center;
  padding: 0;
  display: table-cell;
  float: none;
  padding: 0;
}



.nav-tab-holder .nav-tabs > li.active > a, 
.nav-tabs > li.active > a:hover, 
.nav-tabs > li.active > a:focus {
  color: #FFF;
  background-color: #23bab5;
  border: 0;
  border-radius: 0;
}

</style>
</html>
<!-- http://bootsnipp.com/snippets/BaypD -->