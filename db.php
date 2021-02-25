<?php
    $servername='localhost';
    $username='root';
    $password='1253';
    $dbname = "Project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
     //   while ($row = mysql_fetch_assoc($last_d)){
     //     $newid1= $row['counts'];
     //     $newid0= $newid1+1;
     //     $query1= mysql_query("UPDATE 'CharacterSketch' . 'counts' SET '$newid1= $newid0'");
     //     echo "Previous records:$last_d <br />
     //     Current count:$newid0"; 
     //  }
?>