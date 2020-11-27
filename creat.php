<?php
$kadi = @$_POST["kadi"];
$sifre = @$_POST["sifre"];
if(!$kadi || !$sifre){
  echo "kaydolmak için bilgileriniz eksik lütfen kontrol ederek tekrar deneyiniz.<br><a href='creat_account.php'>tekrar denemek için tıkla.</a>";
}else {
  if(file_exists($kadi)){
 echo "kullanıcı mevcut";
 return;
  }else {
  touch($kadi);
  $file = fopen($kadi, 'w+' );
  fwrite($file, '<?php $sifre = "'.$sifre.'"; $para = "100"; $elmas = "10"; ?> ');
  if(file_exists($kadi)){
    echo "kayıt başarılı yönlendiriliyorsunuz.";
  header("Refresh: 3; url='game.php'");
}else {
  echo "kayıt başarısız tekrar deneyiniz.";
}
return;
  }
}
 ?>
