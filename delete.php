<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("connection.php");
    
if(isset($_GET['Del']))
{
    $id = $_GET['Del'];
    $query= "DELETE FROM konsulte WHERE `konsulte`.`id` = $id";
    $result = mysqli_query($con,$query);
    if($result)
    {
        header("location:view.php");
    }
    else
    {
        echo ' Nuk mund te fshihet';
    }
}
else
{
    header("location:view.php");
}


    ?>
</body>
</html>