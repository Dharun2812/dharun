<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>ReBook</title>
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="forms.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  

  </head>
  
  <body>

    <header> 
      <h1>Rebook</h1>
    </header>

    <nav>
      <div id="header_menu" class="icon-bar">
        <a href="index.php">Home</a>
        <a href="donate.php">Donate</a>
        <a style="float:right; cursor:pointer"  type="a" class="login" data-toggle="modal" data-target="#myModal">
            LogIn
        </a>

        </div>
    <nav>
    <section>
    
      <div id="Our_Aim" class="aim">

      </div>
      
      <div id="book_category" class="category">
        <button id="btn_jee" class="book_category_style">JEE</button>
        <button id="btn_neet" class="book_category_style">NEET</button>
        <button id="btn_cbseicse" class="book_category_style">CBSE</button>
        <button id="btn_state" class="book_category_style">STATE</button>
      </div>
      
    </section>

    <footer>
    
      <div id="contact_us" class="contact">
        <h2>Contact Us</h2>
        <a href="mailto:dharunramsarathy@gmail.com">Mail address</a>
      </div>
    </footer>   
<?php require 'validate.php' ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content clearfix">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
              <div class="modal-body">
                  <h3 class="title">Login Form</h3>
                  <p class="description">Login here Using Email & Password</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                      <span class="input-icon"><i class="fa fa-user"></i></span>
                      <input type="email" class="form-control" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                      <span class="input-icon"><i class="fas fa-key"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group checkbox">
                      <input type="checkbox">
                      <label>Remember me</label>
                  </div>
                  <a href="" class="forgot-pass">Forgot Password?</a>
                  <button class="btn">Login</button>
                </form>
                  <a class="sign_up" href="#">sign up</a>
              </div>
          </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>
