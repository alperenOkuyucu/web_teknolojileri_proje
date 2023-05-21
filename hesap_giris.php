<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    if ($email === 'correct@example.com' && $password === 'correctpassword') {
        session_start();
        $_SESSION['logged_in'] = true;

        header('Location: success.php');
        exit;
    } else {
        header('Location: hesap_giris.php?error=1');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/hesap_giris.css">
</head>
<body>
    <div class="custom-container">
        <div class="card">
            <div class="card-body">
                <?php if (isset($_GET['success']) && $_GET['success'] == 1) : ?>
                    <h2 class="card-title">Hoş Geldiniz!</h2>
                    <p class="card-text">Başarıyla giriş yaptınız.</p>
                <?php else : ?>
                    <form method="post" action="hesap-islem.php">
                        <h2 class="card-title">Giriş Yap</h2>
                        <?php if (isset($_GET['error'])) : ?>
                            <div class="alert alert-danger">Hatalı e-posta veya şifre. Lütfen tekrar deneyin.</div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="email">E-posta:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Şifre:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <input type="submit" name="submit" value="Giriş" class="btn btn-primary">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>