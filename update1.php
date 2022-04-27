<?php error_reporting(0); ?>
<?php 

    require("connection.php");
    
    $id = $_GET['id'];
    $query = " select * from konsulte where id='".$id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $emri = $row['emri'];
        $mbiemri = $row['mbiemri'];
        $tel = $row['tel'];
        $emaili = $row['emaili'];
        $pershkrimi = $row['pershkrimi'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body>
<style type = "text/css">
    *{box-sizing: border-box;}
 body{
     background: #1BC9F3;
 } 
 h2{
     color: darkblue;
     text-align: center;
 }
form {
   width: 30%;
   margin: 60px auto; 
   background: blue;  
   padding: 60px 120px 80px 120px;
   text-align: left;
   -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
   box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
   border: 1px solid black; 
}
label{
    color: white;
}
input {
   width: 100%;
   padding: 10px;
   background: transparent;
   border: none;
   outline: none;
   background: lightblue;
}
.btn{
    background: lightgreen;
    border: none;
    border-radius:10px;
    text-align: center;
    width: 100%;
}
.btn:hover{
    color: darkblue;
}


</style>


        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="tekst"><i> Modifiko te dhenat</i> </h2>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $id ?>" method="post">
                                <label>Emri:</label>
                                <input type="text" class="data" name="emri" value="<?php echo $emri ?>">
                                <label>Mbiemri:</label>
                                <input type="text" class="data"name="mbiemri" value="<?php echo $mbiemri ?>">
                                <label>Tel:</label>
                                <input type="text" class="data"name="tel" value="<?php echo $tel ?>">
                                <label>Emaili:</label>
                                <input type="email" class="data"name="emaili" value="<?php echo $emaili ?>">
                                <label>Pershkrimi:</label>
                                <input type="text" class="data"name="pershkrimi" value="<?php echo $pershkrimi ?>"><br></br>
                                <button class="btn" name="update">Modifiko</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>