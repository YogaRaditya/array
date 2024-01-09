<?php
$angka = [1,2,3,4,5,6,7,8,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Perulangan Foreach</title>
</head>
<style>
    div{
        width: 200px;
        height: 200px;
        background-color: yellow;
        text-align: center;
        line-height: 200px;
        margin: 10px;
        float: left;
    }
</style>
<body>
    <?php for( $i=0; $i< 7; $i++) { ?>
    <div><?php echo $angka[$i]; ?></div>
<?php } ?>
</body>
</html>