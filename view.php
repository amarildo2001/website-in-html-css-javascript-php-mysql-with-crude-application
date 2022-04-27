<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Tabela</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                    <h1>Mire se erdhe <?php echo $login_session; ?></h1> 
                    <h2><button class="btn1"><a href = "logout.php">Dil</a></button></h2>
                    <style type = "text/css">
                      .btn1{
                        color:white;
                        background: red;
                        width:50px;
                        
                      }
                     a{
                          color:white;
                          text-transform: uppercase;
                          position: right;
                          text-decoration: none;
                      }
                      .btn2{
                        color:white;
                        background: orange;
                        width:80px;
                      }
                    </style>

                        <table border="5" bordercolor= #08167F class="table table-bordered">
                          <thead>
                              <tr class="tr1" bgcolor=#7D47F2>
                                <td> ID <style type="text/css">.tr1 td{color: white;}</style> </td>
                                <td> Emri </td>
                                <td> Mbiemri </td>
                                <td> Tel </td>
                                <td> Emaili  </td>
                                <td> Pershkrimi </td>
                                <td> Modifiko </td>
                                <td> Fshi </td>
                            </tr>
                        </thead> 

                            <?php 

                                    require("connection.php");

                                     $qry="select * from konsulte order by ID";
                                     $res=mysqli_query($con,$qry) or die("gabim komande");

                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $id = $row['id'];
                                        $emri = $row['emri'];
                                        $mbiemri = $row['mbiemri'];
                                        $tel = $row['tel'];
                                        $emaili = $row['emaili'];
                                        $pershkrimi = $row['pershkrimi'];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $emri ?></td>
                                        <td><?php echo $mbiemri ?></td>
                                        <td><?php echo $tel ?></td>
                                        <td><?php echo $emaili ?></td>
                                        <td><?php echo $pershkrimi ?></td>
                                        <td><button class="btn2"><a href="update1.php?id=<?php echo $id ?>">Modifiko</a></button></td>
                                        <td><button class="btn1"><a href="delete.php?Del=<?php echo $id ?>">Fshi</a></button></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>