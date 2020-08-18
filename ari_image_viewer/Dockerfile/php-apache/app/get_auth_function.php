<?php
    function GetAuth() {
        $file = 'settings';
        $fp = fopen($file, 'r');
       
        global $dbname, $host, $user, $pw;
        while (($data = fgetcsv($fp, 0, "=")) !== FALSE) {
            if ($data[0] === "dbname"){
                $dbname = "$data[1]";
            } elseif ($data[0] === "host") {
                $host = "$data[1]";
            } elseif ($data[0] === "user") {
                $user = "$data[1]";
            } elseif ($data[0] === "pw") {
                $pw = "$data[1]"; 
            }
        }
      
        fclose($fp);
    }

    function GetAuthEnv() {
        global $dbname, $host, $user, $pw;
        $dbname = getenv('dbname');
        $host = getenv('host');
        $user = getenv('user');
        $pw = getenv('pw');
    }
?>
