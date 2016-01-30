<?php
$diziicerisindenotunbulundugualanýnnumarasý = 1;
$enyükseknot = 0;
$enyükseknotunsahibininismi = "";
$dizininbolumleri = 0;
$ogrenciler = array(["Uður Arýcý",55],["Ömer Çýtak",100],["Þahin Eðilmez",75]);
$dizielemansayýsýtutandeðiþken = count($ogrenciler);
for($sayac=0;$sayac<$dizielemansayýsýtutandeðiþken;$sayac++){
	if($ogrenciler[$sayac][$diziicerisindenotunbulundugualanýnnumarasý]>$enyükseknot){
		$enyükseknot=$ogrenciler[$sayac][$diziicerisindenotunbulundugualanýnnumarasý];
		$enyükseknotunsahibininismi=$ogrenciler[$sayac][$dizininbolumleri];
	}
}
var_dump($ogrenciler);
echo "<br><br>";
echo "<hr>";
echo "Dizi içerisindeki en yüksek not : ".$enyükseknot." ve bu notun sahibinin ismi : ".$enyükseknotunsahibininismi."<hr>";
?>