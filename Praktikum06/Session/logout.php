<?php

session_start();
// hapus semua session
session_destroy();
// redirect ke halaman login
header("Location: form.html");
?>