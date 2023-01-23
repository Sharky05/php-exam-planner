     <!DOCTYPE html>
//Documenttype aangeven (HTML)
     <html lang="nl">
//Geeft aan in welke taal bepaalde stukken tekst zijn geschreven (Nederlands)
     <head>
//De 'kop', deze definieert informatie van ons html document.
    <meta charset="UTF-8">
//Meta verteld welk type inhoud een webpagina bevat die voor weergave verborgen is, 
//charsetis geeft de tekencodering aan voor de website-inhoud. utf-8 is de specifieke tekencodering.
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
//Viewport is het gebied van het venster waarin webinhoud kan worden gezien.   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
//Met de metatag X-UA-Compatible kunnen webauteurs kiezen met welke versie van Internet Explorer de pagina moet worden weergegeven.
    <title>Contact Information</title>
//Geeft de titel aan van het document.
    <link rel="stylesheet" href="./style.css">
//Koppeling van de css-opmaak aan de html pagina
    <link rel="icon" href="site_icon_primary.png">
// 
  </head>
//De 'kop' wordt beëidnigt, deze definieerde informatie van ons html document.  
  <body>
// Geeft het begin aan van de nieuwe inhoud.	
        <div> 
//Element voor de 'blokken' van de kopjes
        <div id="nav-items"> 
//Het <nav> Geeft navigatiekoppelingen aan naar andere documenten.
          <a class="navbar-brand" href="index.php">Homepage</a> 
          <a class="nav-items" href="planner.php">Planner</a> 
          <a class="navbar-brand" href="contact.php">Contact</a> 
          <a class="nav-items" href="login.php">Login</a> 
//Geeft de verbinding aan van klikbaar blokje naar een ander verbonden document.
          </div>
//Geeft het einde aan van de tekst in 'blokken' van de kopjes.
    <main>
    
    <main>
      
       <h1 id="left_aligned">Contact Informatie</h1>
//Opening van kop 1 en via '' de plek aangegeven waar de kop gecentreerd moet worden (links) 
      <h2>
        Nico Francis - Developer
      </h2>
    <p>Zakelijke Email: nfrancis@ogvo.nl<br>
 //p geeft aan dat je in normale tekst typt (denk aan arial 11) en <br> geeft aan dat de tekst vetgedrukt moet worden weergegeven. 
        Telefoonnummer: +31 6 11156150</p>
      
      <h2>
        Stan Obers - Developer
      </h2>
      <p>Zakelijke Email: stobers@ogvo.nl<br>
        Telefoonnummer: +31 6 41907731
      </p>
      
    </main>
    
  </body>
  
</html>
