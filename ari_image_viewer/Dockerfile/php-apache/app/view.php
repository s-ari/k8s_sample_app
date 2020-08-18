<html>
<head>
<meta charset=UFT-8>
<title>Ari Image Viewer</title>
<style>

body {
  background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);;
}

</style>
</head>
<body>
    <?php

        // DB認証情報取得 using GetAuth or GetAuthEnv
        require_once("get_auth_function.php");
        //GetAuth();
        GetAuthEnv();

        // DB認証情報設定
        $dsn  = "mysql:dbname=$dbname;host=$host;charset=utf8";
        $driver_options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // SQL
        $sql = 'SELECT * FROM
                   `image_data`
                WHERE
                   `img_name`
                LIKE :find
        ';

        // 画像検索文字列
        $find = 'sea';

        // 画像取得
        $pdo = new PDO($dsn, $user, $pw, $driver_options);
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':find', $find.'%', PDO::PARAM_STR);
        $stmt->execute();

        // 画像表示
        echo '<div style="position:absolute; top:200px; left:650px">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($stmt->fetchAll()[0]['img']) . '" width="800" height="500">';
        echo '</div>';
    ?>
</body>
</html>
	
