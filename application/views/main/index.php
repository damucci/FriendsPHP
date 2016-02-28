<!DOCTYPE html>
<html>
<head>
    <title>Login/Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/style.css">

</head>
<body>
<?php   
    if($this->session->flashdata("registration_errors"))
        {
            echo $this->session->flashdata("registration_errors");
        }
    ?>
<div class="panel-heading">
    <h3 class="panel-title">Register</h3>

     
    <form  role="form" action='/register' method='post'>
    
    <div class="form-group col-lg-4">
        Name: <input type='text' name='name' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Alias: <input type='text' name='alias' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Email: <input type='email' name='email' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Password: <input type='password' name='password' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Confirm password: <input type='password' name='passconf' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Date of Birth: <input type='date' name='dob' class="form-control"></input>      
    </div>

    <input type='submit' value='Register' class="btn btn-success"></input>

  </form>

  </div>

<div class="panel-heading">
  <h3 class="panel-title">Login</h3>
    
  <form   role="form" action='/login' method='post'>
    
    <div class="form-group col-lg-4">
        Email: <input type='email' name='email' class="form-control"></input>      
    </div>
    <div class="form-group col-lg-4">
        Password: <input type='password' name='password' class="form-control"></input>      
    </div>
 
    <br><input type='submit' value='Log in' class="btn btn-success"></input>

  </form>

  </div>
  <?php   if($this->session->flashdata("login_errors"))
        {
            echo $this->session->flashdata("login_errors");
        }
    ?>


</body>
</html>