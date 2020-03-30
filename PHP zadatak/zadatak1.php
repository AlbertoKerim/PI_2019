<?php

$mysql = new mysqli('localhost', 'root', '', 'alberto_kerim');

if ( $mysql->connect_error){
  die('Connect error: '.$mysql->connect_errno.":".$mysql->connect_error);
}

$p = "SELECT * FROM prodavaonica;";
$s = "SELECT * FROM skladiste;";

$prodavaonica = $mysql->query($p);
$skladiste = $mysql->query($s);

$mysql->close();

?>
 
<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>1</title>
  </head>
  
  <body>
    
    <p>Prodavaonica</p>
    <br>
    
    <table border=1>
      
      <tr>
        <th>Ime artikla</th>
        <th>Cijena artikla</th>
        <th>Velicina</th>
      </tr>

    <?php while($data1 = $prodavaonica->fetch_assoc()) { ?>
      
      <tr>
        <td><?php echo $data1["ime_artikla"]; ?></td>
        <td><?php echo $data1["cijena_artikla"]; ?></td>
        <td><?php echo $data1["velicina_artikla"]; ?></td>
      </tr>
      
    <?php } ?>
    
    </table>
    
    <br>
    
    <p>Skladiste</p>
    <br>
    
    <table border=1>
      
      <tr>
        <th>ID</th>
        <th>Prodavaonica</th>
        <th>Kolicina</th>
      </tr>

    <?php while($data2 = $skladiste->fetch_assoc()) { ?>
      
      <tr>
        <td><?php echo $data2["skl_ID"]; ?>
        <td><?php echo $data2["Prodavaonica_ID"]; ?></td>
        <td><?php echo $data2["Kolicina_artikala"]; ?></td>
      </tr>
      
    <?php } ?>
    
    </table>
    
  </body>
  
</html>