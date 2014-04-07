<?php

function render($name, $data = array()) {
	extract($data);
	$file = __DIR__ . "/../templates/" . $name .".php";
	if (file_exists($file))
		require($file);
}

function clear_cart($data = array()) {
	unset($_SESSION['cart']);
}

?>
