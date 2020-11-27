<?php
$kadi = @$_POST["kadi"];
$desifre = @$_POST["sifre"];
if(!$desifre || !$kadi){
  echo 'eksik bilgi girdiniz lütfen tekrar deneyiniz.';
}else {
  if(file_exists($kadi)){
    include($kadi);
    if($sifre = $desifre){
     echo "giriş başarılı";
    }else {
      echo "hatalı şifre";
    }
  }else {
    echo "geçersiz kullanıcı";
  }
}
 ?>
