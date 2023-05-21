<?php
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'g201210056@sakarya.edu.tr' && $password === 'g201210056') {
    
    session_start();
    $_SESSION['logged_in'] = true;

    header('Location: basarili.html');
    exit;
} else {
    
    header('Location: hesap_giris.php?error=1');
    exit;
}
?>