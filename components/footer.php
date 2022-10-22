<?php
require_once '../rest/config/config.php';
$f = @fopen(SCRIPT_ROOT . "changelog.txt", 'r');
$version = fgets($f);
fclose($f);
?>
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>ALMACEN lacupulagarraf.com <?php echo $version ?> - Copyright &copy; <a target="_blank" href="https://www.simonecelia.it">www.simonecelia.it</a> 2022</span>
		</div>
	</div>
</footer>