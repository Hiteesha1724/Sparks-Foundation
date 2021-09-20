<?php
$servername="localhost";
 $username="id17536965_root";
 $password="Kushi@17240502";
 $dbname= "id17536965_nb";
 $con= mysqli_connect($servername, $username, $password, $dbname);
 if(!$con)
 {
  die("ERROR! Couldn't connect to the database. ".mysqli_connect_error());
 }
if(isset($_POST['submit']))
 {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $balance=$_POST['balance'];
  $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
  $result=mysqli_query($con,$sql);
  if($result)
   {
    echo "<script> alert('Successful!!!');
           window.location='customers.php';
           </script>";
   }
   else
   {
       echo "ERROR:".$sql."<br>".mysqli_error($con);
   }

  }
?>