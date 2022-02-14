<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>ReBook</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
    
  </head>
  
  <body>

    <header> 
      <h1>Rebook</h1>
    </header>

    <nav>
      <div id="header_menu" class="icon-bar">
        <a href="index.php">Home</a>
        <a href="#">Donate</a>
        <a id="login" style="float:right" type="a" value="LogIn" onclick="document.getElementById('login_box').style.display='block';document.getElementById('login').style.display='none';document.getElementById('body').style.opacity='0.2'">LogIn</a>
      </div>
    </nav>

    <section id="body">
    
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

    <div id="login_box" class="box" style="display:none">
      <div id="signup_link_div"><label class="form_switching_link">Sign up</label></div>
      <label id='label0' class='label0'>Log in</label><br>
      <form action="login.php" method="post">
          <label class="label1">E-mail</label>
          <input type="email" name="email" class="input"><br>
          <label class="label1">Password</label>
          <input type="password" name="pw" class="input"><br>
          <br>
          <input type="submit" id='submit_btn' class='button0' value="Log in">
      </form>
    </div>
  </body>
</html>
