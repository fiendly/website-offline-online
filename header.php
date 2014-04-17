<?php
$file="./option.txt";
$fh = fopen($file, 'r');
$option= fread($fh,filesize($file));
fclose($fh);

If ($option == 'YES') {
	header('Location: ./online.php');
} else {
	header('Location: ./offline.php');
}

?>
