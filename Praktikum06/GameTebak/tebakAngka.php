<html>
<body>
    <?php
        function bandingAngka($numA, $numB){
            if ($numA == $numB){
                echo "Selamat ya… Anda benar, saya telah memilih bilangan $numB!";
                $GLOBALS['benar'] = true;        
            }
            if ($numA > $numB){
                echo "Duh, bilangan tebakan Anda terlalu tinggi.";
            }
            if ($numA < $numB){
                echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
            }
        }
    ?>
    <?php
        $GLOBALS['benar'] = false;

        if(isset($_GET['login'])){
            setcookie('user',$_GET['login']);
            setcookie('angkaRand',rand(1,100));
            $_COOKIE['user'] = $_GET['login'];
            $GLOBALS['benar'] = false;  
        }
        echo "Selamat datang " . $_COOKIE['user'] . "!";
        
        if(isset($_GET['angka'])){
            setcookie('tebakan',$_GET['angka']);
            $_COOKIE['tebakan'] = $_GET['angka']; 
        } else {
            unset($_COOKIE['tebakan']);
            setcookie('tebakan', '', time() - 3600, '/'); 
        }
        
        if(isset($_COOKIE['tebakan'])){
            echo "</br>";
            if (is_numeric($_COOKIE['tebakan'])){
                echo "Anda memilih bilangan " . $_COOKIE['tebakan'] . ".</br>";
            }else {
                echo "Tolong ketikkan bilangan!" . "</br>";
            }

            bandingAngka($_COOKIE['tebakan'], $_COOKIE['angkaRand']);
            echo "</br>";
        } else {
            echo "</br>";
            echo "Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat 1-100. Silakan Anda menebak ya!";
        }
        
        if (!$GLOBALS['benar']){
            echo "</br>";
            echo "</form>";
            echo "<form action='tebakAngka.php' method='get'>";
            echo "Number: <input type = 'text' name = 'angka'>";
            echo "<input type='submit'>";
            echo "</form>";   
        } else {
            echo "<form action='login.php'><br>";
            echo "<input type='submit' value='Ulangi lagi?'>";
        }
    ?>    
</body>
</html>
