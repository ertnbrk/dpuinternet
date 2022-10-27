<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormAPP</title>
</head>
<body>
<?php
    

include "paket.php";    //pkaet.php'yi çağırıyorum orda yazılı olan kodlar geliyor.Burda hata olursa uyarı verir

require "paket.php";    //Aynı şekilde paketi içeri dadhil etme durumudur fakat burda bir hata olursa error verir



    if(isset($_GET['Sayi1']))    //isset yani setedildi mi değer var mı ?
    {
        $sayi1 = $_GET['Sayi1'];    $sayi2 = $_GET['Sayi2']; }
    else{ 
         $sayi1=0;$sayi2=0; }
?> 
    <form action="" method="get">
        Sayı1 <input type="text" name="Sayi1"value =<?php echo $sayi1;?> >
        <br/>
        Sayı2 <input type="text" name="Sayi2" value=<?php  echo $sayi2;?>>
        <br/>
        <input type="submit" value="Topla">
    </form>
    <?php
    $toplam = (int)$sayi1+(int)$sayi2;
    echo "Toplam ==> ".+$toplam;
    ?>
</body>
</html>