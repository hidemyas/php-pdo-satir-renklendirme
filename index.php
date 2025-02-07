<?php require_once "connect.php";?>
<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satır Renklendirme</title>
</head>
<body>
    <table width="1000" align="center">
        <tbody>
        <tr height="30" bgcolor="#000" style="color: #fff">
            <td align="left">Ürün Adı</td>
            <td align="right">Ürün Fiyatı</td>
        </tr>
        <?php
        $query  =   $db_connect->prepare('SELECT * FROM urunler');
        $query->execute();
        $record_count   =   $query->rowCount();
        $records    =   $query->fetchAll(PDO::FETCH_ASSOC);

        $color_one  =   "#dfdfdf";
        $color_two  =   "#ffffff";
        $color_num  =   0;


        foreach ($records as $row):
            if ($color_num%2){
                $bg_color   =   $color_one;
            }else{
                $bg_color   =   $color_two;
            }
        ?>
        <tr height="30" bgcolor="<?php echo $bg_color;?>" style="cursor: pointer" onmouseout="this.bgColor='<?php echo $bg_color; ?>'" onmouseover="this.bgColor='#c2cedb'">
            <td align="left"><?php echo $row['urunadi']; ?></td>
            <td align="right"><?php echo $row['ufunfiyati']; ?></td>
        </tr>
        <?php $color_num++; endforeach; ?>
        </tbody>
    </table>
</body>
</html>