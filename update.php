
<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $tel = $_POST['tel'];
        $emaili = $_POST['emaili'];
        $pershkrimi = $_POST['pershkrimi'];

        
        $query= "UPDATE konsulte SET emri='$emri',mbiemri='$mbiemri',tel='$tel',emaili='$emaili',pershkrimi='$pershkrimi' WHERE id=$id";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Modifikimi nuk u krye ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>