
<?php
	gethostname();
	$ip = $localIp = gethostbyname(gethostname());
	$webpage = ($_SERVER['REQUEST_METHOD']);
	foreach($_POST as $variable => $value) {
		$handle = fopen("./earth.html", "a");
		fwrite($handle, "\n" . $value . "</br>" . "\r\n");
	    header( 'Location: ./earth.html' );
		fclose($handle);
	}
?>