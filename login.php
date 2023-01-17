<!DOCTYPE html>

<html lang="nl">
  
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="site_icon_primary.png">
    
  </head>
  
  <body>
    
     <div> 
        <div id="nav-items"> 
          <a class="navbar-brand" href="index.php">Homepage</a> 
          <a class="nav-items" href="planner.php">Planner</a> 
          <a class="navbar-brand" href="contact.php">Contact</a> 
          <a class="nav-items" href="login.php">Login</a> 
     </div>
    <main>
      
        <h1>Login</h1>
      
      <p>
        Hier kun je inloggen. <br>
        Nog geen account? Klik dan op de registreer knop onderaan.
      </p>
          <form class="form" method="get" action=""> 
        <input type="text" required="required" placeholder="Gebruikersnaam" name="username"> 
        <input type="password" required="required" placeholder="Wachtwoord" name="password">
        <input type="submit" value="Submit"> 
    </form>
      
      <div id="main_button">
        <a href="register.php">Registreer</a>
    </div>
     
      
    </main>
    
  </body>
  
</html>
