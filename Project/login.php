<?php
include 'koneksi.php';

if(isset($_POST["login"]) ){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM login where username = '$username' and pass = '$pass'";
    $result = mysqli_query($koneksi, $query);
    $result2 = mysqli_fetch_assoc($result);
    if($result){
        echo "
        <script>
            alert('Login Berhasil'); 
            document.location.href = 'index.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Login Gagal'); 
            document.location.href = 'form.php';
        </script>
        ";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
    <style>
        td input{
           width: 60%;
           border-radius: 50px;
        }

        td label{
            margin-left: 20%;
        }

        
    </style>
</head>
<body>
    <form action="" method="post">
    <table  cellspacing="0" cellpadding="13px" width = "60%" > 
    <tr>
        <td class="header" align="center">LOGIN</td>
    </tr>
        <tr>
            <td align = "left"><label for="username">Username</label></td>
        </tr>
        <tr>
            <td height = "50px"align = "center" > <input type="text" name="username" id="username"></td>
        </tr>
        <tr>
           <td align = "left"> <label for="pass">Password</label></td>
        </tr>
        <tr>
            <td height = "50px" align = "center"><input type="password" name="pass" id="pass"></td>
        </tr> 
        <tr>
           <td height = "50px" align = "center"> <button type="submit" name="login">masuk</button></td>
        </tr>

    </table>
    </form>
</body>
</html>