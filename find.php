<?php
$kata = $_POST["cari"];
$isi = "Indonesia tanah airku, tanah tumpah darahku";
$len = strlen($kata);
$pos = strpos($isi, $kata);
$sub = substr($isi, $pos, $len);
$explode = explode(" ", $isi);
$arraycount = count($explode);
if($kata == $explode[0])
{
	$arrayy = "<font style='color:#000000'><b>$explode[0]</b></font>"; 
	echo $arrayy. " ";
	echo $explode[1]. " ";
	echo $explode[2]. " ";
}
if($kata == $explode[1])
{
	$arrayy = "<font style='color:#000000'><b>$explode[1]</b></font>"; 
	echo $explode[0]. " ";
	echo $arrayy. " ";
	echo $explode[2]. " ";
}
if($kata == $explode[2])
{
	$arrayy = "<font style='color:#000000'><b>$explode[2]</b></font>"; 
	echo $explode[0]. " ";
	echo $explode[1]. " ";
	echo $arrayy. " "; 
}
