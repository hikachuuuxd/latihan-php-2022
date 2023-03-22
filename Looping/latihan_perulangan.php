<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangna</title>
</head>
<body>
<table border="1px" cellpadding="10px">
<?php for($tr =1; $tr <= 5; $tr++): ?>
    <tr>
      <?php for($td=1; $td<=5; $td++): ?>
        <td><?php echo $tr.",".$td ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>  
</table>
    
</body>
</html>