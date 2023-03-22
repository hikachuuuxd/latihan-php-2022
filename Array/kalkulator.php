<?php 
include 'fungsi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="../css/kalkulator.css">
</head>
<body>
    <form action="" method="post">
        <table >
            <tr>
                <td colspan="4"><input type="number" name="x" id="" autocomplete = "off"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="number" name="y" id="" autocomplete = "off"></td>
            </tr>
            <tr>
                <td><button class="tambah" type="submit" name="tambah">tambah</button></td>
                <td><button class="kurang" type="submit" name="kurang">kurang</button></td>
                <td><button  class="kali" type="submit"  name="kali">kali</button></td>
                <td><button class="bagi" type="submit" name="bagi">bagi</button></td>
            </tr>
            <?php
                if(isset($_POST['tambah']) ): 
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $hasil = tambah($x, $y) ?>
                <tr>
                    <td colspan="4"><input type="text" name="hasil" id="" value="<?php echo $hasil ?>"></td>
                </tr>
                <?php endif;?>
                <?php
                if(isset($_POST['kurang']) ): 
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $hasil = kurang($x, $y) ?>
                <tr>
                    <td colspan="4"><input type="text" name="hasil" id="" value="<?php echo $hasil ?>"></td>
                </tr>
                <?php endif;?>
                <?php
                if(isset($_POST['kali']) ): 
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $hasil = kali($x, $y) ?>
                <tr>
                    <td colspan="4"><input type="text" name="hasil" id="" value="<?php echo $hasil ?>"></td>
                </tr>
                <?php endif;?>
                <?php
                if(isset($_POST['bagi']) ): 
                    $x = $_POST['x'];
                    $y = $_POST['y'];
                    $hasil = bagi($x, $y) ?>
                <tr>
                    <td colspan="4"><input type="text" name="hasil" id="" value="<?php echo $hasil ?>"></td>
                </tr>
                <?php endif;?>
            
        </table>
    </form>
</body>
</html>