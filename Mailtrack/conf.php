<?php
 function Browser() {
	$browser = array (
                  "Firefox" => "Mozilla Firefox",
			      "opera" => "Opera",
			      "MSIE" => "Internet Explorer",
			      "Netscape" => "Netscape",
 			      "Nav" => "Netscape",
  		          "Gold" => "Netscape",
  				  "xll" => "Netscape",
  				  "Safari" => "Safari",
  				  "Chrome" => "Google Chrome",
  				  "Konqueror" => "Konqueror",
  				  "Links" => "Links",
  				  "w3m" => "w3m",
  				  "GranParadiso" => "Vimperator",
  				  "Lynx" => "Lynx",
  	);
  				  
  	foreach($browser as $item => $key) {
 		if(preg_match("/".$item."/i",$_SERVER['HTTP_USER_AGENT'])) {
  			return $key;
  		}
  	}
  	return 'Sconosciuto';
  }

  
function OS() {
$os = array (
	'Windows NT 6.1' => 'Windows 7',
	'Windows NT 6.0' => 'Windows Vista',
	'Windows NT 5.1' => 'Windows XP',
	'Windows NT 5.0' => 'Windows 2000',
	'windows ME'     => 'Windows ME',
	'winme'          => 'Windows ME',
	'windows 98'     => 'Windows 98',
	'win 98'         => 'Windows 98',
	'Mac'            => 'Mac',
	'PPC'            => 'Mac',
	'Darwin'         => 'Mac',
	'macintosh'      => 'Mac',
	'debian'         => 'Debian',
	'gentoo'         => 'Gentoo',
	'fedora'         => 'Fedora',
	'Ubuntu'         => 'Ubuntu',
	'red hat'        => 'Red Hat',
	'freebsd'        => 'FreeBSD',
	'openbds'        => 'OpenBDS',
	'netbds'         => 'NetBSD',
	'bsd'            => '*BSD',
	'minix'          => 'Minix',
	'Linux'          => 'GNU/Linux',
	'SunOS' 		 => 'SunOS',
	'Irix' 			 => 'Irix',
	'BeOS' 		 	 => 'BeOS',
	'OS/2' 			 => 'OS/2',
	'AIX' 			 => 'AIX'
);
foreach($os as $i => $k)
{
	if(preg_match("/".$i."/i",$_SERVER['HTTP_USER_AGENT']))
	{
		return $k;
	}
}
return 'Sconosciuto';
}


function giorno()
{
$d = date("l");
$day = array(
	"Monday" => "Lunedi",
	"Tuesday" => "Martedi",
	"Wednesday" => "Mercoledi",
	"Thursday" => "Giovedi",
	"Friday" => "Venerdi",
	"Saturday" => "Sabato",
	"Sunday" => "Domenica",
);
foreach($day as $item => $key)
{
	if(preg_match("/".$item."/i",$d))
	{
		return $key;
	}
}
}


?>