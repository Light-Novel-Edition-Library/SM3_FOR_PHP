<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SM3 加密</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Microsoft Yahei', "simsun";
        }

        .main {
            width: 800px;
            height: auto;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    require_once 'src/functions.php';

    $sm3 = sm3(@$_POST["area"]);
    ?>
    <div class="main">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>SM3 算法实现测试</h1>
            <textarea name="area" cols="100" rows="5" required></textarea>
            <input type="submit" value="加密" />
        </form>
        <span>原文内容：</span>
        <?php
        echo @$_POST["area"];
        ?>
        <br>
        <span>加密结果：</span>
        <?php
        if (@$_POST["area"] != null) {
            echo $sm3;
        }
        ?>
    </div>
</body>

</html>