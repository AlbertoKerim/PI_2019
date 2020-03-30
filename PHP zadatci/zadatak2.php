<?php

$link = mysqli_connect("localhost", "root", "", "classicmodels");

 if(isset($_POST['TextBox']) && $_POST['TextBox'] != NULL){

   $sql = $_POST["TextBox"];
   
   if($result = mysqli_query($link, $sql))
   {
     if(mysqli_num_rows($result) > 0)
     {
       echo "<table>";
       echo "<tr>";
       echo "<th>customerName</th>";
       echo "<th>contactLastName</th>";
       echo "<th>contactFirstName</th>";
       echo "</tr>";
       
       while($row = mysqli_fetch_array($result))
       {
         echo "<tr>";
         echo "<td>" . $row['customerName'] . "</td>";
         echo "<td>" . $row['contactLastName'] . "</td>";
         echo "<td>" . $row['contactFirstName'] . "</td>";
         echo "<tr>";}
         echo "</table>";
         mysqli_free_result($result);
       }
      else
      {
        echo "No records matching your query were found.";
      }    
    } 
    else
    {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    mysqli_close($link);
  }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>2</title>
  </head>

  <body>

  <form class="" action="zadatak2.php" method="post">
    <p>Name</p>
    <input type="text" name="TextBox" value="" width="300">
    <input type="submit" name="" value="submit">
  </form>

  </body>

</html>