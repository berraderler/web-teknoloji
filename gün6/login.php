<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $email = $_POST["email"];
    $password = $_POST["şifre"];

    // Eğer e-posta ve şifre doğruysa, giriş başarılı
    if ($email === "example@gmail.com" && $şifre === "şifre") {
        echo "Giriş Başarılı!";
    } else {
        echo "E mail şifreniz geçersiz!";
    }
}
?>