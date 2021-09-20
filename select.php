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
 $from=$_GET['id'];
 $to=$_POST['to'];
 $amount=$_POST['amount'];
 $sql="select * from users where id=$from";
 $query= mysqli_query($con,$sql);
 $sql1=mysqli_fetch_array($query);
 $sql="select * from users where id=$to";
 $query=mysqli_query($con,$sql);
 $sql2=mysqli_fetch_array($query);
 
 if($amount < 0)
 {
  echo "<script>
  alert('Sorry! Negative values cannot be transferred')
  </script>";
 }
 else if ($amount > $sql1['balance'])
 {
  echo "<script>
  alert('Sorry! Insufficient Balance');
  </script>";
 }
 else if($amount == 0)
 {
  echo "<script>
  alert('Sorry! Zero value cannot be transferred');
  </script>";
 }
 else
 {
  $newbalance=$sql1['balance'] - $amount;
  $sql="update users set balance=$newbalance where id=$from";
  mysqli_query($con,$sql);

  $newbalance=$sql2['balance'] + $amount;
  $sql="update users set balance=$newbalance where id=$to";
  mysqli_query($con,$sql);

  $sender=$sql1['name'];
  $receiver=$sql2['name'];
  $sql="insert into transactions(sender,receiver,amount) values('{$sender}','{$receiver}','{$amount}')";
  $query=mysqli_query($con,$sql);
  if($query)
  {
   echo "<script> alert('Transaction Successful...');
         window.location='transactions.php';
         </script>";
   }
   else
   {
    echo "<script> alert('error');</script>";
    echo  "ERROR:".$sql."<br>".mysqli_error($con);
   }
   $newbalance=0;
   $amount=0;
  }
 }
?>
<html>
    <head>
        <title>NEXUS BANK</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-usd"></span>NEXUS BANK</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="customers.php"><span class="glyphicon glyphicon-user"></span> Customers</a></li>
                        <li><a href="transactions.php"><span class="glyphicon glyphicon-transfer"></span> Transactions</a></li>
                        <li><a href="aboutme.html"> About Me</a></li>
                    </ul>
                </div>
            </div> 
        </nav>
        </div>
        <div id="transfer">
            <div class="container">
                <center>
                    <h1 style="color: black;">TRANSACTION</h1>  
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
                           $sid=$_GET['id'];
                           $sql="select * from users where id=$sid";
                           $result=mysqli_query($con,$sql);
                           if(!$result)
                           {
                            echo "ERROR:".$sql."<br>".mysqli_error($con);
                           }
                           $rows=mysqli_fetch_assoc($result);
                    ?>
                    <form method="post" name="credit" class="transfer-frm">
                        <div>
                             <table>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Email</th>
                            <th>Balance</th>
                        </tr>
                        <tr>
                             <td name="id"><?php echo $rows['id']?></td>
                             <td><?php echo $rows['name']?></td>
                             <td><?php echo $rows['email']?></td>
                             <td><?php echo $rows['balance']?></td>
                         </tr>
                             </table>
                        </div>
                        <br>
                        <br>
                        <br>
                        <label style="color: black;"><b>Transfer to:</b></label>
                        <select name="to" class="form-control" required>
                            <option value="" disabled selected>Choose</option>
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
                           $sid=$_GET['id'];
                           $sql="select * from users where id!=$sid";
                           $result=mysqli_query($con,$sql);
                           if(!$result)
                           {
                            echo "ERROR:".$sql."<br>".mysqli_error($con);
                           }
                           while($rows=mysqli_fetch_assoc($result)){
                           ?>
                           <option class="table" value="<?php echo $rows['id'];?>">
                               <?php echo $rows['name'];?>(Balance:
                               <?php echo $rows['balance'];?>)
                           </option>
                          <?php
                          }
                          ?>
                          <div>
                        </select>
                        <br>
                        <br>
                        <label style="color: black;"><b>Amount:</b></label>  
                        <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-danger btn-lg active" name="submit" type="submit"class="transfer-btn" >Transfer</button>
            </div>
                          </div>
                    </form>
                        
                </center>
            </div>
            </div>
 <footer class="footer">
            <center>
                <div class="container">
                    ©2021. Made By Hiteesha Gellanki.
                </div>
            </center>
        </footer>
    </body>
</html>