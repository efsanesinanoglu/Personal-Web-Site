<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    echo "Kullanıcı adı ve şifre boş bırakılamaz.";
    exit;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Geçerli bir e-posta adresi girin.";
    exit;
  }

  $atIndex= strpos($email,"@");
  $studentNumber = substr($email, 0, $atIndex);

  if ($password === $studentNumber) {
    echo "Hoşgeldiniz \"$studentNumber\". GİRİŞ İŞLEMİ BAŞARILI.";
  } else {
    echo "$studentNumber";
    echo "YANLIŞ GİRİŞ YAPTINIZ.";
    exit;
  }
}
?>
