<?php

$nama = "QOLIL AHMAD"; /* Variabel Global */

function haloDunia () {
	$nama = "AHMAD"; # Variabel lokal
	echo $nama . '<br>'; # Ahmad
}

haloDunia();
	echo $nama; # QOLIL AHMAD