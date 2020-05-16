
    <!DOCTYPE html>
    <html>
    <head>
      <title>E-Perpus</title>
      <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/demo.css" media="all" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
      <div class="container"> 
        <header>
          <h1><span>E-Perpus</span>Log In</h1>
        </header>     
        <div class="form" style="background-color:#f1f1f1">
          <form action="<?php echo base_url('buku/cekLogin'); ?>" method='post'>            
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <label style=" <?= isset($info)? "" : "display:none;" ?>  " ><font face="Castellar" color="red">Username atau password salah !</font></label>
            <br>
            <button type="submit" class="btn btn-info btn-sm" >Login</button>  
            <br>
            <center>    
              <a href="<?php echo base_url('buku/register'); ?>" class="badge badge-pill badge-light badge-sm">Register akun?</a>                   
            </center>
          </form>
        </div>
      </div>

      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>                                                              
    </body>
    </html>










<!--           <div  class="form">
          <form class="modal-content animate" action="<?; ?>" method='post'>
            <div class="container">
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" required>
              <button type="submit" class="btn btn-info btn-sm" >Login</button>  
              <br>
              <center>    
                <a href="#" class="badge badge-pill badge-light badge-sm">Register akun?</a>                   
              </center>
            </div>
          </form> -->