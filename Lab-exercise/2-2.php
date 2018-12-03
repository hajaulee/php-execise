<?php
    if (empty($_GET['name']) || empty($_GET['uni']) || empty($_GET['class'])){
        echo "<h2>Fields marked with * may not be left blank.</h2>";
        echo file_get_contents("form.html");
        exit();
    }
?>
<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <h1><?php echo $_GET['name']?>さん、こんにちは。</h1>
        <h2>きっとイ<?php echo $_GET['gen'] == "Male"?"ケメンな青年":"別嬪な少女";?>だと思います。
            今、<?php echo $_GET['uni']?>大学
            <?php echo $_GET['class']?>クラスで勉強していますね。
            お疲れ様。ご趣味は<?php
                if(!isset($_GET['hb1']) && !isset($_GET['hb2']))
                    echo "ない";
                elseif (isset($_GET['hb1']))
                    echo "男性";
                elseif (isset($_GET['hb2']))
                    echo "女性";
                else
                    echo "男性と女性";?>ですか。面白そうですね。</h2>
        <p>Click <a href="form.html">here</a> to return to the information entry page.</p>
    </body>
</html>