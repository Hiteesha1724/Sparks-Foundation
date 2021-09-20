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
           <div id="cust_php">
           <div class="container">
           <center>
            <h1 style="color: black;"><b>CUSTOMERS</b></h1>
            <div class="row">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>Transfer Money</th>
                        </tr>
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
                         $sql="select * from users";
                         $result=mysqli_query($con,$sql);
                         while($rows=mysqli_fetch_assoc($result)){
                         ?>
                         <tr>
                             <td><?php echo $rows['id']?></td>
                             <td><?php echo $rows['name']?></td>
                             <td><?php echo $rows['email']?></td>
                             <td><?php echo $rows['balance']?></td>
                             <td><a href="select.php?id=<?php echo $rows['id'];?>"><button type="button" class="btn btn-danger btn-lg active">Transfer</button></a></td>
                         </tr>
                         <?php
                         }
                         ?>
                    </table>
                </center>
            </div>
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
