<?php
$diziicerisindenotunbulundugualan�nnumaras� = 1;
$eny�kseknot = 0;
$eny�kseknotunsahibininismi = "";
$dizininbolumleri = 0;
$ogrenciler = array(["U�ur Ar�c�",55],["�mer ��tak",100],["�ahin E�ilmez",75]);
$dizielemansay�s�tutande�i�ken = count($ogrenciler);
for($sayac=0;$sayac<$dizielemansay�s�tutande�i�ken;$sayac++){
	if($ogrenciler[$sayac][$diziicerisindenotunbulundugualan�nnumaras�]>$eny�kseknot){
		$eny�kseknot=$ogrenciler[$sayac][$diziicerisindenotunbulundugualan�nnumaras�];
		$eny�kseknotunsahibininismi=$ogrenciler[$sayac][$dizininbolumleri];
	}
}
var_dump($ogrenciler);
echo "<br><br>";
echo "<hr>";
echo "Dizi i�erisindeki en y�ksek not : ".$eny�kseknot." ve bu notun sahibinin ismi : ".$eny�kseknotunsahibininismi."<hr>";
?>