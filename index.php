<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>ReBook</title>
    
    <link rel="stylesheet" href="styles.css">
    
  </head>
  
  <body>

    <header> 
      <h1>Rebook</h1>
    </header>

    <nav>
      <div id="header_menu" class="icon-bar">
        <a href="index.php">Home</a>
        <a href="#">Donate</a>
        <a style="float:right" type="a" value="LogIn" onclick="newDoc()">LogIn</a>
      </div>
    <nav>
    <script>
      function newDoc() {
        window.location.assign("login1.php")
      }
    </script>
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
  </body>
</html>
