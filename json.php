<?php

$fCursor = file_get_contents('inter.html');

$handle = fopen("inter.html", "r");
while (($line = fgets($handle)) !== false) {
	echo $line . '<br/>';
}

