<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['tel']) || empty($_POST['emaili'])|| empty($_POST['pershkrimi']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $emri = $_POST['emri'];
            $mbiemri = $_POST['mbiemri'];
            $tel = $_POST['tel'];
            $emaili = $_POST['emaili'];
            $pershkrimi = $_POST['pershkrimi'];

            
            $query= "INSERT INTO `konsulte` (`id`, `emri`, `mbiemri`, `tel`, `emaili`, `pershkrimi`) VALUES (NULL, '$emri', '$mbiemri', '$tel', '$emaili', '$pershkrimi')";
            $result = mysqli_query($con,$query);

            if($result)
            {
               
            echo 'Konsulta juaj eshte rezervuar me sukses. Do ju kontaktojme se shpejti.';
            }
            else
            {
                echo '  Rezervimi nuk u krye ';
            }
        }
    }
    else
    {
        header("location:index3.php");
    }



?>