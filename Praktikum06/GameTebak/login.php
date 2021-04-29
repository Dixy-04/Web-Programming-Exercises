<html>
    <body>
        <?
            unset($_COOKIE['login']);
            setcookie('login', '', time() - 3600, '/'); 
        ?>
        <p>Hallo, nama saya Mr. PHP. Saya akan membimbingmu bermain game tebak angka.</p>
        <p>Masukkan nama kamu dulu ya!</p>
        <form action="tebakAngka.php" method="GET"><br>
            <input type="text" name="login"><br><hr />
            <input type="submit" value="Mulai permainan">
        </form>
    </body>
</html>