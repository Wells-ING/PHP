<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>Hello World</p>
    <?
        for($i = 1; $i <= 100; $i++) {
            if($i % 2 == 0) {?>
                <li><span style="color: aqua"><?echo $i;?></span></li>
            <?}
        }
        ?>

    <?
        // 如何在页面中嵌入另外一个页面
        echo include '0401.php'
    ?>
</body>
</html>