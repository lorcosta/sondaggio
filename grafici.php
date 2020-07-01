<!DOCTYPE html>
<html lang="it">
  <head>
    <title>SONDAGGIO</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
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
     ?>
    <script src="Chart.js">
    var data = {
        labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto"],
        datasets: [
          {
            label: "Risultati",
            fillColor: "rgba(99,240,220,0.2)",
            strokeColor: "rgba(99,240,220,1)",
            pointColor: "rgba(99,240,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [<?php echo $voti1.",".$voti2; ?>]
          }
        ]
      };
      var ctx = document.getElementById("myChart").getContext("2d");
      var myNewChart = new Chart(ctx);
      myNewChart.Pie(data);

    </script>
  </head>
  <body>
      <h1>Riepilogo risultati</h1>
      <p><?php echo "Voti logo 1".$voti1; ?></p>
      <p><?php echo "Voti logo 2".$voti2; ?></p>
      <canvas id="myChart" width="400" height="400"></canvas>
  </body>
</html>
