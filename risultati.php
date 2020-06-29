<!DOCTYPE html>
<html lang="it">
  <head>
    <title>SONDAGGIO</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa">
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <h1>GRAZIE PER AVER VOTATO!</h1>
      <?php
      $f1=fopen("1.txt", "r") or die("<p>Impossibile aprire file!</p>");
      if(filesize("1.txt")>0){
        $voti1=fread($f1,filesize("1.txt"));
        $voti1=intval($voti1);
      }
      fclose($f1);
      $f2=fopen("2.txt", "r") or die("<p>Impossibile aprire file!</p>");
      if(filesize("2.txt")>0){
        $voti2=fread($f2,filesize("2.txt"));
        $voti2=intval($voti2);
      }
      fclose($f2);
      if($_REQUEST["voto"]==1) {
        echo "<p>Hai votato il logo numero 1!</p>";
        $voti1=$voti1+1;
      }else if($_REQUEST["voto"]==2) {
        echo "<p>Hai votato il logo numero 2!</p>";
        $voti2=$voti2+1;
      }
      echo "<p>Il totale dei voti &egrave ".($voti1+$voti2)."</p>";
      echo "<p>Il logo 1 ha ricevuto il ".intval(($voti1/($voti1+$voti2))*(100))." % dei voti, il logo 2 ha ricevuto il ".intval(($voti2/($voti1+$voti2))*(100))." % dei voti.</p>";
      //aggiornamento dei file
      $f1=fopen("1.txt", "w") or die("<p>Impossibile aprire file!</p>");
      fwrite($f1,$voti1);
      fclose($f1);
      $f2=fopen("2.txt", "w") or die("<p>Impossibile aprire file!</p>");
      fwrite($f2,$voti2);
      fclose($f2);
      ?>
      <form class="" action="index.php" method="get">
          <button type="submit">Torna alla pagina principale</button>
      </form>
  </body>
</html>
