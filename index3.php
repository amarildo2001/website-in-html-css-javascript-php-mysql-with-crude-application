<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
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
    background: green;
    border: none;
    border-radius:10px;
    text-align: center;
    width: 100%;
}
.btn:hover{
    color: darkblue;
}


</style>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h2 class="tekst"><i> Rezervo Konsulte</i></h2>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <label>Emri:</label>
                                <input type="text" class="data" placeholder=" Emri " name="emri"></br>
                                <label>Mbiemri:</label>
                                <input type="text" class="data" placeholder=" Mbiemri " name="mbiemri"><br>
                                <label>Tel:</label>
                                <input type="text" class="data" placeholder=" Tel " name="tel"><br>
                                <label>Emaili:</label>
                                <input type="email" class="data" placeholder=" Email " name="emaili"><br>
                
                                <label>Pershkrimi:</label>
                                <input type="text" class="data" placeholder=" Pershkrimi " name="pershkrimi"></br><br><br>
                                <button class="btn" name="submit">Rezervo Konsulte</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>