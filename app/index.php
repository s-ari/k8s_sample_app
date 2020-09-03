<html>
<head>
<meta charset=UFT-8>
<title>Blue Green App</title>
<style>
    body {
        background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
    }
      
    .word {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    
        padding: 15px 30px;
        text-align: center;
        width: 90%;
    }
</style>
</head>
<body>
    <?php
        // color can set blue or green
        $color = "green";

        $word = getenv('OUTPUT_WORD');
        echo '<div class=word>';
        echo '<font size="7" style="color:'. $color . '"><b>' . $word . '</b>';
        echo '</div>';
    ?>
</body>
</html>
	
