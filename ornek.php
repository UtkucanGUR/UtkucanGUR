<?php
$diziicerisindenotunbulundugualanınnumarası = 1;
$enyükseknot = 0;
$enyükseknotunsahibininismi = "";
$dizininbolumleri = 0;
$ogrenciler = array(["Uğur Arıcı",55],["Ömer Çıtak",100],["Şahin Eğilmez",75]);
$dizielemansayısıtutandeğişken = count($ogrenciler);
for($sayac=0;$sayac<$dizielemansayısıtutandeğişken;$sayac++){
	if($ogrenciler[$sayac][$diziicerisindenotunbulundugualanınnumarası]>$enyükseknot){
		$enyükseknot=$ogrenciler[$sayac][$diziicerisindenotunbulundugualanınnumarası];
		$enyükseknotunsahibininismi=$ogrenciler[$sayac][$dizininbolumleri];
	}
}
var_dump($ogrenciler);
echo "<br><br>";
echo "<hr>";
echo "Dizi içerisindeki en yüksek not : ".$enyükseknot." ve bu notun sahibinin ismi : ".$enyükseknotunsahibininismi."<hr>";
?>