<!DOCTYPE html>
<html lang="it">
  <head>
    <title>SONDAGGIO</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>Quale logo preferisci?</h1>
      <form action="risultati.php" onsubmit="setCookies(1,2)" method="get">
        <p>
          <button type="submit" id="logo1" name="voto" value="1"><img src="logo1.png"></button>
          <button type="submit" id="logo2" name="voto" value="2"><img src="logo2.png"></button>
        </p>
      </form>
  </body>
</html>
