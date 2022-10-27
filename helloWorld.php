<?php
	echo "Merhaba\t"; //echo ekrana yazdırır
	print "HELLO\t";	//print de ekrana yazdırır.
	
// phpinfo(); 
#php hakkında bilgi almak için yukardaki kodu yazıyoruz.
	
	define ("pi",3.14);	//Sabit tanımlamak
	
	print pi;
	
	eChO "\t Php kısmen büyük küçük harfe duyarlıdır";
	
	echo "<br>"; //Alt satıra geçmek için
	
	echo strlen("İstanbul");	// strlen(metin) kaç karakterden oluştuğunun sayısını verir. fakat Türkçe karakterleri yanlış sayar.
	
	
	echo "<br>",mb_strlen("Türkçe");	//multibyte_strlen ise Türkçe karakterleri destekler unicode destekli olduğundan doğru sayıcaktır

	echo "<br>",strrev("Ertan");	//Metni tersten yazar
	
	echo "<br>",str_word_count("HELLO WORLD SELAM");	//KElime sayacı fakat türkçe karakteri yine yanlış sayıyor.
	echo "<br>",strpos("Hellom aqua blue ","aqua"); //Yazdığım kelime kaçıncı karakterden başlıyor.
	
	
	$metin = "Ötükende cenk olur Ötükende cenk olur yiğitleri mert olur";
	$aranan = "Ötükende";
	$yenideger = "savas";
	
	
	echo str_replace($aranan,$yenideger,$metin);	//yer değiştirme 
	echo "<p><h3>DÖNGÜLER</h3><br>";

	



	
	$listem = ["balikesir","Bursa","Kütahya","MAnisa"];
	$a = 0;
	
	$listem[] = "Yeni Eleman";	//Listeye ekleme işlemi


	for ($i =0;$i <count($listem);$i++){
		echo "<br>$listem[$i]";
	}
	echo "<p><b>While Döngüsü</b><br>";
	while ($a<count($listem)){
		echo "<br>$listem[$a]";
		$a++;
	}
	$a = 0;
	echo "<p><b>Do-While Döngüsü</b><br>";
	do{
		echo "<br>$listem[$a]";
		$a++;
	}
	while ($a<count($listem));
	echo "<p><b>Foreach Döngüsü</b><br>";;
	foreach($listem as $key => $item){//bu şekilde listemin index numaraları key'e itemlerde $item'e aktarılır.
		echo "<br> $item<br>";
		echo $key;	//İndex numaraları
	}


	function welcome(){
		echo "Sitemize Hoşgeldiniz</br>";
	}

	welcome();
	
	
	function faktoriyel1($a){
		
	while ($a>1){
		$yeni=$yeni*$a;
		$a--;
	}
	return $yeni;
	}
	//todo	BURASI KENDİ KENDİNİ ÇAĞIRAN FONKSİYONDUR
	function faktoriyel2($a){
		if ($a ==1){
			return 1;
		}
		else{
			return $a*faktoriyel2($a-1);	//? 	EĞER 1 DEN FARKLIYSA SAYININ 1 EKSİĞİYLE ÇARP
		}
	}
	
?>